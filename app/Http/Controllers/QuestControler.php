<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answear;
use App\User;

class QuestControler extends Controller
{
  public function ask(Request $request){
  $this->validate($request,[
      'user_name'=> 'required',
      'question_tag'=>'required',
      'question'=> 'required'
    ]);

      $Question = new Question;
      $Question->user_name = $request->user_name;
      $Question->question_tag = $request->question_tag;
      $Question->question = $request->question;
      $Question->save();

      $response = [
      'question' =>$Question,
      'code'=>200
    ];
    return response()->json($response,200);
}
public function answear(Request $request){
$this->validate($request,[
    'user_name'=> 'required',
    'question_id'=>'required',
    'answear'=> 'required'
  ]);

    $Answear = new Answear;
    $Answear->user_name = $request->user_name;
    $Answear->question_id = $request->question_id;
    $Answear->answear = $request->answear;
    $Answear->save();
    $response = [
    'answear' =>$Answear,
    'code'=>200
  ];
  return response()->json($response,200);
}

  public function getQns(){
    $qns = Question::all();
    return response()->json([
      'questions'=>$qns,
    ],200);
  }

  public function getAnsw($id){
    $answ = Answear::where('question_id',$id)->get();
    $response = [
      'answears'=>$answ,
      'code'=> 200
    ];
    return response()->json($response,200);
  }
}
