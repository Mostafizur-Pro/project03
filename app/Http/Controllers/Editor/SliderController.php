<?php

namespace App\Http\Controllers\Editor;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('backend.editor.slider.all_slider',compact('sliders'));
    }

//    slider information story function

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            's_title' => 'required|unique:sliders|max:100',
            's_discription' => 'required |max:150',
            's_image' => 'required',
        ]);


        $sliders = new Slider();
        $sliders->s_title = $request->s_title;
        $sliders->s_discription = $request->s_discription;
        $sliders->s_p_status = $request->s_p_status;

        $image=$request->file('s_image');

        if ($image) {
            $image_name= str_random(10);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/slider/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);


            if ($success) {
                $sliders->s_image = $image_url;
                $sliders->save();
                if ($sliders) {
                    $notification=array(
                        'messege'=>'Slider Inserted Successfully',
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

            }else{

                $notification=array(
                    'messege'=>'error ',
                    'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);

            }


        }else{

            $notification=array(
                'messege'=>'error ',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);

        }


    }

    //        slider store end function

//    slider edit function

        public function edit($id)
        {
            $slider = Slider::where('id',$id)->first();
            return view('backend.editor.slider.edit',compact('slider'));

        }

//slider edit function end

//        update slider


    public function update(Request $request ,$id)
    {

        $data=array();
        $data['s_title']=$request->s_title;
        $data['s_discription']=$request->s_discription;
        $data['s_p_status']=$request->s_p_status;
        $image=$request->file('s_image');
        if ($image) {
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/slider/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['s_image']=$image_url;
                $img=DB::table('sliders')->where('id',$id)->first();
                $image_path = $img->s_image;
                unlink($image_path);


                $user=DB::table('sliders')->where('id',$id)->update($data);
                if ($user) {
                    $notification=array(
                        'messege'=>'Slider Update Successfully',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('editor.slider')->with($notification);
                }else{
                    return Redirect()->route('editor.slider');
                }
            }
        }else{
            $oldphoto=$request->old_photo;
            if ($oldphoto) {
                $data['s_image']=$oldphoto;
                $user=DB::table('sliders')->where('id',$id)->update($data);
                if ($user) {
                    $notification=array(
                        'messege'=>'Slider Update Successfully',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('editor.slider')->with($notification);
                }else{
                    return Redirect()->route('editor.slider');
                }
            }
        }
    }


//        update slider end


//    slider delete function



//    delete function end

//    view

        public function view($id)
        {
            $slider = Slider::where('id',$id)->first();
            return view('backend.editor.slider.view',compact('slider'));
        }

//    view end


    public function unpublished($id)
    {
        $slider = Slider::where('id',$id)
            ->update(['s_p_status' => '0']);

        if ($slider) {
            $notification=array(
                'messege'=>'Slider Unpublished Successfully',
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
        $slider = Slider::where('id',$id)
            ->update(['s_p_status' => '1']);

        if ($slider) {
            $notification=array(
                'messege'=>'Slider Published Successfully',
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
