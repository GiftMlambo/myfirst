@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-success">
                    <h3>Add New Employee</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div>
                        {!! Form::open(['action' => 'EmployeeDataController@store', 'method' => 'POST']) !!}
        
                        <div class="form-group">
                            {{Form::label('name', 'NAME')}}
                            {{Form::text('name', '', ['class'=>'form-control', 'placeholder' => 'NAME'])}}
                        </div>
        
                        <div class="form-group">
                            {{Form::label('surname', 'SURNAME')}}
                            {{Form::text('surname', '', ['class'=>'form-control', 'placeholder' => 'SURNAME'])}}
                        </div>
        
                        <div class="form-group">
                            {{Form::label('idnumber', 'ID NUMBER')}}
                            {{Form::text('idnumber', '', ['class'=>'form-control', 'placeholder' => 'ID NUMBER'])}}
                        </div>
        
                        <div class="form-group">
                            {{Form::label('dob', 'DATE OF BIRTH')}}
                            {{Form::text('dob', '', ['class'=>'form-control', 'placeholder' => 'DATE OF BIRTH'])}}
                        </div>
        
                        <div class="form-group">
                            {{Form::label('gender', 'GENDER')}}
                            {{Form::text('gender', '', ['class'=>'form-control', 'placeholder' => 'GENDER'])}}
                        </div>
        
                        <div class="form-group">
                            {{Form::label('address', 'ADDRESS')}}
                            {{Form::text('address', '', ['class'=>'form-control', 'placeholder' => 'ADDRESS'])}}
                        </div>
        
                        <div class="form-group">
                            {{Form::label('position', 'POSITION')}}
                            {{Form::text('position', '', ['class'=>'form-control', 'placeholder' => 'POSITION'])}}
                        </div>
                    
                        <div class="form-group">
                            {{Form::label('yearsActive', 'YEARS ACTIVE')}}
                            {{Form::text('yearsActive', '', ['class'=>'form-control', 'placeholder' => 'YEARS ACTIVE'])}}
                        </div>
                    
                        <div class="form-group">
                            {{Form::label('salary', 'SALARY')}}
                            {{Form::text('salary', '', ['class'=>'form-control', 'placeholder' => 'SALARY'])}}
                        </div>
                    
                        <div class="form-group">
                            {{Form::label('currentStatus', 'CURRENT STATUS')}}
                            {{Form::text('currentStatus', '', ['class'=>'form-control', 'placeholder' => 'CURRENT STATUS'])}}
                        </div>

                        {{Form::submit('SUBMIT', ['class'=>'btn btn-primary'])}}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection