<?php 
    namespace App\Repositories;
    
    use Illuminate\Database\Eloquent\Model;


    interface BaseRepositoryInterface {
        public function getAllList();
        public function findByID($id);
    }
?>