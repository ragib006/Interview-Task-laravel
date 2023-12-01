<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Str;



use DB;

use Session;

session_start();




class Admincontroller extends Controller
{
    



	public function allproductpage(){

		  $getallproduct = DB::table('products')->get();
              


      
      return view('pages.allproductpage')->with(compact('getallproduct'));

	}


	public function addproductpage(){

      
      return view('pages.addproductpage');

	}


public function addproductformaction(Request $request){

 

  $data = array();
  

  $data['name'] = $request['name'];

  $data['quantity'] = $request['quantity'];


  $data['price'] = $request['price'];

 
  DB::table('products')->insert($data);
      

   return Redirect::to('/all_product_page');


}


public function viewproductpage($id){

  $product = DB::table('products')->where('id',$id)->first();
  return view('pages.viewproductpage')->with(compact('product'));


}


//editproductpage

public function editproductpage($id){

  $product = DB::table('products')->where('id',$id)->first();
  return view('pages.editproductpage')->with(compact('product'));

}





public function producteditformaction(Request $request,$id){

 


       $data=array();
       $data['name']=$request->name;
       $data['quantity']=$request->quantity;
       $data['price']=$request->price;
    


        DB::table('products')
        ->where('id',$id)
        ->update($data);


      

   return Redirect::to('/all_product_page');


}


//productdelete

public function productdelete($id){

 DB::table('products')->where('id',$id)->delete();


   return Redirect::to('/all_product_page');

}



//adminloginpage


public function userloginpage(){


return  view('pages.userloginpage');

}


public function userregistrationpage(){


return  view('pages.userregistrationpage');

}


//userregistrationfromaction


public function userregistrationfromaction(Request $request){

	  




  $data = array();
  

  $data['admin_name'] = $request->admin_name;

  $data['admin_email'] = $request->admin_email;


  $data['admin_password'] = MD5($request->admin_password);


     $savedata=DB::table('admins')
                 ->insertGetId($data);

          
                 Session::put('user_id',$request->id);

      

        return Redirect::to('/all_product_page');




}







public function userloginfromaction(Request $request){

 	     $email=$request->admin_email;         
 
         $password=MD5($request->admin_password);



         $result=DB::table('admins')
          ->where('admin_email',$email)
          ->where('admin_password',$password)
          ->first();


              if($result){ 
          
          Session::put('id',$result->id);
          return Redirect::to('/all_product_page');

         }

       else{


          Session::put('error_message','email or password invalied');
          return Redirect::to('/');
      
        }

         
       



}





}
