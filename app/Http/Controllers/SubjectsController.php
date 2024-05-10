<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Redirect;
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
    public function get(string $id){
        $subject = Subjects::where('semester','=',$id);
        // dd($subject) ;
        // return view ('semester')->with('subject', $subject);
    }
    public function adminindex()
    {

        // $subject = DB::table('subjects')
        //         ->where('semester',$id)
        //         ->get();
        //         return view('subject', ['subject' =>$subject]);
        // echo $id;
        $subjects = Subjects::all();
        return view ('subject.index')->with('subject', $subjects);
    }
    public function create(): View
    {
        return view('subject.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Subjects::create($input);
        session()->flash('msg', 'Successfully done the operation.');
        return redirect()->back(); 
        // return Redirect::back()->withErrors(['msg' => 'The Message']);
        // return redirect('super-admin/dashboard')->with('flash_message', 'Student Addedd!');
    }
    public function show(string $id): View
    {
        $subjects = Subjects::find($id);
        return view('subject.show')->with('subjects', $subjects);
    }
    public function edit(string $id): View
    {
        $subjects = Subjects::find($id);
        return view('subject.edit')->with('subjects', $subjects);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Subjects::find($id);
        $input = $request->all();
        $student->update($input);
        session()->flash('msg', 'Successfully done the operation.');
        return redirect()->back();
        // return redirect('super-admin/dashboard')->with('flash_message', 'subject Updated!');  
    }
    public function destroy(string $id): RedirectResponse
    {
        Subjects::destroy($id);
        session()->flash('msg', 'Successfully Deleted the Subject.');
        return redirect()->back();
        // return redirect('super-admin/dashboard')->with('flash_message', 'subject deleted!'); 
    }
    
    










    // sub-admin
    public function sbadminindex()
    {

        // $subject = DB::table('subjects')
        //         ->where('semester',$id)
        //         ->get();
        //         return view('subject', ['subject' =>$subject]);
        // echo $id;
        $subjects = Subjects::all();
        return view ('sub-admin.sub.index')->with('subject', $subjects);
    }
    public function sbcreate(): View
    {
        return view('sub-admin.sub.create');
    }

    public function sbstore(Request $request): RedirectResponse
    {
        $input = $request->all();
        Subjects::create($input);
        session()->flash('msg', 'Successfully done the operation.');
        return redirect()->back(); 
        // return Redirect::back()->withErrors(['msg' => 'The Message']);
        // return redirect('super-admin/dashboard')->with('flash_message', 'Student Addedd!');
    }
    public function sbshow(string $id): View
    {
        $subjects = Subjects::find($id);
        return view('sub-admin.sub.show')->with('subjects', $subjects);
    }
    public function sbedit(string $id): View
    {
        $subjects = Subjects::find($id);
        return view('sub-admin.sub.edit')->with('subjects', $subjects);
    }
    public function sbupdate(Request $request, string $id): RedirectResponse
    {
        $student = Subjects::find($id);
        $input = $request->all();
        $student->update($input);
        session()->flash('msg', 'Successfully done the operation.');
        return redirect()->back();
        // return redirect('super-admin/dashboard')->with('flash_message', 'subject Updated!');  
    }
    public function sbdestroy(string $id): RedirectResponse
    {
        Subjects::destroy($id);
        session()->flash('msg', 'Successfully Deleted the Subject.');
        return redirect()->back();
        // return redirect('super-admin/dashboard')->with('flash_message', 'subject deleted!'); 
    }











    // super-admin
    public function spadminindex()
    {

        // $subject = DB::table('subjects')
        //         ->where('semester',$id)
        //         ->get();
        //         return view('subject', ['subject' =>$subject]);
        // echo $id;
        $subjects = Subjects::all();
        return view ('super-admin.subj.index')->with('subject', $subjects);
    }
    public function spcreate(): View
    {
        return view('super-admin.subj.create');
    }

    public function spstore(Request $request): RedirectResponse
    {
        $input = $request->all();
        Subjects::create($input);
        session()->flash('msg', 'Successfully done the operation.');
        return redirect()->back(); 
        // return Redirect::back()->withErrors(['msg' => 'The Message']);
        // return redirect('super-admin/dashboard')->with('flash_message', 'Student Addedd!');
    }
    public function spshow(string $id): View
    {
        $subjects = Subjects::find($id);
        return view('super-admin.subj.show')->with('subjects', $subjects);
    }
    public function spedit(string $id): View
    {
        $subjects = Subjects::find($id);
        return view('super-admin.subj.edit')->with('subjects', $subjects);
    }
    public function spupdate(Request $request, string $id): RedirectResponse
    {
        $student = Subjects::find($id);
        $input = $request->all();
        $student->update($input);
        session()->flash('msg', 'Successfully done the operation.');
        return redirect()->back();
        // return redirect('super-admin/dashboard')->with('flash_message', 'subject Updated!');  
    }
    public function spdestroy(string $id): RedirectResponse
    {
        Subjects::destroy($id);
        session()->flash('msg', 'Successfully Deleted the Subject.');
        return redirect()->back();
        // return redirect('super-admin/dashboard')->with('flash_message', 'subject deleted!'); 
    }
}
