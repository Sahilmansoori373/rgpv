<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Subjects;
use Illuminate\View\View;
// use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function index()
    {

        // $subject = DB::table('subjects')
        //         ->where('semester',$id)
        //         ->get();
        //         return view('subject', ['subject' =>$subject]);
        // echo $id;
        $subjects = Subjects::all();
        return view ('subject')->with('subject', $subjects);
    }
    public function adminindex()
    {

        // $subject = DB::table('subjects')
        //         ->where('semester',$id)
        //         ->get();
        //         return view('subject', ['subject' =>$subject]);
        // echo $id;
        $subjects = Subjects::all();
        return view ('super-admin.subject.index')->with('subject', $subjects);
    }
    public function create(): View
    {
        return view('super-admin.subject.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Subjects::create($input);
        return redirect('super-admin/dashboard')->with('flash_message', 'Student Addedd!');
    }
    public function show(string $id): View
    {
        $subjects = Subjects::find($id);
        return view('super-admin.subject.show')->with('subjects', $subjects);
    }
    public function edit(string $id): View
    {
        $subjects = Subjects::find($id);
        return view('super-admin.subject.edit')->with('subjects', $subjects);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Subjects::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('super-admin/dashboard')->with('flash_message', 'subject Updated!');  
    }
    public function destroy(string $id): RedirectResponse
    {
        Subjects::destroy($id);
        return redirect('super-admin/dashboard')->with('flash_message', 'subject deleted!'); 
    }
}
