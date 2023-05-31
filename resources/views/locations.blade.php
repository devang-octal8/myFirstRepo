@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Locations') }}
                <span style="margin-left: 70%">
                    <a href="{{ route('locations.create') }}" class="btn btn-primary"> Locations</a>
                </span></div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">bussiness_name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Created_User</th>
                            <th scope="col">OPERATIONS</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($locations as $location)
                            <tr>
                                <td scope="col">{{ $location->name }}</td>
                                <td scope="col">{{@$location->bussiness->name}}</td>
                                <td scope="col">{{ $location->email }}</td>
                                <td scope="col">{{ $location->address }}</td>

                                <td scope="col">{{ $location->created_user }}</td>
                                <td scope="col">
                                    <form action="{{ route('locations.destroy',$location->id)}}" method="post">
                                        <a href=" {{ route('locations.edit',$location->id)}}" class="btn btn-info">EDIT</a>&nbsp;
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
