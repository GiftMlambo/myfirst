@extends('layouts.app');

@section('content')

    @if (count($employees) > 0)
    <table class="table table-dark">
        <thead>
            <tr>
              <th scope="col">Employee ID</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
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
                <a href="/employees/{{$employee->id}}"  class="btn btn-primary">View Employee Profile</a>
            </td>
          </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <p>No Employees in the records</p>
    @endif

@endsection