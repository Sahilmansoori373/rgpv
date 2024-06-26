@extends('layout/layout')

@section('space-work')
<h2 class="mb-4">Sub Admin</h2>
    <h3 style="color: green;">
        {!! Session::has('msg') ? Session::get('msg') : '' !!}
    </h3>
    <section id="resource" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3>Notes</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Computer Science & Engineering</h3>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <a href="{{ route('sbaddnotes') }}" class="btn btn-success btn-sm" title="Add New Student">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                </a>
                                <br><br>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Subject Name</th>
                                                <th>pyq1</th>
                                                <th>pyq2</th>
                                                <th>pyq3</th>
                                                <th>notes</th>
                                                <th>Syllabus</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->pyq1 }}</td>
                                                    <td>{{ $item->pyq2 }}</td>
                                                    <td>{{ $item->pyq3 }}</td>
                                                    <td>{{ $item->notes }}</td>
                                                    <td>{{ $item->syllabus }}</td>
                                                    <td>
                                                        <a href="{{ route('sbview.notes', $item->id) }}"><button
                                                                class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i> View</button></a>
                                                        <a href="{{ route('sbedit.notes', $item->id) }}"><button
                                                                class="btn btn-success btn-sm"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i> Edit</button></a>
                                                        <a href="{{ route('sbdelete.notes', $item->id) }}"><button
                                                                class="btn btn-danger btn-sm"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i> Delete</button></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- </div> --}}
    </section>
@endsection
