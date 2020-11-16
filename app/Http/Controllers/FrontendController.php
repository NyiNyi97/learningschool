<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Course;
use App\Category;

class FrontendController extends Controller
{
    public function home($value='')
    {
     $Courses=Course::take(9)->get();
    	return view('frontend_project.mainpage', compact('Courses'));
    }

    public function coursedetail($id)
    {
       $course = Course::find($id);
       $couid=$course->category_id;
       // dd($couid);
       $category=Course::where('category_id', $couid)->get();
       // dd($category);
       return view('frontend_project.coursedetail', compact('course', 'category'));
    }

    public function onlinecourse($value='')
    {
          $courses= Course::take(6)->get();
        $categories=Category::all();
    	return view('frontend_project.onlinecourse',compact( 'categories', 'courses'));
    }

    public function contact($value='')
    {
    	return view('frontend_project.contact');
    }

    public function contactSubmit(Request $request)
    {
        Mail::send('emails.contactmail',[
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address
        ], function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS'),$request->name);
            $mail->to("warhaha450@gmail.com")->subject('Contact Us Message');  
            
        });
       return view('frontend_project.contact');
    }



    public function signin($value='')
    {
        return view('frontend_project.signin');
    }

    public function signup($value='')
    {
        return view('frontend_project.signup');
    }

    public function profile($value='')
    {
        return view('frontend_project.profile');
    }

     public function aboutus($value='')
    {
        return view('frontend_project.aboutus');
    }

    public function grade1($value='')
    {   
        // $course = Course::find($id);
        //  $cid=$course->category_id;
        // // dd($cid);
        // $category=Course::where('category_id', $cid)->get();
        // // dd($category);
           $courses= Course::take(6)->get();
       return view('frontend_project.grade1', compact('courses'));
    }
  
    public function coursebycategory($id)
    {
        // dd($id);
       //   $categories=Category::find($id);
       //   // dd($categories);
       //   $courses=Course::all();
       //   // dd($courses);
       // return view('frontend_project.coursebycategory', compact('categories', 'courses'));
         $categories=Category::all();
        $course=Course::where('category_id',$id)->get();
       // dd($course);

       // dd($couid);
      
       // dd($Category);
       return view('frontend_project.coursebycategory', compact('course', 'categories'));
    }

    // public function bycategory(Request $request)
    // {
    //   $id=$request->id;
    //   $course=Course::where('category_id', $id)->get();
    //   return $course;
    // }
}
