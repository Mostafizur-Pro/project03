<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use App\Mailfile;
use DB;
use Illuminate\Http\Request;
class CareearController extends Controller
{
    public function index()
    {
        
        return view('frontend.careear');

    }
    
    public function internee()
    {
        return view('frontend.internee');
    }
    
    
    public function career_store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required',
            'phonenumber' => 'required',
            'email' => 'required',
            'cv' => 'required',
            'message' => 'required|max:255',
        ]);

        
            
         $career = array(
            'full_name' =>  $request->fullname,
            'phone_number' =>  $request->phonenumber,
            'email' =>  $request->email,
            'message' =>  $request->message
            
            );
        
        $career = DB::table('careears')->insert($career);


        $data = array(
            'full_name' =>  $request->fullname,
            'email' =>  $request->email,
            'subject' =>  'Career Email',
            'bodyMessage' =>  $request->message,
            'a_file' =>$request->cv,
        );
        
        Mail::send('email.contact',$data,function ($message) use ($data){
            $message->from($data['email']);
            $message->to('info@baitsbd.com');
            $message->subject($data['subject']);
        
            
            $message->attach($data['a_file']->getRealPath(),array(
                'as' =>'CV.'.$data['a_file']->getClientOriginalExtension(),
                'mime' => $data['a_file']->getMimeType()
                ));
        });

        if ($career) {
            $notification=array(
                'messege'=>'YOUR MESSAGE SUCCESSFULLY SEND. WE WILL CONTACT SOON....... ',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else {
            $notification = array(
                'messege' => 'error ',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }

    }
    
    
    
    public function internee_store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required',
            'phonenumber' => 'required',
            'email' => 'required',
            'cv' => 'required',
            'message' => 'required|max:255',
        ]);

        
            
         $internee = array(
            'full_name' =>  $request->fullname,
            'phone_number' =>  $request->phonenumber,
            'email' =>  $request->email,
            'message' =>  $request->message
            
            );
        
        $intern = DB::table('interns')->insert($internee);
        


        $data = array(
            'full_name' =>  $request->fullname,
            'email' =>  $request->email,
            'subject' =>  'Interns Email',
            'bodyMessage' =>  $request->message,
            'a_file' =>$request->cv,
        );
        Mail::send('email.intern',$data,function ($message) use ($data){
            $message->to('career@baitsbd.com');
            $message->from($data['email']);
            $message->subject($data['subject']);
            
            $message->attach($data['a_file']->getRealPath(),array(
                'as' =>'CV.'.$data['a_file']->getClientOriginalExtension(),
                'mime' => $data['a_file']->getMimeType()
                ));
        });

        if ($intern) {
            $notification=array(
                'messege'=>'YOUR MESSAGE SUCCESSFULLY SEND. WE WILL CONTACT SOON....... ',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else {
            $notification = array(
                'messege' => 'error ',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }

    }
    
    
   




    


}
