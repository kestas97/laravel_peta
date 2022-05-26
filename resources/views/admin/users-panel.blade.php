@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-light">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
{{--                    <th scope="col">Role</th>--}}
                    <th scope="col">Active</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->active}}</td>
                        <div class="custom-control custom-switch" >
                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                        </div>

                        <form method="POST" action="{{route('user.activate', $user->id)}}">
                            @csrf
                            <td><input type="submit" value="activate"></td>
                        </form>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

