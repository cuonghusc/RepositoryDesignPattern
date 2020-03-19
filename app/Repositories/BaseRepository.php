<?php 
    namespace App\Repositories;

    use Illuminate\Database\Eloquent\Model;

    class BaseRepository implements BaseRepositoryInterface{
        protected $model;
        // Constructor Function
        public function __construct(Model $model){
            $this->model = $model;
        }
        // Get All User
        public function getAllList(){
            return $this->model->all();
        }
        // Get User by ID 
        public function findByID($id){
            return $this->model->findOrFail($id);
        }
    }
?>