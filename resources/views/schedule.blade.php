@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Study Schedule</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Course</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Alert</th>
            </tr>
        </thead>
        <tbody>
            @foreach($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->course->name }}</td>
                    <td>{{ $schedule->start_time }}</td>
                    <td>{{ $schedule->end_time }}</td>
                    <td>
                        <button class="btn btn-sm btn-primary" onclick="alert('Reminder: {{ $schedule->course->name }} starts at {{ $schedule->start_time }}')">
                            Set Alert
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection