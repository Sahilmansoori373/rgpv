<?php

namespace App\Http\Controllers;
// use File;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Notes;
use App\Models\Subjects;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\fileExists;

class NotesController extends Controller
{
    public function view(string $id)
    {
        $notes = Notes::find($id);
            // dd($notes);
        return view('notes')->with('data', $notes);
    }


    public function adminindex()
    {

        $data = DB::table('notes')
        ->select('*')
        ->join('subjects','subjects.id','=','notes.id')
        ->get();

        // return $data;

        // $subject = DB::table('subjects')
        //         ->where('semester',$id)
        //         ->get();
        //         return view('subject', ['subject' =>$subject]);
        // echo $id;
        // $notes = Notes::with('Subjects')->get();
        // return $notes;
        // $subject= Subjects::all();
        // $data = $notes->concat($subject);
        return view('notes.index')->with('data', $data);
        // dd($notes);
        // echo $notes->notes;
    }

    public function create(): View
    {
        $subjects = Subjects::all();
        return view('notes.create')->with('data', $subjects);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = new Notes();
        $data->id = $request->id;
        $pyq1 = $request->pyq1;
        $pyq1name = time() . '1.' . $pyq1->getClientOriginalExtension();
        $request->pyq1->move('assets/folder', $pyq1name);
        $data->pyq1 = $pyq1name;

        $pyq2 = $request->pyq2;
        $pyq2name = time() . '2.' . $pyq2->getClientOriginalExtension();
        $request->pyq2->move('assets/folder', $pyq2name);
        $data->pyq2 = $pyq2name;

        $pyq3 = $request->pyq3;
        $pyq3name = time() . '3.' . $pyq3->getClientOriginalExtension();
        $request->pyq3->move('assets/folder', $pyq3name);
        $data->pyq3 = $pyq3name;

        $notes = $request->notes;
        $notesname = time() . 'n.' . $notes->getClientOriginalExtension();
        $request->notes->move('assets/folder', $notesname);
        $data->notes = $notesname;

        $data->syllabus = $request->syllabus;

        $data->save();
        session()->flash('msg', 'Successfully done the operation.');
        return redirect()->back();
        // return redirect('super-admin/dashboard')->with('flash_message', 'notes Addedd!');
    }
    public function show(string $id): View
    {
        // $notes = DB::table('notes')
        // ->select('*')
        // ->where('notes.id',$id)
        // ->join('subjects','subjects.id','=','notes.id')
        // ->get();


        $notes = Notes::find($id);
        return view('notes.show')->with('notes', $notes);
    }
    public function edit(string $id): View
    {
        $notes = Notes::find($id);
        return view('notes.edit')->with('notes', $notes);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Notes::find($id);
        $input = $request->all();
        $student->update($input);
        session()->flash('msg', 'Successfully done the operation.');
        return redirect()->back();
    }
    public function destroy(string $id)
    {
        $data = Notes::find($id);
        $file_path1 = public_path("assets/folder/") . $data->pyq1;
        @unlink($file_path1);
        $file_path2 = public_path("assets/folder/") . $data->pyq2;
        @unlink($file_path2);
        $file_path3 = public_path("assets/folder/") . $data->pyq3;
        @unlink($file_path3);
        $file_path4 = public_path("assets/folder/") . $data->notes;
        @unlink($file_path4);
        Notes::destroy($id);
        session()->flash('msg', 'Successfully done the operation.');
        return redirect()->back();
        // return redirect('super-admin/dashboard')->with('flash_message', 'Notes deleted!');
    }


    // sub-admin
    public function sbadminindex()
    {

        // $subject = DB::table('subjects')
        //         ->where('semester',$id)
        //         ->get();
        //         return view('subject', ['subject' =>$subject]);
        // echo $id;
        $notes = notes::with('Subjects')->get();
        // return $notes;
        // $subject= Subjects::all();
        // $data = $notes->concat($subject);
        return view('sub-admin.not.index')->with('data', $notes);
        // dd($notes);
        // echo $notes->notes;
    }

    public function sbcreate(): View
    {
        $subjects = Subjects::all();
        return view('sub-admin.not.create')->with('data', $subjects);
    }

