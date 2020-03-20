<?php 
    namespace App\Repositories\Student;

    use Illuminate\Database\Eloquent\Model;
    use App\Student;
    use App\Repositories\BaseRepository;

    class StudentRepository extends BaseRepository implements StudentRepositoryInterface {
        // Constructor Function
        public function __construct(Student $student){
            parent::__construct($student);
        }
    }
?>