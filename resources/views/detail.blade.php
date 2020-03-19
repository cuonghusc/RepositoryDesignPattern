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
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>{{ $detail->id}}</th>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>{{ $detail->name}}</th>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th>{{ $detail->email}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>            
        </div>        
    </div>
@endsection