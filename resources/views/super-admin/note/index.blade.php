@extends('layout/layout')

@section('space-work')
<h1>
    {!! Session::has('msg') ? Session::get("msg") : '' !!}
</h1>

    <h2 class="mb-4">Super Admin</h2>
    @if(auth()->user()->role == 2)
    <h5>hello</h5>
    @endif
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
                                <a href="{{ route('spaddnotes')}}" class="btn btn-success btn-sm" title="Add New Student">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                </a>
                                <br/>
                            <br/>
                            <br/>
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
                                    @foreach($data as $item)
                                    <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->pyq1 }}</td>
                                            <td>{{ $item->pyq2 }}</td>
                                            <td>{{ $item->pyq3 }}</td>
                                            <td>{{ $item->notes }}</td>
                                            <td>{{ $item->syllabus }}</td>
                                            <td>
                                                <a href="{{ route('spview.notes', $item->id)}}" ><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="{{ route('spedit.notes', $item->id)}}" ><button class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Edit</button></a>
                                                <a href="{{ route('spdelete.notes', $item->id)}}"><button class="btn btn-danger btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Delete</button></a>
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