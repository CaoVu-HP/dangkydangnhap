@extends('layouts.app')
@section('content')
<div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Started Time</th>
                                <th scope="col">Teacher</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
@php($i=1)
@foreach($subject as $version)
    <tr>

        <td>{{$version->name}}</td>
        <td>{{$version->teacher}}</td>
        <td>{{$version->time}}</td>
        <td>
            <button type="button" class="btn btn-success"><a href="{{route('dangky',['id'=>$version->id])}}" class="text-white ">Register</a></button>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
@endsection
