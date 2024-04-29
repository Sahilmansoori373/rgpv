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
}
