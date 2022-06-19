<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInfo;
use File;

class PersonalInfoPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $fetch_personalinfo=PersonalInfo::Orderby('id','desc')->paginate(5);

        return view('admin pages.list_personalinfo',compact('fetch_personalinfo'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin Pages.add_personalinfo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $this -> validate($request,[
            'name' => 'required|string',
            'designation' => 'required|string',
            'company' => 'required|string',
            'email' => 'required|string',
            'contact' => 'required|string',
            'facebook' => 'required|string',
            'linkdin' => 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg,gif',
          ]) ;

          $insert = new PersonalInfo;

          $insert->name =$request->name;
          $insert->designation =$request->designation;
          $insert->company =$request->company;
          $insert->email =$request->email;
          $insert->contact =$request->contact;
          $insert->facebook =$request->facebook;
          $insert->linkdin =$request->linkdin;


          if($request->hasfile('image'))
        {
        $destination = 'uploads/images'.$insert->image;
        if( File::exists($destination))
            {
                File::delete($destination);
            }

             $file = $request->file('image');
             $name = $file->getClientOriginalName();
             //$filename = time().'.'.$extention;
             $file->move('uploads/images',$name);
            
             $insert->image = $name;
         }

         $insert ->save();

         return redirect()->route('admin.personalinfo.list')->with('success','Personal Infomation Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $edit_info = PersonalInfo::find($id);
        return view ('admin pages.edit_personalinfo',compact('edit_info'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this -> validate($request,[
            'name' => 'required|string',
            'designation' => 'required|string',
            'company' => 'required|string',
            'email' => 'required|string',
            'contact' => 'required|string',
            'facebook' => 'required|string',
            'linkdin' => 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg,gif',
          ]) ;

          $update =PersonalInfo::find($id);

          $update->name =$request->name;
          $update->designation =$request->designation;
          $update->company =$request->company;
          $update->email =$request->email;
          $update->contact =$request->contact;
          $update->facebook =$request->facebook;
          $update->linkdin =$request->linkdin;


          if($request->hasfile('image'))
        {
        $destination = 'uploads/images'.$update->image;
        if( File::exists($destination))
            {
                File::delete($destination);
            }

             $file = $request->file('image');
             $name = $file->getClientOriginalName();
             //$filename = time().'.'.$extention;
             $file->move('uploads/images',$name);
            
             $update->image = $name;
         }

         $update ->save();

         return redirect()->route('admin.personalinfo.list')->with('success','Personal Infomation Edited Successfully');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $delete=PersonalInfo::find($id);
         $delete->delete();

         return redirect()->route('admin.personalinfo.list')->with('success','Information Deleted Successfully');
    }
}
