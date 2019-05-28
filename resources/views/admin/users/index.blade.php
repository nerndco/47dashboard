@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage Users</div>

                <div class="card-body">

                    @section('content')
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          
                                          <th scope="col">user name</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Roles</th>

                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                          <td>{{ $user->name }}</td>
                                          <td>{{ $user->email }}</td>
                                          <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                          <td>
                                            <a href="{{ route('admin.users.edit',  $user->id) }}">
                                              <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                            </a>
                                          </td>

                                        </tr>
                                        @endforeach
                                        
                                      </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>
                    </div>
                    @endsection
                </div>
            </div>
        </div>
    </div>
</div>
@endsection