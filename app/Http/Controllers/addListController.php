<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddList;

class addListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AddList::get();
        // return $data;
        return view('addList', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index');
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
            'email'=>'required|email',
            'pass'=>'required',
            'position'=>'required',
            'salary'=>'required',
        ]);
        // dd($request->all());
       $name = $request->name;
       $email = $request->email;
       $pass = $request->pass;
       $position = $request->position;
       $salary = $request->salary;

      $stu = new AddList();
      $stu->name= $name;
      $stu->email= $email;
      $stu->password= $pass;
      $stu->position= $position;
      $stu->salary= $salary;
      $stu->save();

       return redirect()->back()->with('success','Add to list success');
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
        $data = AddList::where('id','=',$id)->first();
          return view('editList',compact('data'));
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
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'pass'=>'required',
            'position'=>'required',
            'salary'=>'required',
        ]);
       $id = $request->id;
       $name = $request->name;
       $email = $request->email;
       $pass = $request->pass;
       $position = $request->position;
       $salary = $request->salary;

       AddList::where('id', '=', $id)->update([
         'name' => $name,
         'email' => $email,
         'password'=> $pass,
         'position'=>$position,
         'salary' => $salary,
       ]);
       return redirect()->back()->with('success','Update to list success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AddList::where('id','=',$id)->delete();
       return redirect()->back()->with('success','Delete success from list');

    }
}
