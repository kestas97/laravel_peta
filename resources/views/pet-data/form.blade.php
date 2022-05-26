@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create new information about pets') }}</div>

                    <div class="card-body">
                        <form class="form " method="post" action="{{route('pet-data.store' )}}">
                            @csrf
                            <div class="form-group">
                                <select name="pet_id" class="form-control">
                                    <option>Pet Name</option>
                                    @foreach($petNames as $petName )
                                        <option value="{{$petName->id}}">{{$petName->name}}</option>
                                    @endforeach
                                </select>
                                <select name="status_id" class="form-control">
                                    <option>Pet Status</option>
                                    @foreach($petStatuses as $petStatus)
                                        <option value="{{$petStatus->id}}">{{$petStatus->name}}</option>
                                    @endforeach
                                </select>
                                <input  type="text" name="quantity" class="form-control" placeholder="Quantyti">
                                <div class="row mb-3">
                                    <label for="period" class="col-md-4 col-form-label text-md-end">{{ __('Period') }}</label>
                                    <div class="col-md-6">
                                        <input id="period" type="month" class="form-control" name="period" autofocus>
                                    </div>
                                </div>


                                <input type="submit" value="Create" class="btn btn-primary">
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

