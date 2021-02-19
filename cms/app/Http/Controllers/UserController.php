<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
   // public function __construct()
   // {
         //$this->middleware('auth');
        // $this->middleware(function($request, $next){
           /// if(Gate::allows('manage-articles')) return $next($request);
          //  abort(403, 'Anda tidak memiliki cukup hak akses');
           // });
   // } 
    
    public function index($id){
        $user = User::find($id);
        return view('user', ['id'=>$id])->with(compact('user'));
    
    }
    public function manageuser(){
        $user = User::all();
        return view('manageuser',['user' => $user]);
    }
    public function add()
 {
 return view('adduser');
 }
 public function create(Request $request)
 {
    if($request->file('image')){       
        $image_name = $request->file('image')->store('images','public');   
     } 

 User::create([
 'name' => $request->name,
 'email' => $request->email,
 'password' => $request->password,
 'roles' => $request->roles,
 ]);
 return redirect('/manageuser');
 }
 public function edit($id)
 {
 $user = User::find($id);
 return view('edituser',['user'=>$user]);
 }
 public function update($id, Request $request)
 {
 $user = User::find($id);
 $user->name = $request->name;
 $user->email = $request->email;
 $user->password = $request->password;
 $user->roles = $request->roles;
 //$article->imageurl = $request->image;
 if($user->imageurl && file_exists(storage_path('app/public/' . $user->imageurl)))    
 {       
      \Storage::delete('public/'.$user->imageurl);    
    }   
     $image_name = $request->file('image')->store('images', 'public');    
     $user->imageurl = $image_name;  
   $user->save();    
   return redirect('/manageuser');
 }
 public function delete($id)
 {
 $user = User::find($id);
 $user->delete();
 return redirect('/manageuser');
 }
 
 

}
