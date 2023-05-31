@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bussinesses List') }} <span style="margin-left: 70%">
                    <a href="{{ route('bussinesses.create') }}" class="btn btn-primary"> Bussiness</a>&nbsp;
                </span></div>


                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Created User</th>
                            <th scope="col">OPERATIONS</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($bussinesses as $bussiness)
                            <tr>
                                <td>{{ $bussiness->name }}</td>
                                <td>
                                    <img src="{{ asset('storage/images/'.$bussiness->logo)}}" alt="" width=80 height=80>
                                </td>
                                <td>{{ $bussiness->email }}</td>
                                <td>{{ $bussiness->address }}</td>
                                <td>{{ $bussiness->created_user }}</td>
                                <td>

                                    <form action="{{ route('bussinesses.destroy',$bussiness->id) }}" method="post">
                                        <a href=" {{ route('bussinesses.show',$bussiness->id) }}" class="btn btn-primary">SHOW</a>&nbsp;
                                        <a href="{{ route('bussinesses.edit',$bussiness->id) }}" class="btn btn-info">EDIT</a>&nbsp;
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                              </tr>
                            @endforeach

                        </tbody>
                      </table>

                    <div class="pagination-links">
                        {{ $bussinesses->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
