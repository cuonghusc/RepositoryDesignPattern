<?php 
    namespace App\Repositories\User;

    use Illuminate\Database\Eloquent\Model;
    use App\User;
    use App\Repositories\BaseRepository;

    class UserRepository extends BaseRepository implements UserRepositoryInterface {
        // Constructor Function
        public function __construct(User $user){
            parent::__construct($user);
        }
    }
?>