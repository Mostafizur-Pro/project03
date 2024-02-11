<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\software;
class SoftwareController extends Controller
{
    
        public function __construct()
        {
            set_time_limit(80000000);
        }
    public function index()
    {
        $softwares = software::latest()->get();
        return view('backend.admin.software.software_index',compact('softwares'));
    }

    public function store(Request $request)
    {
                $validatedData = $request->validate([
                    'sft_name' => 'required|unique:software',
                    'sft_image' => 'required|max:50000',
                    'file' => 'required|max:50000',
               ]);

            $software_name = str_slug($request->sft_name);
            $softw=$request->file('file');

        if ($softw) {
            $softw_name= $software_name;
            $ext=strtolower($softw->getClientOriginalExtension());
            $softw_full_name=$softw_name.'.'.$ext;
            $upload_path='public/software/';
            $softw_url=$upload_path.$softw_full_name;
            $softw->move($upload_path,$softw_full_name);


        }

        
        $sft_image=$request->file('sft_image');

        if ($sft_image) {
            $sft_image_name= $software_name;
            $ext=strtolower($sft_image->getClientOriginalExtension());
            $sft_image_full_name=$sft_image_name.'.'.$ext;
            $upload_path='public/software/image/';
            $sft_image_url=$upload_path.$sft_image_full_name;
            $sft_image->move($upload_path,$sft_image_full_name);


        }else{

            $sft_image = "public/default.png";

        }

        $soft = new software();
        $soft->sft_name = $request->sft_name;
        $soft->sft_image = $sft_image_url;
        $soft->file = $softw_url;

        $soft->save();


        if ($soft) {
                    $notification=array(
                        'messege'=>'Software Inserted Successfully',
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
