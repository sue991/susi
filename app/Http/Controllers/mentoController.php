<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mentoController extends Controller
{
 public function index()
    {
        return view('mento.get.index');
    }

    public function create()
    {
        return view('mento.get.create');
    }

    public function store(Request $request)
    {
        return view('mento.post.store');
    }

    public function show($id)
    {
        return view('mento.get.show',['id'=> $id]);
    }

    public function edit($id)
    {
        return view('mento.get.edit',['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        return view('mento.put.update',['id'=> $id]);
    }

    public function destroy($id)
    {
        return view('mento.delete.destroy',['id' => $id]);
    }

}
