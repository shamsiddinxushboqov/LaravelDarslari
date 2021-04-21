<?php

namespace App\Http\Controllers\Admin;

use App\Models\Products;
use App\Models\Sales;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
      public function product(){
    	$products=Products::All();
    	return view('admin.products')->with('products',$products);;
    	// return view('admin.products');
    }

     public function productsSave(Request $request){
    	$products=new Products;

    	$products->id_mahsulot=$request->input('id_mahsulot');
    	$products->Nomi=$request->input('Nomi');
    	$products->Narxi=$request->input('Narxi');
    	$products->Soni=$request->input('Soni');

    	$products->save();
    	return redirect('products')->with('status','Malumot qo`shildi');
    }
    

     public function sales(){
        $sales=Sales::All();
        return view('admin.sales')->with('sales',$sales);;
        // return view('admin.products');
    }
    public function salesSave(Request $request){
        $sales=new Sales;

        $sales->id_mahsulot=$request->input('id_mahsulot');
        $sales->Nomi=$request->input('Nomi');
        $sales->Narxi=$request->input('Narxi');
        $sales->Soni=$request->input('Soni');

        $sales->save();
        return redirect('sales')->with('status','Malumot qo`shildi');
    }

    // Sales malumotlarini ozgartirish
    public function editSales($id){
        $sales=Sales::findOrFail($id);
        return view('admin.sales-edit')->with('sales',$sales);
    }
    public function updateSales(Request $request,$id){
        $sales=Sales::findOrFail($id);
        
        $sales->id_mahsulot=$request->input('id_mahsulot');
        $sales->Nomi=$request->input('Nomi');
        $sales->Narxi=$request->input('Narxi');
        $sales->Soni=$request->input('Soni');

        $sales->update();
        
        return redirect('sales')->with('status','Malumot o`zgartirildi');
    }

    //Xodimlarni bazadan o'chirish
    public function deleteSales(Request $request,$id){
           $sales=Sales::findOrFail($id);
           $sales->delete();
        
        return redirect('sales')->with('status','Malumot o`chirildi');
    }




    // public function sales(Request $request,$id){
    //     $sales=Sales::findOrfail($id);

    //     $sales->save();
    //     return redirect('sales')->with('status','Malumot qo`shildi');
    // } 
    public function oldisotti(Request $request,$id_mahsulot){
        $sales=Sales::findOrFail($id_mahsulot);
        $sales->id_mahsulot=$request->input('id_mahsulot');
        $sales->Soni=$request->input('Soni');
        ?>
            <script>
            // var display=0;
                // <!-- display = (type ==="debit" ? display + input : display - input); -->
        var income = [];
        var display=0;
            $(".btn").click(function () {

    var type = $(this).attr("data-toggle");
    var className;
    if(type === "debit"){
        className = "bg-success";

    }else{
        className ="bg-danger";
    }

    var text = $("#text").val();
    var input =$("#input").val();
    input  = parseInt(input);
    var date = new Date().getUTCDate() + "-" + (new Date().getUTCMonth()+1)
        + "-" + new Date().getUTCFullYear() + " " + new Date().getHours() + ":" + new Date().getMinutes();


    if(input != ""){

        if(display >=input || type ==="debit"){//

            display = (type ==="debit" ? display + input : display - input);

            var div = ' <div class="px-3 py-4 mb-2 rounded text-white '+className+'">' +
                '         <div>' +
                '             <span class="badge badge-light">'+input+'</span> '+ date +
                '         </div>' +
                '         <p>' + text +
                '         </p>' +
                '     </div>';
            $("#body").html(
                $("#body").html() + div
            );//jqureyni innetHTMLsi

            $("#display").text(display);
            $("#input").val("");
            $("#text").val("");
        }else{
            alert("Sizda yetarli mablag mavjud emas. Iltimos xisobingizni toldiring");
        }

    }

}

) 

            </script>

        <?
        
        $sales->update();
        
        return redirect('sales')->with('status','Tovar sotildi!');
    }


   
}
