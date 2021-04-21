<?php

namespace App\Http\Controllers\Admin;

use App\Models\Abouts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AboutsController extends Controller
{
    public function index(){
        $abouts=Abouts::all();
    	return view('admin.abouts')
        ->with('abouts',$abouts);
    }
    public function store(Request $request){
    	$abouts=new Abouts;

    	$abouts->title=$request->input('title');
    	$abouts->subtitle=$request->input('subtitle');
    	$abouts->description=$request->input('description');

    	$abouts->save();
    	return redirect('abouts')->with('status','Biz haqimizda malumotlari qo`shildi');
    }
    public function edit($id){
        $abouts=Abouts::findOrFail($id);
        return view('admin.abouts.edit')->with('abouts',$abouts);
    }
    public function update(Request $request,$id){
        $abouts=Abouts::findOrFail($id);
        $abouts->title=$request->input('title');
        $abouts->subtitle=$request->input('subtitle');
        $abouts->description=$request->input('description');
        $abouts->update();
        
        return redirect('abouts')->with('status','Malumot o`zgartirildi');
    }
    public function delete(Request $request,$id){
           $abouts=Abouts::findOrFail($id);
           $abouts->delete();
        
        return redirect('abouts')->with('status','Malumot o`chirildi');
    }
//Aynan mana shu orqali id topiladi va UPDATE `Bank_xodimlari` SET `Fuqarolarni_qabul_qilish_vaqti`='9:00-11:00' WHERE `id_xodim`=100003funksiyasi yoziladi

     
   

}
