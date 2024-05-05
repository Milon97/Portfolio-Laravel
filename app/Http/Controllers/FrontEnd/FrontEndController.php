<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\About;
use App\Models\SocialMedia;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Blog;


use Toastr;

class FrontEndController extends Controller
{
   
  

    public function home()
    {
        
        $abouts = About::where('status',1)->orderBy('id','DESC')->limit(1)->first();
        $contact = Contact::where('status',1)->orderBy('id','DESC')->first();
        $socialmedias = SocialMedia::where('status',1)->get();
        $counters = Counter::where('status',1)->limit(3)->get();
        $skills = Skill::where('status',1)->get();
        $experience = Experience::where(['type'=>1, 'status'=>1])->get();
        $education = Experience::where(['type'=>2, 'status'=>1])->get();
        $category = Category::where(['status'=>1])->get();

        $portfolios = Portfolio::where(['status'=>1])->orderBy('id','DESC')->get();
        $blogs = Blog::where(['status'=>1])->orderBy('id','DESC')->get();

        
       

        return view('frontEnd.index',compact('abouts','contact','socialmedias','counters','skills','experience','education','category','portfolios','blogs',));
    }

    public function contact_save(Request $request){

         $this->validate($request, [
         'name'=>'required',
         'phoneNumber'=>'required',
         'contact_text'=>'required',
        ]);
      $data = array(
         'name' => $request->name,
         'email' => $request->email,
         'phoneNumber' => $request->phoneNumber,
         'subject' => $request->subject,
         'contact_text' => $request->contact_text,
        );
        return $data;
        $send = Mail::send('frontEnd.emails.email', $data, function($textmsg) use ($data){
         $textmsg->from($data['contact_email']);
         $textmsg->to('info@portfolio.com');
         $textmsg->subject($data['contact_text']);
        });


        if($send){

          Toastr::success('message', 'Message send successfully!');
          return redirect()->back();
        }else{
           Toastr::success('message', 'Message send successfully!');
          return redirect()->back();
        }

    }


   
}
