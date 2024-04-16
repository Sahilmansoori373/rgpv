@extends('layout/layout')

@section('li')

<li>
    <a href="{{ route('manage') }}"><span class="fa fa-role mr-3"></span>Manage Role</a>
</li>

<li>
    <a href="{{ route('manageRole') }}"><span class="fa fa-role mr-3"></span>Subjects</a>
</li>

@endsection
@section('space-work')

    <h2 class="mb-4">Sub Admin</h2>

@endsection
