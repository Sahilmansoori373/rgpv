@extends('layout/layout')

@section('space-work')
<h1>
  {!! Session::has('msg') ? Session::get("msg") : '' !!}
</h1>

    <h2 class="mb-4">Super Admin</h2>

    <div class="card">
        <div class="card-header">Subject Page</div>
        <div class="card-body">
            
            <form action="{{ route('update.subject',$subjects->id)}}" method="post">
                @csrf
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" value="{{$subjects->name}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Subject Code</label>
                    <input type="text" name="code" value="{{$subjects->code}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Semester</label>
                    <input type="text" name="semester" value="{{$subjects->semester}}" class="form-control">
                </div>
                <input type="submit" id="submit">
          </form>
         
        </div>
      </div>
       
      
 @endsection