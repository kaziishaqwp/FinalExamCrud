@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Employee Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID: {{ $employee->id }}</h5>
            <p class="card-text"><strong>Employee ID:</strong> {{ $employee->employee_id }}</p>
            <p class="card-text"><strong>Name:</strong> {{ $employee->name }}</p>
            <p class="card-text"><strong>Phone:</strong> {{ $employee->phone }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $employee->email }}</p>
            <p class="card-text"><strong>Address:</strong> {{ $employee->address }}</p>
            <p class="card-text"><strong>Salary:</strong> {{ $employee->salary }}</p>
            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
