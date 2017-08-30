<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\SubCategory;
use App\Category;

class CreateeventController extends Controller
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
        $catgs = Category::all();
        $data=array();
        foreach ($catgs as $flight) {
            $id = $flight->id;
            $data[$id]['id'] =  $id;
            $data[$id]['name'] =  $flight->name;
            $data[$id]['value'] =  $flight->value;
        }
//        print_r(array("category"=>$data));exit;
//        $this->data = $data;
//        $subcatgs = SubCategory::all();
//        exit;
        return view('create_event',array("category"=>$data));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         print_r($request->all());exit;
         $create = Event::create($request->all());
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
