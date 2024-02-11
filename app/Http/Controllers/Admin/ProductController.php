<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Solution;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $solutions = Solution::all();

        $product = Product::join('solutions','products.solution_id','solutions.id')
            ->select('products.*','solutions.so_title')

              ->latest()->get();


        return view('backend.admin.product.all_product',compact('solutions','product'));
    }


//    product store

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'p_name' => 'required|unique:products|max:100',
            'solution_id' => 'required',
            'p_image' => 'required',
            'brand_logo' => 'required',
            'p_features' => 'required',
        ]);


        $product = new Product();
        $product->p_name = $request->p_name;
        $product->solution_id = $request->solution_id;
        $product->p_features = $request->p_features;
        $product->p_p_status = $request->p_p_status;

        $image=$request->file('p_image');
        $image_brang =$request->file('brand_logo');

        if ($image) {
            $image_name= str_random(10);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/product/';
            $image_url=$upload_path.$image_full_name;
            $image->move($upload_path,$image_full_name);


        }else{

            $image_url = "public/default.png";

        }

        if ($image_brang) {
            $image_name= str_random(10);
            $ext=strtolower($image_brang->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/product/brand/';
            $image_url_brand=$upload_path.$image_full_name;
            $image_brang->move($upload_path,$image_full_name);


        }else{

            $image_url_brand = "public/default.png";

        }


                $product->p_image = $image_url;
                $product->brand_logo = $image_url_brand;
                $product->save();
                if ($product) {
                    $notification=array(
                        'messege'=>'Product Inserted Successfully',
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else{
                    $notification=array(
                        'messege'=>'error ',
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }





    }


//    product store end


//delete product

    public function delete($id)
    {
        $delete =Product::where('id',$id)->first();

        $photo = $delete->p_image;
        unlink($photo);

        $delete_product = Product::where('id',$id)->delete();


        if ($delete_product) {
            $notification=array(
                'messege'=>'Product Delete Successfully',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'error ',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }

//product delete end


// product edit

    public function edit($id)
        {
            $product = Product::where('id',$id)->first();
            return view('backend.admin.product.edit',compact('product'));

        }

// product edit end

//view product

    public function view($id)
    {
        $product = Product::where('id',$id)->first();
        return view('backend.admin.product.view',compact('product'));
    }

//view product end

//product update

    public function update(Request $request ,$id)
    {

        $data=array();
        $data['p_name']=$request->p_name;
        $data['p_features']=$request->p_features;
        $data['p_p_status']=$request->p_p_status;
        $image=$request->file('p_image');
        $brand_logo=$request->file('brand_logo');
        
        if ($image) {
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/product/';
            $image_url=$upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            
            if ($success) {
                $data['p_image']=$image_url;
                $img=DB::table('products')->where('id',$id)->first();
                $image_path = $img->p_image;
                unlink($image_path);
            }
            
        }else{
            $image_url=$request->old_photo;
        }
        
        
        if ($brand_logo) {
            $image_name=str_random(20);
            $ext=strtolower($brand_logo->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/product/brand/';
            $image_url_brand=$upload_path.$image_full_name;
            $successd = $brand_logo->move($upload_path,$image_full_name);
            
            if ($successd) {
                $data['brand_logo']=$image_url_brand;
                $img=DB::table('products')->where('id',$id)->first();
                $image_paths = $img->brand_logo;
                unlink($image_paths);
            }
            
        }else{
            $image_url_brand=$request->old_photo_brand;
        }
        
        
        
        
        $data['p_image']=$image_url;
        $data['brand_logo']=$image_url_brand;
        


                $user=DB::table('products')->where('id',$id)->update($data);
                
                if ($user) {
                    $notification=array(
                        'messege'=>'Product Update Successfully',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('admin.product')->with($notification);
                }else{
                    return Redirect()->route('admin.product');
                }
                
                
                
            }
            
            
    

//product update end

    public function unpublished($id)
    {
        $product = Product::where('id',$id)
            ->update(['p_p_status' => '0']);

        if ($product) {
            $notification=array(
                'messege'=>'Product Unpublished Successfully',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'error ',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }


    public function published($id)
    {
        $product = Product::where('id',$id)
            ->update(['p_p_status' => '1']);

        if ($product) {
            $notification=array(
                'messege'=>'Product Published Successfully',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'error ',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }


}
