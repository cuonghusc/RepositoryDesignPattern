@extends('master')

@section('content')
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Chi tiết</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $key => $value)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
            <td><a class="btn btn-success" href="{{url('user/'.$value->id.'/detail')}}">Xem</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
        
