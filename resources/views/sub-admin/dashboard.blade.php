@extends('layout/layout')

@section('li')

<li>
    <a href="{{ route('manage') }}"><span class="fa fa-role mr-3"></span>Manage Role</a>
</li>
<li>
    <a href="#"><span class="fa fa-role mr-3"></span>Manage Content</a>
</li>
<li>
    <a href="#"><span class="fa fa-role mr-3"></span>Announcement</a>
</li>

@endsection
@section('space-work')

    <h2 class="mb-4">Sub Admin</h2>

@endsection
