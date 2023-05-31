@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card w-50 ">
                <div class="card-header">{{ __('bussiness Form') }}</div>

                <div class="card-body">

                    <form action="{{ route('bussinesses.store') }}" method="POST" enctype="multipart/form-data" class="">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="logo" id="inputGroupFile01">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">email</label>
                          <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Address</label>
                          <input type="text" name="address" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Created User</label>
                          <input type="text" name="created_user" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
