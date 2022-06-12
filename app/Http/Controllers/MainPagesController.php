<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;
use File;

class MainPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view_main()
    {
        $main = Main::first();
        return view('admin pages.main' ,compact('main'));
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $this -> validate($request,[
          'title' => 'required|string',
          'sub_title' => 'required|string',
          'image' => 'required|mimes:png,jpg,jpeg,gif',

        ]) ;

        $update = Main::first();

        $update->title = $request ->title;
        $update->sub_title = $request ->sub_title;

        if($request->hasfile('image'))
        {
        $destination = 'uploads/images'.$update->images;
        if( File::exists($destination))
            {
                File::delete($destination);
            }

             $file = $request->file('image');
             $name = $file->getClientOriginalName();
             //$filename = time().'.'.$extention;
             $file->move('uploads/images',$name);
            
             $update->images = $name;
    }


if($request->hasfile('resume'))
        {
        $destination = 'uploads/files'.$update->resume;
        if( File::exists($destination))
            {
                File::delete($destination);
            }

             $file = $request->file('resume');
             $name = $file->getClientOriginalName();
             //$filename = time().'.'.$extention;
             $file->move('uploads/files',$name);
            
             $update->resume = $name;
    }

    $update->save();

    return redirect()->route('admin.main')->with('success','Data Updated Successfully');


 }
}