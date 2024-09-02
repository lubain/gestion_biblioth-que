<?php
    namespace app\Models;
    use CodeIgniter\Model;

    class LoginAdmin extends Model {
        protected $table = 'admin';
        protected $id = 'id';
        protected $allowedFields = ['email','password'];
    }

?>