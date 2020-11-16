<?php

namespace App\Http\Controllers;

use App\Register;
use App\Course;
use Illuminate\Http\Request;
use Auth;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pending_register=Register::where('status', 0)->get();
       $confirm_register=Register::where('status', 1)->get();
       return view('register.index', compact('pending_register', 'confirm_register'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
          $c =Course::take(1)->get();
        // dd($c);

           // if include file, upload
        if ($request->file()) {
            //23233432121_a.jpg
            $fileName=time().'_'.$request->photo->getClientOriginalName();
            //brandimg/343431212_a.jpg
            $filePath=$request->file('photo')->storeAs('registerimg',$fileName,'public');
            $path='/storage/'.$filePath;
        }

      
        //store
            $register=new Register;
            $register->registerdate=$request->registerdate;
            $register->photo=$path;
            $register->birthday=$request->birthday;
            $register->phone=$request->phone;
            $register->address=$request->address;
            $register->user_id=Auth::id();
            $register->save();

            foreach($c as $row){
                // dd($course);
                $register->courses()->attach($row->id);
                // dd($register);
            }
        //redirect
             return redirect()->route('mainpage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {

          return view('register.show', compact('register'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
         $register->delete();
        return redirect()->route('register.index'); 
    }

      public function confirm($id)
    {
      $register= Register::find($id);
      $register->status=1;
      $register->save();

      return back();
    }
}
