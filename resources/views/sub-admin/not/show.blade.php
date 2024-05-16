@extends('layout/layout')

@section('space-work')
    <h2 class="mb-4">Sub Admin</h2>

    <section id="resource" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h3>Notes</h3>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Computer Science Engineering</h2>
                        </div>
                        <div class="card-body">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                {{-- <th>Subject Name</th> --}}
                                                <th>Pyq 1</th>
                                                <th>Pyq 2</th>
                                                <th>Pyq 3</th>
                                                <th>Notes</th>
                                                <th>Syllabus</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($subject as $item) --}}
                                            <tr>
                                                <td>{{ $notes->id }}</td>
                                                <td>
                                                    <iframe height="400" width="400"
                                                        src="/assets/folder/{{ $notes->pyq1 }}"></iframe>
                                                </td>
                                                <td>
                                                    <iframe height="400" width="400"
                                                        src="/assets/folder/{{ $notes->pyq2 }}"></iframe>
                                                </td>
                                                <td>
                                                    <iframe height="400" width="400"
                                                        src="/assets/folder/{{ $notes->pyq3 }}"></iframe>
                                                </td>
                                                <td>
                                                    <iframe height="400" width="400"
                                                        src="/assets/folder/{{ $notes->notes }}"></iframe>
                                                </td>
                                                {{-- <iframe height="400"  width="400" src="/assets/folder/{{$notes->syllabus}}"></iframe> --}}
                                                <td>{{ $notes->syllabus }}</td>
                                                <td>
                                                    {{-- <a href="{{ route('view.subject', $item->id)}}" title="View Subject"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> --}}
                                                    {{-- <a href="#" title="View Subject"><button class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Edit</button></a> --}}
                                                    {{-- <a href="{{ url('/student/' . $item->id) }}" title="View Subject"><button class="btn btn-danger btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Delete</button></a> --}}
                                                </td>
                                            </tr>
                                            {{-- @endforeach --}}
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
