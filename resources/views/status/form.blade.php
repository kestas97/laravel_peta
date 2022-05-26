@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create new pet status') }}</div>

                    <div class="card-body">
                        <form class="form " method="post" action="{{route('status.store' )}}">
                            @csrf
                            <div class="form-group">
                                <input  type="text" name="name" class="form-control" placeholder="Pet status name">
                                <input type="submit" value="Create" class="btn btn-primary">
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
