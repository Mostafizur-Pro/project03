<?php

namespace App\Http\Controllers\Admin;

use App\Solution;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SolutionController extends Controller
{
    public function index()
    {
        $solutions = Solution::latest()->get();
        return view('backend.admin.solution.all_solution',compact('solutions'));
    }

//solution store function
    public function store(Request $request)
    {
                $validatedData = $request->validate([
                    'so_title' => 'required|unique:solutions|max:100',
                    'so_discription' => 'required',
                    'so_image' => 'required',
                ]);


                     $solution = new Solution();
                     $solution->so_title = $request->so_title;
                     $solution->so_discription = $request->so_discription;
                     $solution->so_p_status = $request->so_p_status;

                $image=$request->file('so_image');

                if ($image) {
                    $image_name= str_random(10);
                    $ext=strtolower($image->getClientOriginalExtension());
                    $image_full_name=$image_name.'.'.$ext;
                    $upload_path='public/solution/';
                    $image_url=$upload_path.$image_full_name;
                    $success=$image->move($upload_path,$image_full_name);


                    if ($success) {
                        $solution->so_image = $image_url;
                        $solution->save();
                        if ($solution) {
                            $notification=array(
                                'messege'=>'Solution Inserted Successfully',
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

//    solution store end


//    solution delete function

    public function delete($id)
    {
        $delete =Solution::where('id',$id)->first();

        $photo = $delete->so_image;
        unlink($photo);

        $delete_solution = Solution::where('id',$id)->delete();


        if ($delete_solution) {
            $notification=array(
                'messege'=>'Solution Delete Successfully',
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

//    solution delete end


//solution edit
        public function edit($id)
        {
            $solution = Solution::where('id',$id)->first();
            return view('backend.admin.solution.edit',compact('solution'));

        }

//solution edit end

        //solution update


          public function update(Request $request ,$id)
    {

        $data=array();
        $data['so_title']=$request->so_title;
        $data['so_discription']=$request->so_discription;
        $data['so_p_status']=$request->so_p_status;
        $image=$request->file('so_image');
        if ($image) {
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/solution/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['so_image']=$image_url;
                $img=DB::table('solutions')->where('id',$id)->first();
                $image_path = $img->so_image;
                unlink($image_path);


                $user=DB::table('solutions')->where('id',$id)->update($data);
                if ($user) {
                    $notification=array(
                        'messege'=>'Solution Update Successfully',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('admin.solution')->with($notification);
                }else{
                    return Redirect()->route('admin.solution');
                }
            }
        }else{
            $oldphoto=$request->old_photo;
            if ($oldphoto) {
                $data['so_image']=$oldphoto;
                $user=DB::table('solutions')->where('id',$id)->update($data);
                if ($user) {
                    $notification=array(
                        'messege'=>'Solution Update Successfully',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('admin.solution')->with($notification);
                }else{
                    return Redirect()->route('admin.solution');
                }
            }
        }
    }


        //solution update end

//solution view

    public function view($id)
    {
        $solution = Solution::where('id',$id)->first();
        return view('backend.admin.solution.view',compact('solution'));
    }

//soution view end

    public function unpublished($id)
    {
        $solution = Solution::where('id',$id)
            ->update(['so_p_status' => '0']);

        if ($solution) {
            $notification=array(
                'messege'=>'Solution Unpublished Successfully',
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
        $solution = Solution::where('id',$id)
            ->update(['so_p_status' => '1']);

        if ($solution) {
            $notification=array(
                'messege'=>'Solution Published Successfully',
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
