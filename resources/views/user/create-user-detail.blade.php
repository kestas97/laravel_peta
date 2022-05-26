@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('user detail') }}</div>

                    <div class="card-body">
                        <form class="form " method="post" action="{{route('user.store' )}}">
                            @csrf
                            <div class="form-group">
                                <input  type="text" name="address" class="form-control" placeholder="Your address">
                                <input  name="phone" type="text" class="form-control" placeholder="+370 xxxxxxxx">
                                <input  name="company_code" type="text" class="form-control" placeholder="company code">
                                <input type="submit" value="Create" class="btn btn-primary">
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
