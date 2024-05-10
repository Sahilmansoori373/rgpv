@extends('layout/layout')

@section('space-work')

    <h2 class="mb-4">Super Admin</h2>

    <section id="resource" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h3>Subjects</h3>
          </div>
            <div class="row">
     
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Computer Science Engineering</h2>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                               
                                <br/>
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject Name</th>
                                            <th>Subject Code</th>
                                            <th>Semester</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    {{-- @foreach($subject as $item) --}}
                                    <tr>
                                            <td>{{ $subjects->id }}</td>
                                            <td>{{ $subjects->name }}</td>
                                            <td>{{ $subjects->code }}</td>
                                            <td> Semester {{ $subjects->semester }}</td>
     
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