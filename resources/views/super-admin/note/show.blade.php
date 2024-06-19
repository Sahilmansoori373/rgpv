@extends('layout/layout')

@section('space-work')
    <h2 class="mb-4">Super Admin</h2>

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
                               <h3>
                            pyq1       
                                   <iframe height="400" width="400" src="/assets/folder/{{ $notes->pyq1 }}"></iframe>
                            </h3> 
                               <h3>
                            pyq2       
                                   <iframe height="400" width="400" src="/assets/folder/{{ $notes->pyq2 }}"></iframe>
                            </h3> 

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Sr
                                                     No</th>
                                                {{-- <th>Subject Name</th> --}}
                                                <th>Pyq 1</th>
                                                <th>Pyq 2</th>
                                                <th>Pyq 3</th>
                                                <th>Notes</th>
                                                <th>Syllabus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($subject as $item) --}}
                                            <tr>
                                                <td>{{ $notes->id }}</td>
                                                <td>
                                                    <iframe height="400" width="400" src="/assets/folder/{{ $notes->pyq1 }}"></iframe>
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
                                                <td>
                                                    <iframe height="400" width="400"
                                                        src="/assets/folder/{{ $notes->syllabus }}"></iframe>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
