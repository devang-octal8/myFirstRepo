@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bussiness Locations') }} </div>


                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">{{ $bussiness->name}}</th>
                          </tr>
                          <tr>
                            <th scope="col">Email</th>
                            <th scope="col">{{ $bussiness->email}}</th>
                          </tr>
                          <tr>
                            <th scope="col">Address</th>
                            <th scope="col">{{ $bussiness->address}}</th>
                          </tr>
                          <tr>
                            <th scope="col">Locations :</th>
                            <th scope="col">{{ implode(', ',Arr::pluck($bussiness->locations, 'name')) }}</th>
                          </tr>
                        </thead>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
