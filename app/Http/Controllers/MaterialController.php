<?php

namespace App\Http\Controllers;
use App\Material;
use Illuminate\Http\Request;
use App\News;
use App\Nursery;
use App\nursery_material;
use App\Research;
use App\College;

class MaterialController extends Controller
{
  public function getMaterial($sub_id){

    $notes = Material::where('subject_id', $sub_id)->where('category','notes')->get();
    $exams = Material::where('subject_id', $sub_id)->where('category','exams')->get();

$response =[
  'notes' =>$notes,
  'exams' =>$exams,
  'code'=> 200
];
return response()->json($response,200);
}

public function getReview($sub_id){

  $review = Material::where('subject_id', $sub_id)->where('category','review')->get();

$response =[
'reviews' =>$review,
'code'=> 200
];
return response()->json($response,200);
}

public function getNecta($sub_id){

  $notes = Material::where('subject_id', $sub_id)->where('category','notes')->get();
  $exams = Material::where('subject_id', $sub_id)->where('category','exams')->get();
  $necta = Material::where('subject_id', $sub_id)->where('category','necta')->get();

$response =[
'notes' =>$notes,
'exams' =>$exams,
'necta' => $necta,
'code'=> 200
];
return response()->json($response,200);
}

public function getNews(){
  $news = News::all();
  $response = [
    'news'=> $news,
    'code'=> 200
  ];
  return response()->json($response,200);
}

public function nursery(){

    $nursery_videos = Nursery::all();
    $response = [
      'nursery_videos'=> $nursery_videos,
      'code'=> 200
  ];
  return response()->json($response,200);
}

public function nurseryMaterial(){

      $number = nursery_material::where('category','number')->get();
      $alpha = nursery_material::where('category','alpha')->get();
      $response =[
    'numbers' =>$number,
    'alphabet' =>$alpha,
    'code'=> 200
  ];
  return response()->json($response,200);
}
public function research(){

      $research = Research::where('category','research')->get();
      $report = Research::where('category','report')->get();
      $project = Research::where('category','project')->get();

      $response =[
    'research' =>$research,
    'report' =>$report,
    'project' =>$project,
    'code'=> 200
  ];
  return response()->json($response,200);
}
public function collegeMaterial($college_name){

      $college_material = College::where('college_name',$college_name)->get();

      $response =[
    'college_material' =>$college_material,
    'code'=> 200
  ];
  return response()->json($response,200);
}
}
