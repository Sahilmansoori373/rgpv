@extends('layout/layout')

@section('space-work')
<h2 class="mb-4">Admin</h2>
    <h1>
        {!! Session::has('msg') ? Session::get('msg') : '' !!}
    </h1>
    <div class="card">
        <div class="card-header">Notes Page</div>
        <div class="card-body">
            <form action="{{ route('update.notes', $notes->id) }}" method="post" enctype="multipart/form-data" onsubmit="()=>{console.log('Hello')}">
                @csrf

                <div class="form-group">
                    <label for="pyq1">PYQ1 (PDF):</label>
                    <input type="file" id="pyq1" name="pyq1" accept=".pdf">
                </div>
                <div class="form-group">
                    <label for="pyq3">PYQ2 (PDF):</label>
                    <input type="file" id="pyq2" name="pyq2" accept=".pdf">
                </div>
                <div class="form-group">
                    <label for="pyq1">PYQ3 (PDF):</label>
                    <input type="file" id="pyq3" name="pyq3" accept=".pdf">
                </div>
                <div class="form-group">
                    <label for="notes">notes (PDF):</label>
                    <input type="file" id="notes" name="notes" accept=".pdf">
                </div>
                <div class="form-group">
                    <label for="syllabus">syllabus (PDF):</label>
                    <input type="file" id="syllabus" name="syllabus">
                </div>
                <input type="submit" id="submit">
            </form>
        </div>
    </div>
@endsection
