@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$user->name}}</div>
                <div class="card-body">
                    <div class="col-6">{{$user->userDetails->address}}</div>
                    <div class="col-6">{{$user->userdetails->phone}}</div>
                    <div class="col-6">{{$user->userdetails->company_code}}</div>
                </div>
                <a class="btn btn-primary float-end" href="{{route('user.edit',$user->userDetails->id)}}">
                    Edit profile
                </a>
            </div>
        </div>


    </div>
@endsection
