<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchief;
class AdminController extends Controller
{
  public function user(){

    $data=user::all();
    return View("admin.users",compact("data"));
  }

  public function deleteuser($id){

    $data=user::find($id);
    $data->delete();
    return redirect()->back();
  }
  public function foodmenu(){
$data=food::all();
    return View("admin.foodmenu",compact("data"));
  }
  public function uploadfood(Request $request){
$data=new food;
$image=$request->image;
$imagename=time().'.'.$image->getClientOriginalExtension();
$request->image->move('foodimage',$imagename);
   $data->image=$imagename;
   $data->title=$request->title;
   $data->price=$request->price;
   $data->description=$request->description;
   $data->save();
   return redirect()->back();
}
public function deletefood($id){
    $data=food::find($id);
    $data->delete();
    return redirect()->back();
}
public function updatefood($id){
    $data=food::find($id);
    return View("admin.updatefood",compact("data"));
}
public function updatefoodmenu(Request $request,$id){
    $data=food::find($id);
    $image=$request->image;
$imagename=time().'.'.$image->getClientOriginalExtension();
$request->image->move('foodimage',$imagename);
   $data->image=$imagename;
   $data->title=$request->title;
   $data->price=$request->price;
   $data->description=$request->description;
   $data->save();
   return redirect()->back();
}

public function reservation(Request $request){
  
    $data=new reservation;

   $data->name=$request->name;
   $data->email=$request->email;
   $data->phone=$request->phone;
   $data->guest=$request->guest;
   $data->date=$request->date;
   $data->time=$request->time;
   $data->message=$request->message;
   $data->save();
   return redirect()->back();

}
public function viewreservation(){
    $data=reservation::all();
    return View("admin.adminreservation",compact("data"));
}

public function viewchief(){

    $data=foodchief::all();
    return View("admin.adminchief",compact("data"));
}
public function uploadchief(Request $request){
    $data=new foodchief;
    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalExtension();
$request->image->move('chiefimage',$imagename);
   $data->image=$imagename;
   $data->name=$request->name;
   $data->speciality=$request->speciality;
$data->save();
return redirect()->back();

}
public function updatechief($id){
    $data=foodchief::find($id);
    return View("admin.updatechief",compact("data"));
}
public function updatefoodchief(Request $request ,$id){
    $data=foodchief::find($id);
    $image=$request->image;

    if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chiefimage',$imagename);
           $data->image=$imagename;
    }


   $data->name=$request->name;
   $data->speciality=$request->speciality;
   $data->save();

return redirect("viewchief");
   
}
public function deletechief($id){
    $data=foodchief::find($id);
    $data->delete();
    return redirect()->back();
}
}
