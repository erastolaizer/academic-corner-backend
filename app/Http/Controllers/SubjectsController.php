<?php

namespace App\Http\Controllers;
use App\Primary_subjects;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function primary(){
     $clas1 = Primary_subjects::where('class_id', 'C1')->get();
     $clas2 = Primary_subjects::where('class_id', 'C2')->get();
     $clas3 = Primary_subjects::where('class_id', 'C3')->get();
     $clas4 = Primary_subjects::where('class_id', 'C4')->get();
     $clas5 = Primary_subjects::where('class_id', 'C5')->get();
     $clas6 = Primary_subjects::where('class_id', 'C6')->get();
     $clas7 = Primary_subjects::where('class_id', 'C7')->get();

     $form1 = Primary_subjects::where('class_id', 'F1')->get();
     $form2 = Primary_subjects::where('class_id', 'F2')->get();
     $form3 = Primary_subjects::where('class_id', 'F3')->get();
     $form4 = Primary_subjects::where('class_id', 'F4')->get();
     $form5 = Primary_subjects::where('class_id', 'F5')->get();
     $form6 = Primary_subjects::where('class_id', 'F6')->get();

     $response =[
    'class1' => $clas1,
    'class2' => $clas2,
    'class3' => $clas3,
    'class4' => $clas4,
    'class5' => $clas5,
    'class6' => $clas6,
    'class7' => $clas7,
    'form1' => $form1,
    'form2' => $form2,
    'form3' => $form3,
    'form4' => $form4,
    'form5' => $form5,
    'form6' => $form6,

    'code'=>  200
      ];
return response()->json($response,200);
}

public function subjects($class_id){
  $subjects = primary_subjects::where('class_id', $class_id)->get();
  $response =[
    'subjects'=> $subjects,
    'code' => 200
  ];
  return response()->json($response,200);
}
public function getSub(){
  $subjects = Primary_subjects::all();
  return view('welcome')->with(compact('subjects'));

}
    }
