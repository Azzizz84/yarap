@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Remote Tests</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Course</th>
                <th>Test</th>
                <th>Date</th>
                <th>Alert</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tests as $test)
                <tr>
                    <td>{{ $test->course->name }}</td>
                    <td>{{ $test->title }}</td>
                    <td>{{ $test->test_date }}</td>
                    <td>
                        <button class="btn btn-sm btn-primary" onclick="alert('Reminder: {{ $test->title }} is on {{ $test->test_date }}')">
                            Set Alert
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection