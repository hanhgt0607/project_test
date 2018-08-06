<?php
/**
 * Created by PhpStorm.
 * User: ngova
 * Date: 8/6/2018
 * Time: 5:06 PM
 */

namespace App\Http\Controllers;


use App\apartments;

class ApartmentsController
{
    function list(){
        $list_obj = apartments::all();
        return view('apartment.list') -> with('list_obj', $list_obj);
    }

    function create()
    {
        return view('apartment.form');
    }

    function store()
    {
        $obj = new apartments();
        $obj->name = Input::get('name');
        $obj->address = Input::get('address');
        $obj->price = Input::get('price');
        $obj->price = Input::get('general_information');
        $obj->price = Input::get('details');
        $obj->image = Input::get('image');
        $obj->save();
        return redirect('/apartment/list');
    }

    function edit($id){

    }

    function update($id)
    {
    }
}