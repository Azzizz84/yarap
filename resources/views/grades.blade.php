@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Grades</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Course</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            @foreach($grades as $grade)
                <tr>
                    <td>{{ $grade->course->name }}</td>
                    <td>{{ $grade->grade }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection