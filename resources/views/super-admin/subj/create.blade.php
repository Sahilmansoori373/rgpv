<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group input[type="file"] {
            padding: 10px 0;
        }

        #submit {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        @media (max-width: 600px) {
            .container {
                max-width: 90%;
            }
        }
    </style>
</head>

<body>

</body>

</html>
@extends('layout/layout')

@section('space-work')
    <h2 class="mb-4">Super Admin</h2>
    <h1>
        {!! Session::has('msg') ? Session::get('msg') : '' !!}
    </h1>

    <div class="card">
        <div class="card-header">Subjects Page</div>
        <div class="card-body">
            <form action="{{ route('spstore.subject') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Subject Code</label>
                    <input type="text" name="code" class="form-control">
                </div>
                <div class="form-group">
                    <label>Semester</label>
                    <input type="text" name="semester" class="form-control">
                </div>
                <input type="submit" id="submit">
            </form>

        </div>
    </div>
@endsection