    public function sbstore(Request $request): RedirectResponse
    {
        $data = new Notes();
        $data->id = $request->id;
        $pyq1 = $request->pyq1;
        $pyq1name = time() . '1.' . $pyq1->getClientOriginalExtension();
        $request->pyq1->move('assets/folder', $pyq1name);
        $data->pyq1 = $pyq1name;

        $pyq2 = $request->pyq2;
        $pyq2name = time() . '2.' . $pyq2->getClientOriginalExtension();
        $request->pyq2->move('assets/folder', $pyq2name);
        $data->pyq2 = $pyq2name;

        $pyq3 = $request->pyq3;
        $pyq3name = time() . '3.' . $pyq3->getClientOriginalExtension();
        $request->pyq3->move('assets/folder', $pyq3name);
        $data->pyq3 = $pyq3name;

        $notes = $request->notes;
        $notesname = time() . 'n.' . $notes->getClientOriginalExtension();
        $request->notes->move('assets/folder', $notesname);
        $data->notes = $notesname;

        $syllabus = $request->syllabus;
        $syllabusname = time() . 'n.' . $syllabus->getClientOriginalExtension();
        $request->notes->move('assets/folder', $syllabusname);
        $data->syllabus = $syllabusname;

        // $data->syllabus=$request->syllabus;

        $data->save();
        session()->flash('msg', 'Successfully done the operation.');
        return redirect()->back();
        // return redirect('super-admin/dashboard')->with('flash_message', 'notes Addedd!');
    }
    public function sbshow(string $id): View
    {
        $notes = Notes::find($id);
        return view('sub-admin.not.show')->with('notes', $notes);
    }
    public function sbedit(string $id): View
    {
        $notes = Notes::find($id);
        return view('sub-admin.not.edit')->with('notes', $notes);
    }
    // : RedirectResponse
    public function sbupdate(Request $request, string $id)
    {
        $student = Notes::find($id);
        $input = $request->all();

        // pyq1
        $pyq1 = $request->pyq1;
        if ($pyq1 != '') {
            $request->validate([
                'pyq1'         =>  'required'
            ]);
            $pyq1name = time() . '1.' . $pyq1->getClientOriginalExtension();
            $request->pyq1->move('assets/folder', $pyq1name);
        } else {
            $pyq1name=$student->pyq1;
            // $request->validate([
                //     'pyq1'    =>  'required',
                // ]);
            }
        //     $form_data = array(
        //         'pyq1'            =>   $pyq1name,
        // );
        // Notes::whereId($id)->update($form_data);



        $pyq2 = $request->pyq2;
        if ($pyq2 != '') {
            $request->validate([
                'pyq2'         =>  'required'
            ]);
            $pyq2name = time() . '2.' . $pyq2->getClientOriginalExtension();
            $request->pyq2->move('assets/folder', $pyq2name);
            // $request->pyq2->move('assets/folder', $pyq2name);
        } else {
            $pyq2name=$student->pyq2;
            // $request->validate([
                //         'pyq2'    =>  'required',
                //     ]);
            }
            // $form_data = array(
            //     'pyq2'            =>   $pyq2name,
            // );
            // Notes::whereId($id)->update($form_data);


            // pyq3
            $pyq3 = $request->pyq3;
            // $pyq3 = $request->pyq3;
            if ($pyq3 != '') {
                $request->validate([
                    'pyq3'         =>  'required'
                ]);
                $pyq3name = time() . '3.' . $pyq3->getClientOriginalExtension();
                $request->pyq3->move('assets/folder', $pyq3name);
            } else {
                $pyq3name=$student->pyq3;
                // $request->validate([
                    //     'pyq3'    =>  'required',
                    // ]);
                }
                // $form_data = array(
                //     'pyq3'            =>   $pyq3name,
                // );

                // Notes::whereId($id)->update($form_data);


                // Notes
                $notes = $request->notes;
                if ($notes != '') {
                    $request->validate([
                        'notes'         =>  'required'
                    ]);
                    $notesname = time() . 'n.' . $notes->getClientOriginalExtension();
            $notes->move('assets/folder', $notesname);
        } else {
            $notesname=$student->notes;
            // $request->validate([
                //     'notes'    =>  'required',
                // ]);
            }
            // $form_data = array(
                //     'notes'            =>   $notesname,
                // );
                // Notes::whereId($id)->update($form_data);


                // syllabus
                $syllabus = $request->syllabus;
                if ($syllabus != '') {
                    $request->validate([
                        'syllabus'         =>  'required'
                    ]);
                    $syllabusname = time() . 's.' . $syllabus->getClientOriginalExtension();
                $syllabus->move('assets/folder', $syllabusname);
            } else {
                $syllabusname=$student->syllabus;
                // $request->validate([
                    //     'syllabus'    =>  'required',
                    // ]);
                }
                $form_data = array(
                    'pyq1'            =>   $pyq1name,
                    'pyq2'            =>   $pyq2name,
                    'pyq3'            =>   $pyq3name,
                    'notes'            =>   $notesname,
                    'syllabus'            =>   $syllabusname,
                );
                Notes::whereId($id)->update($form_data);


                // $student->update($input);
                session()->flash('msg', 'Successfully done the operation.');
                return redirect()->back();
            }
    public function sbdestroy(string $id)
    {
        $data = Notes::find($id);
        $file_path1 = public_path("assets/folder/") . $data->pyq1;
        @unlink($file_path1);
        $file_path2 = public_path("assets/folder/") . $data->pyq2;
        @unlink($file_path2);
        $file_path3 = public_path("assets/folder/") . $data->pyq3;
        @unlink($file_path3);
        $file_path4 = public_path("assets/folder/") . $data->notes;
        @unlink($file_path4);
        Notes::destroy($id);
        session()->flash('msg', 'Successfully done the operation.');
        return redirect()->back();
        // return redirect('super-admin/dashboard')->with('flash_message', 'Notes deleted!');
    }
































