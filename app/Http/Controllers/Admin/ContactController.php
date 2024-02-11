<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('backend.admin.contact.all_contact',compact('contacts'));
    }


    public function view($id)
    {
        $contact = Contact::where('id',$id)->first();
        return view('backend.admin.contact.view',compact('contact'));
    }

    public function delete($id)
    {
        $cont = Contact::where('id',$id)->delete();

        if ($cont) {
            $notification=array(
                'messege'=>'Contact Delete Successfully',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'error ',
                'alert-type'=>'success'
            );
            return Redirect()->back();
        }
    }
}
