@extends('master')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">Chi tiết</div>
        <div class="panel-body">
            <div class="row">
                <div class="col col-sm-6 img_avt">
                    <img src="https://www.kindpng.com/picc/m/78-785827_user-profile-avatar-login-account-male-user-icon.png" alt="">
                </div>
                <div class="col col-sm-6">
                    <table class="table table-light">
                        <tbody class="thead-light">
                            <tr>
                                <td>ID</td>
                                <td>{{ $detail->id}}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $detail->name}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $detail->email}}</td>
                            </tr>
                            <tr>
                                <td>Birthday</td>
                                <td>{{ $detail->birthday}}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{ $detail->address}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="pull-right">
                    <a class="btn btn-warning" href="{{route('student.edit',$detail->id)}}">Sửa</a>
                        <a class="btn btn-danger" href="">Xóa</a>
                    </div>
                </div>
            </div>            
        </div>        
    </div>
@endsection