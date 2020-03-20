<?php 
    namespace App\Repositories\Student;

    use Illuminate\Database\Eloquent\Model;
    use App\Models\Student;
    use App\Repositories\BaseRepository;
    use Illuminate\Support\Facades\DB;

    class StudentRepository extends BaseRepository implements StudentRepositoryInterface {
        // Constructor Function
        public function __construct(Student $student){
            parent::__construct($student);
        }
        public static function store($data){
            try {
                $dataReturn = DB::transaction(function () use ($data) {
                    $studentNew = $this->model::create($data);
                    return $studentNew;
                });
    
                return $dataReturn;
            } catch (\Exception $e) {
                return $e->getMessage();
            }
        }
    }
?>