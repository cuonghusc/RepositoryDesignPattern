<?php 
    namespace App\Repositories\Category;

    use Illuminate\Database\Eloquent\Model;
    use App\Category;
    use App\Repositories\BaseRepository;

    class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface {
        // Constructor Function
        public function __construct(Category $category){
            parent::__construct($category);
        }
    }
?>