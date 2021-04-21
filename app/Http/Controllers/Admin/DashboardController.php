<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Xodimlar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    // Bazadan Xodimlarni brouserga chiqarish
    public function xodimlar(){
        $xodimlar=Xodimlar::all();
        return view('admin.xodimlar')
        ->with('xodimlar',$xodimlar);
    }
    //Bazaga Xodimlarni kiritish
    public function personSave(Request $request){
        $xodimlar=new Xodimlar;

        $xodimlar->Familyasi=$request->input('Familyasi');
        $xodimlar->Ismi=$request->input('Ismi');
        $xodimlar->Otasining_ismi=$request->input('Otasining_ismi');
        $xodimlar->Lavozimi=$request->input('Lavozimi');
        $xodimlar->Yoshi=$request->input('Yoshi');
        $xodimlar->Maoshi=$request->input('Maoshi');

        $xodimlar->save();
        return redirect('dashboard')->with('status','Biz haqimizda malumotlari qo`shildi');
    }
    //Xodimlar malumotlarini ozgartirish
    public function editPerson($id){
        $xodimlar=Xodimlar::findOrFail($id);
        return view('admin.xodimlar.xodimlar-edit')->with('xodimlar',$xodimlar);
    }
    public function updatePerson(Request $request,$id){
        $xodimlar=Xodimlar::findOrFail($id);
       
        $xodimlar->Familyasi=$request->input('Familyasi');
        $xodimlar->Ismi=$request->input('Ismi');
        $xodimlar->Otasining_ismi=$request->input('Otasining_ismi');
        $xodimlar->Lavozimi=$request->input('Lavozimi');
        $xodimlar->Yoshi=$request->input('Yoshi');
        $xodimlar->Maoshi=$request->input('Maoshi');
        $xodimlar->update();
        
        return redirect('dashboard')->with('status','Malumot o`zgartirildi');
    }
    //Xodimlarni bazadan o'chirish
    public function deletePerson(Request $request,$id){
           $xodimlar=Xodimlar::findOrFail($id);
           $xodimlar->delete();
        
        return redirect('dashboard')->with('status','Malumot o`chirildi');
    }


    public function registered(){
    	$users=User::paginate(10);
    	// $users=User::all();
    	return view('admin.register')->with('users',$users);
    }
    public function registeredit(Request $request,$id){
    	$users=User::findOrfail($id);
    	return view('admin.register-edit')->with('users',$users);
    } 
    public function registerupdate(Request $request,$id){
    	$users=User::find($id);
    	$users->name=$request->input('username');
    	$users->usertype=$request->input('usertype');
    	$users->update();
    	return redirect('/role-register')->with('status','Siz tanlagan malumot o`zgartirildi!');
    } 
    public function registerdelete($id){
    	$users=User::findOrfail($id);
    	$users->delete();
    	return redirect('/role-register')->with('status','Siz tanlagan malumot o`chirildi!');
    }

     public function userinput(Request $request){
        $userin=new User;
        $userin->id=$request->input('id');
        $userin->name=$request->input('name');
        $userin->phone=$request->input('phone');
        $userin->email=$request->input('email');
        $userin->usertype=$request->input('usertype');
        

        $userin->save();
        return redirect('role-input')->with('status','Biz haqimizda malumotlari qo`shildi');
    }
   
    
}
