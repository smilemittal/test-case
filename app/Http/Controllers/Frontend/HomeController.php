<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    
    public function index(Request $request)
    {
        return view('frontend.about');
    }
    public function fetures(Request $request)
    {    $id = $request->segment(2);
         return view('frontend.fetures',['id' => $id]);
    }
    public function steptwo()
    {
        return view('frontend.steptwo');
    }
     public function stepthree()
    {
        return view('frontend.stepthree');
    }
     public function stepfour()
    {
        return view('frontend.stepfour');
    }
     public function stepfive()
    {
        return view('frontend.stepfive');
    }
     public function stepsix()
    {
        return view('frontend.stepsix');
    }

     public function stepseven()
    {
        return view('frontend.stepseven');
    }
     public function stepeight()
    {
        return view('frontend.stepeight');
    }
     public function stepnine()
    {
        return view('frontend.stepnine');
    }
     public function stepten()
    {
        return view('frontend.stepten');
    }
     public function stepelveven()
    {
        return view('frontend.stepeleven');
    }
     public function steptevele()
    {
        return view('frontend.steptewle');
    }
     public function stepthirteen()
    {
        return view('frontend.stepthirteen');
    }

     public function stepfourteen()
    {
        return view('frontend.stepfourteen');
    }
     public function stepfifteen()
    {
        return view('frontend.stepfifteen');
    } public function stepsixteen()
    {
        return view('frontend.stepsixteen');
    }

     public function stepseventeen()
    {
        return view('frontend.stepseventeen');
    }
     public function stepeighteen()
    {
        return view('frontend.stepeighteen');
    }
     public function stepnineteen()
    {
        return view('frontend.stepnineteen');
    }
     public function steptwenty()
    {
        return view('frontend.steptwenty');
    }
     public function steptwentyone()
    {
        return view('frontend.steptwentyone');
    }
    public function steptwentytwo()
    {
        return view('frontend.steptwenntytwo');
    }
    public function steptwentythree()
    {
        return view('frontend.steptwentythree');
    }
    public function steptwentyfour()
    {
        return view('frontend.steptwentyfour');
    }
    public function steptwentyfive()
    {
        return view('frontend.steptwentyfive');
    }
    public function steptwentysix()
    {
        return view('frontend.steptwentysix');
    }

    public function team(Request $request)
    {

        return view('frontend.team');
    }
     public function allcase(Request $request)
    {

        return view('frontend.allcase');
    }
    public function singlecase(Request $request)
    {
        return view('frontend.singlecase');
    }
    public function testimonial(Request $request)
    {
        return view('frontend.testimonial');
    }
    public function career(Request $request)
    {
        return view('frontend.career');
    }
     public function pricing(Request $request)
    {
        return view('frontend.pricing');
    }
     public function faq(Request $request)
    {
        return view('frontend.faq');
    }
    public function serviceall(Request $request)
    {
        return view('frontend.serviceall');
    }
     public function service(Request $request)
    {
        $id = $request->segment(2);
        
        return view('frontend.service',['id' => $id]);
    }
     public function addons(Request $request)
    {
        return view('frontend.addons');
    }
     public function notfound(Request $request)
    {
        return view('frontend.404');
    }
     public function news(Request $request)
    {
        return view('frontend.news');
    }
     public function contact(Request $request)
    {
        return view('frontend.contact');
    }
    public function privacy()
    {
         return view('frontend.privacy');
    }
    public function terms()
    {
         return view('frontend.terms');
    }
    public function sendmail(Request $request)
    {
        
        $data = array(
            'name'      =>  $request->name,
            'website'   =>  $request->url,
            'email'     =>  $request->email,
            'comment'   =>  $request->comments,
            'datafrom'  => 'contact'
        );

        Mail::to('lalita@digitaservices.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }
    public function registration(Request $request)
    {
         $data = array(
            'firstname'      =>  $request->firstname,
            'middlename'     =>   $request->middlename,
            'lastname'       =>   $request->lastname,
            'email'          =>  $request->email,
            'phone'          =>  $request->tel,
        );
         return view('dashboard.register',['registerdata' =>  $data]);
    }  
    public function requsetcallback(Request $request)
    {
        $data = array(
            'name'      =>  $request->name,
            'subject'   =>  $request->subject,
            'email'     =>  $request->email,
            'message'   =>  $request->message,
            'datafrom'  => 'requestcallback'
        );

        Mail::to('lalita@digitaservices.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for the request our team will reach you soon!');
    }
    public function getquotedetails(Request $request)
    {
        $data = array(
            'name'         =>  $request->name,
            'businesstype' =>  $request->businesstype,
            'email'        =>  $request->email,
            'phone'        =>  $request->tel,
            'datafrom'     => 'quote'
        );

        Mail::to('lalita@digitaservices.com')->send(new SendMail($data));
        return back()->with('success', 'Quote request sent successfully.');
    }
   
  

}
