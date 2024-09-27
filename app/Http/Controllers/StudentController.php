<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function viewprofile(){
        $user=Auth::user();
        
        $borrowedbooks=$user->borrowedbooks()->where('returned',false)->get(); 
        return view('student.profile', compact('user','borrowedbooks'));
    }
    
    public function uploadphoto(Request $request){
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $path = $request->file('photo')->store('photos', 'public'); // Save in storage/app/public/photos
    
        
         User::find(auth()->id())->update(['picture' => $path]);
    
         return back()->with('success', 'Photo uploaded successfully!');
    }
    public function index(){
        $Users=User::all();

        return view('admin.borrowedbooks',["Users"=>$Users]);
    }
}
