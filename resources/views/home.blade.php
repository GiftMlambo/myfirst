@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    
                    <div class="col-md-8">
                        <a href="/employees/create" class="btn btn-success">Add a new Employee Record</a>
                    </div>
                    <hr>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Employee ID</th>
                            <th scope="col">Employee Name</th>
                            <th scope="col">Employee Surname</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($employees as $employee)
                          <tr>
                            <td>{{$employee->id}}</td>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->surname}}</td>
                            <td>
                                <a href="/employees/{{$employee->id}}" class="btn btn-primary">View Employee Profile</a>
                            </td>
                          </tr>
                          @endforeach
                        <tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
