@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Change Specialization</h1>
    <form action="{{ route('specialization.update') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="specialization">Select Specialization</label>
            <select name="specialization" id="specialization" class="form-control">
                <option value="Computer Science">Computer Science</option>
                <option value="Business Administration">Business Administration</option>
                <option value="Engineering">Engineering</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Specialization</button>
    </form>
</div>
@endsection