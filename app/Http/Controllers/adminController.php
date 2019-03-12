<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminController extends Controller
{
 public function index()
    {
        $titles = DB ::table('test') -> get();
        dump($titles); // collection 정보를 볼 수 있음
        return view('admin.info.information',['titles' =>$titles]);
    }

    public function create()
    {
        return view('admin.match.matching');
    }

    public function store(Request $request)
    {
        //db insert logic..

        return redirect(route('admin.index'));//view('mento.post.store');
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
