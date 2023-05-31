@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card w-50 ">
                <div class="card-header">{{ __('Locations Form') }}</div>

                <div class="card-body">

                    <form action="{{ route('locations.store') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <select class="form-select" name="bussiness_id" id="floatingSelect" aria-label="Floating label select example">
                              <option selected>Select Bussiness</option>
                                @foreach ($bussinesses as $bussiness)
                                <option value="{{ $bussiness->id}}">{{$bussiness->name}}</option>
                                @endforeach
                            </select>
                          </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" name="name" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">email</label>
                          <input type="email" name="email" value="" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Address</label>
                          <input type="text" name="address" value="" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Created User</label>
                          <input type="text" name="created_user" value="" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
