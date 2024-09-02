<?php
    namespace app\Models;
    use CodeIgniter\Model;

    class LivreModel extends Model {
        protected $table = "livre";
        protected $primaryKey = "id";
        protected $allowedFields = [
            'titre','autheur',
            'dateDePret','isDispo','image'
        ];
    }
