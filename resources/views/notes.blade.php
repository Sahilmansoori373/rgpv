<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="assets/css/main.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    
    {{-- @extends('welcome') --}}
    {{-- @section('sub') --}}
    <div class="container">
        <div class="row">
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2></h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        {{-- <th>Subect Name</th> --}}
                                        <th>pyq1</th>
                                        <th>pyq2</th>
                                        <th>pyq3</th>
                                        <th>notes</th>
                                        <th>syllabus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {{-- @foreach($data as $id=> $item) --}}
                                    <tr>
                                        {{-- <td>{{ $loop->iteration }}</td> --}}
                                        {{-- <td>{{ $item->name }}</td> --}}
                                        <td>{{ $data->id }}</td>           
                                        <td>
                                            {{-- <div class="row justify-content-center"> --}}
                                                <iframe height="800"  width="400" src="/assets/folder/10th.pdf"></iframe>
                                                {{-- <iframe src="{{ asset('folder/10th.pdf') }}" width="50%" height="600"> --}}
                                                    {{-- This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('folder/10th.pdf') }}">Download PDF</a> --}}
                                                    {{-- </iframe> --}}
                                                </td>                             
                                            {{-- </div> --}}
                                            {{-- <td>{{ $data->pyq1 }}</td> --}}
                                            {{-- <td>{{ $data->pyq2 }}</td> --}}
                                            <td>
                                                <iframe height="800"  width="400" src="/assets/folder/qool.pdf"></iframe>
                                            </td>
                                            <td>
                                                <iframe height="800"  width="400" src="/assets/folder/10th.pdf"></iframe>
                                            </td>
                                            <td>
                                                <iframe height="800"  width="400" src="/assets/folder/qool.pdf"></iframe>
                                            </td>
                                        {{-- <td>{{ $data->pyq3 }}</td> --}}
                                        {{-- <embed src="{{ $data->pyq1 }}" type="application/pdf" width="100%" height="600px"> --}}
                                        {{-- <td>{{ $data->notes }}</td> --}}
                                        {{-- <td>{{ $data->syllabus }}</td> --}}
 
                                        {{-- <td> --}}
                                            {{-- <a href="{{ route('view.notes', $item->id)}}" title="View Subject"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> --}}
                                            {{-- <a href="#" title="View Subject"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> --}}
                                            {{-- <a href="{{ url('/student/' . $item->id) }}" title="View Subject"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> --}}
                                         {{-- </td> --}}
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
{{-- @endsection --}}
        </body>
        </html>