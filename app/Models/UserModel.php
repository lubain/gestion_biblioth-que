<?php
    namespace app\Models;
    use CodeIgniter\Model;

    class UserModel extends Model {
        protected $table = "membres";
        protected $primaryKey = "id";
        protected $allowedFields = ['firstname','lastname','email','password'];
    }

?>