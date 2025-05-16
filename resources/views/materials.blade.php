@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Download Materials</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Course</th>
                <th>Material</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materials as $material)
                <tr>
                    <td>{{ $material->course->name }}</td>
                    <td>{{ $material->name }}</td>
                    <td>
                        <a href="{{ route('materials.download', $material->id) }}" class="btn btn-sm btn-success">
                            Download
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection