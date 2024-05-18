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

    @extends('layout/layout')

    @section('space-work')
    <h2 class="mb-4">Super Admin</h2>
        <h1>
            {!! Session::has('msg') ? Session::get('msg') : '' !!}
        </h1>


        <div class="card">
            <div class="card-header">Subjects Page</div>
            <div class="card-body">

                <form action="{{ route('spstore.notes') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-2">
                        <label for="">Select Subject</label>
                    </div>
                    <div class="col-md-4">
                        <select name="id" required class="form-control" style="border: 1px solid;">
                            <option value="">Select Subject</option>
                            @foreach ($data as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pyq1">PYQ1 (PDF):</label>
                        <input type="file" id="pyq1" name="pyq1" accept=".pdf" required>
                    </div>
                    <div class="form-group">
                        <label for="pyq2">PYQ2 (PDF):</label>
                        <input type="file" id="pyq2" name="pyq2" accept=".pdf">
                    </div>
                    <div class="form-group">
                        <label for="pyq3">PYQ3 (PDF):</label>
                        <input type="file" id="pyq3" name="pyq3" accept=".pdf">
                    </div>
                    <div class="form-group">
                        <label for="notes">Notes (PDF):</label>
                        <input type="file" id="notes" name="notes" accept=".pdf" required>
                    </div>
                    <div class="form-group">
                        <label for="syllabus">Syllabus (PDF):</label>
                        <input type="file" id="notes" name="syllabus" accept=".pdf" required>
                    </div>
                    <input type="submit" id="submit">
                </form>
            </div>
        </div>
    @endsection
</body>

</html>
