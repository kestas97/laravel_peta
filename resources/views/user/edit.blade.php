@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('edit user detail') }}</div>

                    <div class="card-body">
                        <form class="form " method="post" action="{{route('user.update', $user->userDetails->id )}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input value="{{$user->userDetails->address}}" type="text" name="address" class="form-control" placeholder="Your address">
                                <input value="{{$user->userDetails->phone}}" name="phone" type="text" class="form-control" placeholder="+370 xxxxxxxx">
                                <input value="{{$user->userDetails->company_code}}" name="company_code" type="text" class="form-control" placeholder="company code">
                                <input type="submit" value="Update" class="btn btn-primary">
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

