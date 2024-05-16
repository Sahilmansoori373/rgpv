<!doctype html>
<html lang="en">

<head>
    <title>Student Resources</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/multiselect-dropdown.js') }}"></script>
    <style>
        .multiselect-dropdown {
            width: 100% !important;
        }
    </style>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <h1><a href="" class="logo"> Dashboard</a></h1>
            <ul class="list-unstyled components mb-5">

                @if (auth()->user()->role == 1)
                    <li>
                        <a href="{{ route('superAdminUsers') }}"><span class="fa fa-users mr-3"></span> Users</a>
                    </li>
                    <li>
                        <a href="{{ route('manageRole') }}"><span class="fa fa-role mr-3"></span> Manage Role</a>
                    </li>
                    <li>
                        <a href="{{ route('spcontent') }}"><span class="fa fa-role mr-3"></span>Manage Subjects</a>
                    </li>
                    <li>
                        <a href="{{ route('spnotes') }}"><span class="fa fa-role mr-3"></span>Manage Notes</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-role mr-3"></span>Announcement</a>
                    </li>
                @endif

                @if (auth()->user()->role == 2)
                    <li>
                        <a href="{{ route('manage') }}"><span class="fa fa-role mr-3"></span>Manage Role</a>
                    </li>
                    <li>
                        <a href="{{ route('sbcontent') }}"><span class="fa fa-role mr-3"></span>Manage Subjects</a>
                    </li>
                    <li>
                        <a href="{{ route('sbnotes') }}"><span class="fa fa-role mr-3"></span>Manage Notes</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-role mr-3"></span>Announcement</a>
                    </li>
                @endif

                @if (auth()->user()->role == 3)
                    <li>
                        <a href="{{ route('content') }}"><span class="fa fa-role mr-3"></span>Manage Subjects</a>
                    </li>
                    <li>
                        <a href="{{ route('notes') }}"><span class="fa fa-role mr-3"></span>Manage Notes</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-role mr-3"></span>Announcement</a>
                    </li>
                @endif

                @yield('li')
                <li>
                    <a href="/logout"><span class="fa fa-sign-out mr-3"></span> Logout</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            @yield('space-work')
        </div>
    </div>

    <!-- <script src="{{ asset('js/jquery.min.js') }}"></script> -->
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
