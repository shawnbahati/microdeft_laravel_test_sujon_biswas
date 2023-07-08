<?php

namespace App\Http\Controllers;

use App\Models\developer;
// use App\Models\developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=developer::all();
        return view('developer.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('developer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'designation'=>'required',
        ]);

        $data=new developer;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->designation=$request->designation;
        $data->save();

        return redirect('developer/create')->with('success','Data has been added.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=developer::find($id);
        return view('developer.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=developer::find($id);
        return view('developer.edit',compact('data'));
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
        $data=developer::find($id);
        $data->name=$request->name;
        $data->detail=$request->detail;
        $data->email=$request->email;
        $data->designation=$request->designation;
        $data->save();
        return redirect('developer/'.$id.'/edit')->with('success','Data has been updated.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        developer::where('id',$id)->delete();
       return redirect('developer/index')->with('success','Data has been deleted.');
    }

}

