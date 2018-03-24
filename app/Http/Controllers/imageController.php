<?php

namespace App\Http\Controllers;
use App\Material;
use Illuminate\Http\Request;
use Session;
use Response;
use App\Primary_subjects;
use App\News;
use App\nursery_material;
use App\Nursery;
use App\Research;
use App\College;


class imageController extends Controller
{
public function pdf(){
  $subjects = Primary_subjects::all();
  return view('postMaterial')->with(compact('subjects'));
}

   public function sendpdf(Request $request){

           $this->validate($request, array(
               'file'      => 'required'
           ));

           if($request->hasFile('file')){
              $name = $request->file->getClientOriginalName();
              $request->file->storeAs('public/upload/'.$request->class_id,$name);
              $material = new Material;
              $material->name = $name;
              $material->class_id = $request->class_id;
              $material->subject_id = $request->subject_id;
              $material->category = $request->category;
               $material->save();
               Session::flash('success','Material successfully uploaded');
             return back();
           }
           else {
             Session::flash('error','Fail to upload, fill the details correctly');
           return back();           }
       }
public function sendNews(Request $request){
  $news = new News;
  $news->name = $request->name;
  $news->url  = $request->url;
  $news->save();
  Session::flash('success','News successfully uploaded');
return back();
}

public function nurseryVid(Request $request){
  $news = new Nursery;
  $news->name = $request->name;
  $news->url  = $request->url;
  $news->save();
  Session::flash('success','Video Link successfully uploaded');
return back();
}

    public function pdfview(){
   $filename = 'app/public/upload/ERASTO CV.pdf';
    $path = storage_path($filename);

    return Response::make(file_get_contents($path), 200, [
    'Content-Type' => 'application/pdf',
    'Content-Disposition' => 'inline; filename="'.$filename.'"'
]);
       }

       public function nurseryMat(Request $request){

               $this->validate($request, array(
                   'file'      => 'required'
               ));

               if($request->hasFile('file')){
                  $name = $request->file->getClientOriginalName();
                  $request->file->storeAs('public/upload/nursery',$name);
                  $material = new nursery_material;
                  $material->name = $name;
                  $material->category = $request->category;
                   $material->save();
                   Session::flash('success','Material successfully uploaded');
                 return back();
               }
               else {
                 Session::flash('error','Fail to upload, fill the details correctly');
               return back();           }
           }
           public function research(Request $request){

                   $this->validate($request, array(
                       'file'      => 'required'
                   ));

                   if($request->hasFile('file')){
                      $name = $request->file->getClientOriginalName();
                      $request->file->storeAs('public/upload/Research',$name);
                      $material = new Research;
                      $material->name = $name;
                      $material->category = $request->category;
                       $material->save();
                       Session::flash('success','Material successfully uploaded');
                     return back();
                   }
                   else {
                     Session::flash('error','Fail to upload, fill the details correctly');
                   return back();
                         }
               }

               public function college(Request $request){

                       $this->validate($request, array(
                           'file'      => 'required'
                       ));

                       if($request->hasFile('file')){
                          $name = $request->file->getClientOriginalName();
                          $request->file->storeAs('public/upload/College',$name);
                          $material = new College;
                          $material->name = $name;
                          $material->college_name = $request->college_name;
                           $material->save();
                           Session::flash('success',$request->college_name.' Material successfully uploaded');
                         return back();
                       }
                       else {
                         Session::flash('error','Fail to upload, fill the details correctly');
                       return back();
                             }
                   }
}