    // super-admin
    public function spadminindex()
    {

        // $subject = DB::table('subjects')
        //         ->where('semester',$id)
        //         ->get();
        //         return view('subject', ['subject' =>$subject]);
        // echo $id;
        $notes = notes::with('Subjects')->get();
        // return $notes;
        // $subject= Subjects::all();
        // $data = $notes->concat($subject);
        return view('super-admin.note.index')->with('data', $notes);
        // dd($notes);
        // echo $notes->notes;
    }

    public function spcreate(): View
    {
        $subjects = Subjects::all();
        return view('super-admin.note.create')->with('data', $subjects);
    }

    public function spstore(Request $request): RedirectResponse
    {
        $data = new Notes();
        $data->id = $request->id;
        $pyq1 = $request->pyq1;
        $pyq1name = time() . '1.' . $pyq1->getClientOriginalExtension();
        $request->pyq1->move('assets/folder', $pyq1name);
        $data->pyq1 = $pyq1name;

        $pyq2 = $request->pyq2;
        $pyq2name = time() . '2.' . $pyq2->getClientOriginalExtension();
        $request->pyq2->move('assets/folder', $pyq2name);
        $data->pyq2 = $pyq2name;

        $pyq3 = $request->pyq3;
        $pyq3name = time() . '3.' . $pyq3->getClientOriginalExtension();
        $request->pyq3->move('assets/folder', $pyq3name);
        $data->pyq3 = $pyq3name;

        $notes = $request->notes;
        $notesname = time() . 'n.' . $notes->getClientOriginalExtension();
        $request->notes->move('assets/folder', $notesname);
        $data->notes = $notesname;

        $data->syllabus = $request->syllabus;

        $data->save();
        session()->flash('msg', 'Successfully done the operation.');
        return redirect()->back();
        // return redirect('super-admin/dashboard')->with('flash_message', 'notes Addedd!');
    }
    public function spshow(string $id): View
    {
        $notes = Notes::find($id);
        return view('super-admin.note.show')->with('notes', $notes);
    }
    public function spedit(string $id): View
    {
        $notes = Notes::find($id);
        return view('super-admin.note.edit')->with('notes', $notes);
    }
    public function spupdate(Request $request, string $id): RedirectResponse
    {
        $student = Notes::find($id);
        $input = $request->all();
        $student->update($input);
        session()->flash('msg', 'Successfully done the operation.');
        return redirect()->back();
    }
    public function spdestroy(string $id)
    {
        $data = Notes::find($id);
        $file_path1 = public_path("assets/folder/") . $data->pyq1;
        @unlink($file_path1);
        $file_path2 = public_path("assets/folder/") . $data->pyq2;
        @unlink($file_path2);
        $file_path3 = public_path("assets/folder/") . $data->pyq3;
        @unlink($file_path3);
        $file_path4 = public_path("assets/folder/") . $data->notes;
        @unlink($file_path4);
        Notes::destroy($id);
        session()->flash('msg', 'Successfully done the operation.');
        return redirect()->back();
        // return redirect('super-admin/dashboard')->with('flash_message', 'Notes deleted!');
    }
}
