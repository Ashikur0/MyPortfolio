<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use File;


class ExperiencesPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        
        $list_experiences = Experience::Orderby('id','desc')->paginate(5);
        return view ('admin pages.list_experiences',compact('list_experiences'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin pages.add_experience');
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
            'company' => 'required|string',
            'position' => 'required|string',
            'period' => 'required|string',
            'jdescription' => 'required|string',
            'company_logo' => 'required|mimes:png,jpg,jpeg,gif',
          ]) ;

          $insert = new Experience;

          $insert->company_name =$request->company;
          $insert->position =$request->position;
          $insert->period =$request->period;
          $insert->jdescription =$request->jdescription;

          if($request->hasfile('company_logo'))
        {
        $destination = 'uploads/logos'.$insert->company_logo;
        if( File::exists($destination))
            {
                File::delete($destination);
            }

             $file = $request->file('company_logo');
             $name = $file->getClientOriginalName();
             //$filename = time().'.'.$extention;
             $file->move('uploads/logos',$name);
            
             $insert->company_logo = $name;
         }

         $insert ->save();

         return redirect()->route('admin.experiences.list')->with('success','Experience Created Successfully');

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
        
      $edit_experience = Experience::find($id);
      return view ('admin pages.edit_experience',compact('edit_experience'));

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
            'company' => 'required|string',
            'position' => 'required|string',
            'period' => 'required|string',
            'jdescription' => 'required|string',
            'company_logo' => 'required|mimes:png,jpg,jpeg,gif',
          ]) ;

          $update =Experience::find($id);

          $update->company_name =$request->company;
          $update->position =$request->position;
          $update->period =$request->period;
          $update->jdescription =$request->jdescription;

          if($request->hasfile('company_logo'))
        {
        $destination = 'uploads/logos'.$update->company_logo;
        if( File::exists($destination))
            {
                File::delete($destination);
            }

             $file = $request->file('company_logo');
             $name = $file->getClientOriginalName();
             //$filename = time().'.'.$extention;
             $file->move('uploads/logos',$name);
            
             $update->company_logo = $name;
         }

         $update ->save();

         return redirect()->route('admin.experiences.list')->with('success','Experience Updated Successfully');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $delete = Experience::find($id);
        $delete ->delete();

        return redirect()->route('admin.experiences.list')->with('success','Experience Deleted Successfully');

    }
}
