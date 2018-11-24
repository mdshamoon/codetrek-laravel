<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;


class QuestionController extends Controller
{
   
  
    public function index()
    {

    	$questions=Question::all();

    	
    	return view('questions.index')->with('questions',$questions);
    }

    public function create()

    {

 return view('questions.create'); }

   


     public function store(Request $request)
    {
        

        $question = new Question;

        $question->Title = $request->title;
        $question->Description= $request->description;
        $question->Tags= $request->tag;

        $question->save();

        return redirect('/');
    }
}
