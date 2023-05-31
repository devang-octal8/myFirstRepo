@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bussiness Lists') }}</div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">OPERATIONS</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>NAME</td>
                            <td>LOGO</td>
                            <td>@email</td>
                            <td>address</td>
                            <td>
                                <a href="" class="btn btn-primary">SHOW</a>&nbsp;
                                <a href="" class="btn btn-info">EDIT</a>&nbsp;
                                <a href="" class="btn btn-danger">DELETE</a>
                            </td>
                          </tr>
                          <tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
