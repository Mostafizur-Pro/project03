<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index()
    {
        $client = Client::latest()->get();
        return view('backend.admin.client.all_client',compact('client'));
    }



//    client store

    public function store(Request $request)
    {
                    $validatedData = $request->validate([
                        'client_name' => 'required|unique:clients|max:100',
                        'client_image' => 'required',
                        'client_address' => 'required',
                        'client_phone' => 'required',
                        'client_email' => 'required',
                    ]);


                    $client = new Client();
                    $client->client_name = $request->client_name;
                    $client->client_address = $request->client_address;
                    $client->client_phone = $request->client_phone;
                    $client->client_email = $request->client_email;
                    $client->client_publication = $request->client_publication;

                    $image=$request->file('client_image');

                    if ($image) {
                        $image_name= str_random(10);
                        $ext=strtolower($image->getClientOriginalExtension());
                        $image_full_name=$image_name.'.'.$ext;
                        $upload_path='public/client/';
                        $image_url=$upload_path.$image_full_name;
                        $success=$image->move($upload_path,$image_full_name);


                        if ($success) {
                            $client->client_image = $image_url;
                            $client->save();
                            if ($client) {
                                $notification=array(
                                    'messege'=>'Client Inserted Successfully',
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

//        client store end



//client delete

    public function delete($id)
    {
        $delete =Client::where('id',$id)->first();

        $photo = $delete->client_image;
        unlink($photo);

        $delete_client = Client::where('id',$id)->delete();


        if ($delete_client) {
            $notification=array(
                'messege'=>'Client Delete Successfully',
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

//client delete end

//client edit

    public function edit($id)
    {
        $client = Client::where('id',$id)->first();
        return view('backend.admin.client.edit',compact('client'));

    }

// client edit end

//update
    public function update(Request $request ,$id)
    {

        $data=array();
        $data['client_name']=$request->client_name;
        $data['client_phone']=$request->client_phone;
        $data['client_email']=$request->client_email;
        $data['client_address']=$request->client_address;
        $data['client_publication']=$request->client_publication;
        $image=$request->file('client_image');
        if ($image) {
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/client/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['client_image']=$image_url;
                $img=DB::table('clients')->where('id',$id)->first();
                $image_path = $img->client_image;
                unlink($image_path);


                $user=DB::table('clients')->where('id',$id)->update($data);
                if ($user) {
                    $notification=array(
                        'messege'=>'Client Update Successfully',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('admin.client')->with($notification);
                }else{
                    return Redirect()->route('admin.client');
                }
            }
        }else{
            $oldphoto=$request->old_photo;
            if ($oldphoto) {
                $data['client_image']=$oldphoto;
                $user=DB::table('clients')->where('id',$id)->update($data);
                if ($user) {
                    $notification=array(
                        'messege'=>'Client Update Successfully',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('admin.client')->with($notification);
                }else{
                    return Redirect()->route('admin.client');
                }
            }
        }
    }

//update end


//view
    public function view($id)
    {
        $client = Client::where('id',$id)->first();
        return view('backend.admin.client.view',compact('client'));
    }

//view end

    public function unpublished($id)
    {
        $client = Client::where('id',$id)
            ->update(['client_publication' => '0']);

        if ($client) {
            $notification=array(
                'messege'=>'Client Unpublished Successfully',
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
        $client = Client::where('id',$id)
            ->update(['client_publication' => '1']);

        if ($client) {
            $notification=array(
                'messege'=>'Client Published Successfully',
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
