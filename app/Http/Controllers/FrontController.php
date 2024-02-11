<?php

namespace App\Http\Controllers;

use App\Client;
use App\Contact;
use App\Product;
use App\Solution;
use Illuminate\Support\Facades\Mail;
use PDF;
use Illuminate\Http\Request;
class FrontController extends Controller
{
    public function index()
    {
        $solution = Solution::where('so_p_status',1)->get();
        $products = Product::where('p_p_status',1)->latest()->limit(6)->get();
        return view('frontend.home',compact('solution','products'));

    }


    public function productbysolution($id)
    {

        $solutionid = Solution::where('id',$id)->first();
        $sid = $solutionid->id;
        $solutionbyproduct = Product::where('solution_id',$sid)->get();
        return view('frontend.solutionbyproduct',compact('solutionbyproduct','solutionid'));
    }

    public function product_details($id)
    {
        $product = Product::where('id',$id)->first();
        return view('frontend.product_view',compact('product'));

    }




    public function contact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();



        $data = array(
            'email' =>  $request->email,
            'subject' =>  $request->subject,
            'bodyMessage' =>  $request->message
        );
        Mail::send('email.contact',$data,function ($message) use ($data){
            $message->from($data['email']);
            $message->to('info@baitsbd.com');
            $message->subject($data['subject']);
        });

        if ($contact) {
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
        }

        return Redirect()->back();
    }


    public function product()
    {
        $products = Product::where('p_p_status',1)->latest()->get();
        return view('frontend.product',compact('products'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function faq()
    {
        return view('frontend.faq');
    }


    public function solution_pdf($id)
    {

        $solutionpdf = Solution::find($id);
        $pdf = PDF::loadView('frontend.solution_pdf',['solutionpdf'=>$solutionpdf])->setPaper('a4','portrait');
        $fileName = $solutionpdf->so_title;
        return $pdf->download($fileName.'.pdf');


    }

    public function product_pdf($id)
    {

        $productpdf = Product::find($id);
        $pdf = PDF::loadView('frontend.product_pdf',['productpdf'=>$productpdf])->setPaper('a4','portrait');
        $fileName = $productpdf->p_name;
        return $pdf->download($fileName.'.pdf');


    }
    
    public function software()
    {
        return view('frontend.software');
    }


}
