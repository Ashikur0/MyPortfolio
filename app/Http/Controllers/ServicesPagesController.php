<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;


class ServicesPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
         $fetch = Service::Orderby('id','desc')->paginate(5);

        return view('admin pages.list',compact('fetch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin pages.create_service');
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

            'icon' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
  
          ]) ;
  
          $insert = new Service;
          $insert->icon = $request->icon;
          $insert->title = $request->title;
          $insert->description = $request->description;

          $insert->save();

          return redirect()->route('admin.services.list')->with('success','Service Created Successfully');




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
        
      $search = Service::find($id);

      return view ('admin pages.edit_list',compact('search'));

     

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

            'icon' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
  
          ]) ;
  
          $update =Service::find($id);
          $update->icon = $request->icon;
          $update->title = $request->title;
          $update->description = $request->description;

          $update->save();

          return redirect()->route('admin.services.list')->with('success','Service Updated Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $delete = Service::find($id);
        $delete ->delete();

        return redirect()->route('admin.services.list')->with('success','Service Deleted Successfully');


    }
}
