<?php
namespace App\Controllers;

use App\Models\LoginAdmin;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index(): string
    {
        return view('LoginAdmin');
    }
    public function login()
    {
        if (session()->get('id')) {
            $url = base_url("public/");
            return redirect()->to($url);
        }
        $data["error"] = "";
        return view('login',$data);
    }
    public function check()
    {
        $modeladmin = new LoginAdmin();
        $modelmembre = new UserModel();
        if ($this->request->getPost('admin')) {
            $model = $modeladmin;
        } else {
            $model = $modelmembre;
        }
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        // $password = password_hash($this->request->getPost('password'),PASSWORD_DEFAULT);
        $errorEmail = $model->where('email',$email)->findAll();
        $errorPass = $model->where('password',$password)->findAll();
        $admin = $model->where('email',$email)->where('password',$password)->findAll();
        if (count($admin) > 0) {
            $id = $admin[0]['id'];
            session()->set('id', $id);
            $url = base_url("public/");
            return redirect()->to($url);
        }
        $error = "";
        if (!$errorEmail && !$errorPass) {
            $error = "votre email et mot de passe sont incorrect";
        } else {
            if (!$errorPass) $error = "mot de passe incorrect";
            else if (!$errorEmail) $error = "email incorrect";
        }
        $data["error"] = $error;
        return view('login',$data);
    }
    public function createAdmin(): string
    {
        return view('signupAdmin');
    }
    
    public function insertAdmin()
    {
        $model = new LoginAdmin();
        $data = [
            'username'=>$this->request->getPost('username'),
            'email'=>$this->request->getPost('email'),
            'password'=>password_hash($this->request->getPost('password'),PASSWORD_DEFAULT)
        ];
        $model->insert($data);
        $id = $model->getInsertID();
        session()->set('id', $id);
        $url = base_url("public/");
        return redirect()->to($url);
    }
    public function logout()
    {
        session();
        session_destroy();
        $url = base_url("public/login");
        return redirect()->to($url);
    }
}