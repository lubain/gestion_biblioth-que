<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\LivreModel;
use DateTime;

class Home extends BaseController
{
    public function index()
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        $model = new UserModel();
        $data['user'] = $model->findAll();
        return view('home',$data);
    }
    public function search(): string
    {
        $model = new LivreModel();
        $livre = $model->findAll();
        $search = $this->request->getPost('search');
        $categorie = $this->request->getPost('categorie');
        $type = $this->request->getPost('type');
        $filliere = $this->request->getPost('filliere');
        if (
            $search ||
            $categorie ||
            $type ||
            $filliere
        ) {
            if ($search) $livre = $model->like("titre",$search)->findAll();
            else if ($categorie) $livre = $model->like("categorie",$categorie)->findAll();
            else if ($type) $livre = $model->like("type",$type)->findAll() ;
            else if ($filliere) $livre = $model->like("fillier",$filliere)->findAll();
        }
        $data['livres'] = $livre;
        $data['nb'] = count($livre);
        return view('search',$data);
    }
    public function detailSearch($id): string
    {
        $model = new LivreModel();
        $data['livre'] = $model->find($id);
        return view('detailSearch',$data);
    }
    public function sell()
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        return view('sell');
    }
    public function detailSell(): string
    {
        return view('detailSell');
    }

    // -----------------------------------

    public function admin()
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        return view('admin');
    }

    // -------- Users controller -------------

    public function userList()
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        
        $model = new UserModel();
        $user = $model->findAll();
        $name = $this->request->getPost('search');
        if ($name) {
            $user = $model->like("username",$name)->findAll();
        }
        $data['user'] = $user;
        $data['nb'] = count($user);
        return view('userList',$data);
    }
    public function searchUserAdmin(): string
    {
        return $this->userList();
    }
    public function formUser(): string
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        return view("createUser");
    }
    public function findUser($id): string
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        $model = new UserModel();
        $data['user'] = $model->find($id);
        return view('userUpdate',$data);
    }
    public function createUser()
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        $model = new UserModel();
        $data = [
            'username'=>$this->request->getPost('username'),
            'email'=>$this->request->getPost('email'),
            'password'=>$this->request->getPost('password')
        ];
        $model->insert($data);
        $url = base_url("public/userList");
        return redirect()->to($url);
    }
    public function userUpdate($id)
    {
        $model = new UserModel();
        $data = [
            'username'=>$this->request->getPost('username'),
            'email'=>$this->request->getPost('email'),
            'password'=>$this->request->getPost('password')
        ];
        $model->update($id, $data);
        $url = base_url("public/userList");
        return redirect()->to($url);
    }
    public function deleteUser($id)
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        $model = new UserModel();
        $model->delete($id);
        $url = base_url("public/userList");
        return redirect()->to($url);
    }

    // -------------------------------

    // ---------- livre controller ----------

    public function livreList()
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        $model = new LivreModel();
        $livre = $model->findAll();
        $search = $this->request->getPost('search');
        $categorie = $this->request->getPost('categorie');
        $type = $this->request->getPost('type');
        $filliere = $this->request->getPost('filliere');
        if (
            $search ||
            $categorie ||
            $type ||
            $filliere
        ) {
            if ($search) $livre = $model->like("titre",$search)->findAll();
            else if ($categorie) $livre = $model->like("categorie",$categorie)->findAll();
            else if ($type) $livre = $model->like("type",$type)->findAll() ;
            else if ($filliere) $livre = $model->like("fillier",$filliere)->findAll();
        }
        $data['livre'] = $livre;
        $data['nb'] = count($livre);
        return view('livreList',$data);
    }
    public function searchLivre(): string
    {
        return $this->search();
    }
    public function searchLivreAdmin(): string
    {
        return $this->livreList();
    }
    public function formLivre()
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        return view("createLivre");
    }
    public function findLivre($id)
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        $model = new LivreModel();
        $data['livre'] = $model->find($id);
        return view('livreUpdate',$data);
    }
    public function createLivre()
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        $model = new LivreModel();
        $img_dir = $this->uploadImage();
        $data = [
            'titre'=>$this->request->getPost('titre'),
            'auteur'=>$this->request->getPost('auteur'),
            'image'=>$img_dir,
            'categorie'=>$this->request->getPost('categorie'),
            'type'=>$this->request->getPost('type')
        ];
        $model->insert($data);
        // $user_id = $model->db->insertID();

        $url = base_url("public/livreList");
        return redirect()->to($url);
    }
    public function pret($id)
    {
        $model = new LivreModel();
        $datePret = new DateTime();
        $dateRetour = (clone $datePret)->modify('+10 days');
        $data = [
            'dateDePret'=>$datePret->format('Y-m-d H:i:s'),
            'dateDeRetour'=>$dateRetour->format('Y-m-d H:i:s'),
            'isDispo'=>0
        ];
        $model->update($id, $data);
        $url = base_url("public/search/detailSearch/$id");
        return redirect()->to($url);
    }
    public function livreUpdate($id)
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        $model = new LivreModel();
        // $img_dir = $this->uploadImage();
        $data = [
            'titre'=>$this->request->getPost('titre'),
            'auteur'=>$this->request->getPost('auteur'),
            'categorie'=>$this->request->getPost('categorie'),
            'type'=>$this->request->getPost('type')
            // 'dateDePret'=>$this->request->getPost('dateDePret')
            // 'image'=>$img_dir
        ];
        $model->update($id, $data);
        $url = base_url("public/livreList");
        return redirect()->to($url);
    }
    public function deleteLivre($id)
    {
        if (!session()->get('id')) {
            $url = base_url("public/login");
            return redirect()->to($url);
        }
        $model = new LivreModel();
        // ----------
        $livre = $model->find($id);
        $imagePath = $livre["image"];

        if (file_exists($imagePath)) {
            if (unlink($imagePath)) {
                echo "L'image a été supprimée avec succès.";
            } else {
                echo "Une erreur est survenue lors de la suppression de l'image.";
            }
        } else {
            echo "L'image n'existe pas.";
        }
        // -------------
        $model->delete($id);
        $url = base_url("public/livreList");
        return redirect()->to($url);
    }

    // ---------------------

    public function upload(): string
    {
        return view('upload');
    }

    // ---------------

    public function uploadImage() {
        $phpFileUploadErrors = array(
            0 => 'There is no error, the file upload with succes',
            1 => 'the upload file excceds the upload_maxfilesize directive in php.ini',
            2 => 'the upload file excceds the MAX_FILE_SIZE directive that was specified in the HTML form',
            3 => 'the upload file excceds only partially uploaded',
            4 => 'on file was uploaded',
            6 => 'missing a temporary folder',
            7 => 'failed to write file to disk',
            8 => 'a php extesion stopped the file upload.',
        );
        if (isset($_FILES['image'])){
            $image = $this->reArrayFiles($_FILES['image']);
            if ($image['error']){
                echo $image['name'].' - '.$phpFileUploadErrors[$image['error']];
            }else{
                $extensions = array('jpg','png','gif','jpeg','webp','PNG');

                $file_ext = explode('.',$image['name']);
                $file_ext = end($file_ext);

                if (!in_array($file_ext,$extensions)){
                    echo "{$image['name']} - invalid file extension!";
                }else{
                    $img_dir = 'local/'.$image['name'];
                    move_uploaded_file($image['tmp_name'],$img_dir);
                    return $img_dir;
                }
            }
        }
    }

    public function reArrayFiles(&$file_post){
        $file_ary = array();
        $file_keys = array_keys($file_post);
        foreach ($file_keys as $key){
            $file_ary[$key] = $file_post[$key];
        }
        return $file_ary;
    }
}
