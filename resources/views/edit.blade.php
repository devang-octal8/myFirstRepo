@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card w-50 ">
                <div class="card-header">{{ __('Bussiness Update') }}</div>

                <div class="card-body">

                    <form action="{{ route('bussinesses.update',$bussiness->id) }}" method="POST" enctype="multipart/form-data" class="">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" name="name" value="{{ $bussiness->name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="logo" id="inputGroupFile01">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">email</label>
                          <input type="email" name="email" value="{{$bussiness->email}}" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Address</label>
                          <input type="text" name="address" value="{{$bussiness->address}}" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
