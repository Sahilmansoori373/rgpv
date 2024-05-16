@extends('layout/layout')

@section('space-work')
    <h1>
        {!! Session::has('msg') ? Session::get('msg') : '' !!}
    </h1>

    <h2 class="mb-4">Super Admin</h2>

    <div class="card">
        <div class="card-header">Notes Page</div>
        <div class="card-body">

            <form action="{{ route('spupdate.notes', $notes->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Pyq 1</label>
                    <input type="text" name="pyq1" value="{{ $notes->pyq1 }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Pyq 2</label>
                    <input type="text" name="pyq2" value="{{ $notes->pyq2 }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Pyq 3</label>
                    <input type="text" name="pyq3" value="{{ $notes->pyq3 }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Notes</label>
                    <input type="text" name="notes" value="{{ $notes->notes }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Syllabus</label>
                    <input type="text" name="syllabus" value="{{ $notes->syllabus }}" class="form-control">
                </div>
                <input type="submit" id="submit">
            </form>

        </div>
    </div>
@endsection
