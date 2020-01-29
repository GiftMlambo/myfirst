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
                    
                    <div>
                        <h1>Edit Employees</h1>
                    </div>

                    <div>
                        {!! Form::open(['action' => ['EmployeeDataController@update', $employee->id], 'method' => 'POST']) !!}
                        
                        <div class="form-group">
                            {{Form::label('name', 'NAME')}}
                            {{Form::text('name', $employee-> name, ['class'=>'form-control', 'placeholder' => 'NAME'])}}
                        </div>
                        
                        <div class="form-group">
                            {{Form::label('surname', 'SURNAME')}}
                            {{Form::text('surname', $employee-> surname, ['class'=>'form-control', 'placeholder' => 'SURNAME'])}}
                        </div>
                        
                        <div class="form-group">
                            {{Form::label('idnumber', 'ID NUMBER')}}
                            {{Form::text('idnumber', $employee-> idnumber, ['class'=>'form-control', 'placeholder' => 'ID NUMBER'])}}
                        </div>
                        
                        <div class="form-group">
                            {{Form::label('dob', 'DATE OF BIRTH')}}
                            {{Form::text('dob', $employee-> dob, ['class'=>'form-control', 'placeholder' => 'DATE OF BIRTH'])}}
                        </div>
                        
                        <div class="form-group">
                            {{Form::label('gender', 'GENDER')}}
                            {{Form::text('gender', $employee-> gender, ['class'=>'form-control', 'placeholder' => 'GENDER'])}}
                        </div>
                        
                        <div class="form-group">
                            {{Form::label('address', 'ADDRESS')}}
                            {{Form::text('address', $employee-> address, ['class'=>'form-control', 'placeholder' => 'ADDRESS'])}}
                        </div>
                        
                        <div class="form-group">
                            {{Form::label('position', 'POSITION')}}
                            {{Form::text('position', $employee-> position, ['class'=>'form-control', 'placeholder' => 'POSITION'])}}
                        </div>
                        
                        <div class="form-group">
                            {{Form::label('yearsActive', 'YEARS ACTIVE')}}
                            {{Form::text('yearsActive', $employee-> yearsActive, ['class'=>'form-control', 'placeholder' => 'YEARS ACTIVE'])}}
                        </div>
                        
                        <div class="form-group">
                            {{Form::label('salary', 'SALARY')}}
                            {{Form::text('salary', $employee-> salary, ['class'=>'form-control', 'placeholder' => 'SALARY'])}}
                        </div>
                        
                        <div class="form-group">
                            {{Form::label('currentStatus', 'CURRENT STATUS')}}
                            {{Form::text('currentStatus', $employee-> currentStatus, ['class'=>'form-control', 'placeholder' => 'CURRENT STATUS'])}}
                        </div>

                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('SUBMIT', ['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection