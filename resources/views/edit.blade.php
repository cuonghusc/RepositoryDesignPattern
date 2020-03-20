@extends('master')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">Sửa</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form action="" method="post">
                        <div class="input-group">
                            <span class="input-group-addon">Fullname</span>
                        <input name="name" type="text" class="form-control" placeholder="Nguyen Van A" value="{{$edit->name}}" required>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon">Email</span>
                            <input name="email" type="email" class="form-control" placeholder="example@email.com" value="{{$edit->email}}" required>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon">Address</span>
                            <input name="address" type="text" class="form-control" placeholder="Hue, Viet Nam" value="{{$edit->address}}" required>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon">Birthday</span>
                            <input name="birthday" type="date" class="form-control" value="{{$edit->birthday}}" required>
                        </div>
                        <hr>
                        <button class="btn btn-success">Cập nhật</button>
                        <a href="{{route('student.list')}}" class="btn btn-danger">Hủy</a>
                    </form>
                </div>
            </div>            
        </div>        
    </div>
@endsection