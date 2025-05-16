@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Assignments</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Course</th>
                <th>Assignment</th>
                <th>Deadline</th>
                <th>Alert</th>
            </tr>
        </thead>
        <tbody>
            @foreach($assignments as $assignment)
                <tr>
                    <td>{{ $assignment->course->name }}</td>
                    <td>{{ $assignment->title }}</td>
                    <td>{{ $assignment->deadline }}</td>
                    <td>
                        <button class="btn btn-sm btn-primary" onclick="alert('Reminder: {{ $assignment->title }} is due on {{ $assignment->deadline }}')">
                            Set Alert
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection