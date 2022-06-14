<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use File;


class ProjectsPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view ('admin pages.create_projects');

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
            'pname' => 'required|string',
            'pdescription' => 'required|string',
            'ptechnology' => 'required|string',
            'pimage' => 'required|mimes:png,jpg,jpeg,gif',
          ]) ;

          $insert = new Project;

          $insert->pname =$request->pname;
          $insert->pdescription =$request->pdescription;
          $insert->ptechnology =$request->ptechnology;

          if($request->hasfile('pimage'))
        {
        $destination = 'uploads/images'.$insert->pimage;
        if( File::exists($destination))
            {
                File::delete($destination);
            }

             $file = $request->file('pimage');
             $name = $file->getClientOriginalName();
             //$filename = time().'.'.$extention;
             $file->move('uploads/images',$name);
            
             $insert->pimage = $name;
         }

         $insert ->save();

         return redirect()->route('admin.projects.create')->with('success','Project Created Successfully');


    }

    public function project_detail($id)
    {
        
        return Project::findorFail($id);

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
