<?php

namespace App\Http\Controllers;
use App\Models\santri;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class santriController extends Controller
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
     *
     */
    public function create(Request $request)
    {
        //create new santri
        $santri = new santri();
        $santri->name = $request->input('username');
        $santri->password = $request->input('password');
        $santri->gender = $request->input('gender');
        $santri->email = $request->input('email');
        $santri->save();
        return response()->json($santri);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //post

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function show(santri $santri)
    {
        //get santi
        $santri = santri::all();
        return response()->json($santri);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function edit(santri $santri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, santri $santri, $id)
    {
        //update data
        $santri = santri::find($id);
        $santri->name = $request->input('username');
        $santri->password = $request->input('password');
        $santri->gender = $request->input('gender');
        $santri->email = $request->input('email');
        $santri->save();
        return response()->json($santri);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function delete(santri $santri, $id)
    {
        //delete data 
       $santri= santri::find($id);
       $santri->delete();
        return response()->json('delete success');
    }
}
