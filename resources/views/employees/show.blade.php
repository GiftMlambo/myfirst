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
    
                    <h2>{{$employee->name}}</h2>
                    <hr>
                    <h3 class="text-success">Employee Information</h3>
                    <hr>

                    <h6 class="card-subtitle mb-2 text-muted">Employee ID</h6>
                    <h5 class="card-title">{{$employee->id}}</h5>
                    <hr>
                    
                    <h6 class="card-subtitle mb-2 text-muted">Name</h6>
                    <h5 class="card-title">{{$employee->name}}</h5>
                    <hr>

                    <h6 class="card-subtitle mb-2 text-muted">Surname</h6>
                    <h5 class="card-title">{{$employee->surname}}</h5>
                    <hr>

                    <h6 class="card-subtitle mb-2 text-muted">ID Number</h6>
                    <h5 class="card-title">{{$employee->idnumber}}</h5>
                    <hr>
                    
                    <h6 class="card-subtitle mb-2 text-muted">Date Of Birth</h6>
                    <h5 class="card-title">{{$employee->dob}}</h5>
                    <hr>
                    
                    <h6 class="card-subtitle mb-2 text-muted">Gender</h6>
                    <h5 class="card-title">{{$employee->gender}}</h5>
                    <hr>
                    
                    <h6 class="card-subtitle mb-2 text-muted">Address</h6>
                    <h5 class="card-title">{{$employee->address}}</h5>
                    
                    <hr>
                    <hr>
                    <h3 class="text-success">Work Information</h3>
                    <hr>
                    <hr>
          
                    <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                    <h5 class="card-title">{{$employee->position}}</h5>
                    <hr>
                    
                    <h6 class="card-subtitle mb-2 text-muted">YearsActive</h6>
                    <h5 class="card-title">{{$employee->yearsActive}}</h5>
                    <hr>
                    
                    <h6 class="card-subtitle mb-2 text-muted">Salary</h6>
                    <h5 class="card-title">{{$employee->salary}}</h5>
                    <hr>
                    
                    <h6 class="card-subtitle mb-2 text-muted">Current Status</h6>
                    <h5 class="card-title">{{$employee->currentStatus}}</h5>
                    <hr>

                    <a href="/employees/{{$employee->id}}/edit" class="btn btn-info">Edit User Information</a>
                    <hr>
    
                    {!!Form::open(['action' => ['EmployeeDataController@destroy', $employee->id], 'method' => 'POST', 'class' => 'btn btn-danger'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
