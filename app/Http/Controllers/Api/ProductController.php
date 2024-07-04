<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
     //store a new product to the database
     public function storeProduct(Request $request ){
        $validate=Validator::make($request->all(),[
          'image'=>'required|mimes:png,jpg,jpeg',
          'name'=>'required|unique:products',
          'description'=>'required',
          'price'=>'required|integer',
          'quantity'=>'required'
          ]);
       
        if($validate->fails()){
              return response()->json([
                "message"=>$validate->errors()
            ],422);
        }
        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName=time().'_'.$image->getClientOriginalName();
             $path=$image->storeAs('images',$imageName,'public');
        }
         $product=Product::create([
          'image'=>$path,
          'name'=>$request->name,
          'description'=>$request->description,
          'price'=>$request->price,
          'quantity'=>$request->quantity
        ]);
        
          if($product){
              return response()->json([
                  "message"=>"Product Created SuccesFully",
                  "product"=>$product
              ],201);
          }
   }
       
   //Fetch all available products from the database
    public function showProducts(){
        $product=Product::all();
        return response()->json([
          "message"=>"Product Showed SuccesFully",
          "product"=>$product
      ],200);
    }
     
   //Retrieve detailed information about a specific product
   public function showSingleProduct($id){
       $product=Product::find($id);
       if($product){
        return response()->json([
        "message"=>"Show Single Product SuccesFully",
        "product"=>$product
    ],200);
        }
    else{
       return response()->json([
        "message"=>"Product Not Found ",
      ],404);
    }
  }
    
  //Update an existing product's details
  public function editProduct(Request $request,$id){
  $product=Product::find($id);
   if( $product){
   $validate=Validator::make($request->all(),[
    'image'=>'required|mimes:jpg,png,jpeg',
    'name'=>['required',
     Rule::unique('products')->ignore($id)],
    'description'=>'required',
    'price'=>'required',
    'quantity'=>'required'
  ]);
  if($validate->fails()){
    return response()->json([
      "message"=>$validate->errors()
  ],404);}
}
    if( $product){
      if($request->hasFile('image')){
        $image=$request->file('image');
        $imageName=time().'_'.$image->getClientOriginalName();
        if($product->image) {
            $delete=Storage::delete('public'.'/'.$product->image);
            $path=$image->storeAs('images',$imageName,'public');
        }
        }
       $product->image=$path; 
       $product->name=$request->name;
       $product->description=$request->description;
       $product->price=$request->price;
       $product->quantity=$request->quantity;
       $product->save();
      return response()->json([
        "message"=>"Product Updated Succesfully"
      ],200);
   }

   else{
    return response()->json([
      "message"=>"Product Not Found"
  ],404);
  
   }

}
 
//Remove a product from the database
public function  deleteProduct($id){
  $product=Product::find($id);
if($product){
   $image=$product->image;
   Storage::delete('public'.'/'.$image);
  $product->delete();
  return response()->json([
    "message"=>"Product Deleted SuccesFully"
],200);
}

else{
 return response()->json([
    "message"=>"Product Not Found"
],404);
}

}

}
