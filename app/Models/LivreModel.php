<?php
    namespace app\Models;
    use CodeIgniter\Model;

    class LivreModel extends Model {
        protected $table = "livre";
        protected $primaryKey = "id";
        protected $allowedFields = [
            'titre','auteur',
            'image','categorie','type',
            'dateDePret','dateDeRetour','isDispo'
        ];
    }
