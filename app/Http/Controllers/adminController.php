<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminController extends Controller
{
 public function index()
    {
       
        $users = DB::table('user_info') -> get();
        dump($users);
       
        return view('admin.info.information',['users' => $users]);

    }

    public function create()
    {
        
        $cnt = DB::table('user_info')->count();
        
        DB::table('user_info')->insert(
            ['id' => (int)$cnt + 1  ,'gender' => $_GET['gender'], 'phone_number' => $_GET['mobile'], 'email' => $_GET['email'],'register_date' => $_GET['birth'] , 'name' => $_GET['name']]
        );

        $users = DB::table('user_info') -> get();
        dump($users);

        return view('admin.info.information',['users' => $users]);

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
        $info = DB::table('user_info') 
        -> where('id',$id)
        ->get();
        
        // $users = DB ::table('user_info') -> get();

         dump($info);
         return view('admin.edit',['info' => $info]);
    }

    public function delete($id){
        $info = DB::table('user_info') 
        -> where('id',$id)
        ->delete();

        $users = DB::table('user_info') -> get();


        return view('admin.info.information',['users' => $users]);
    }

    public function update(Request $request, $id)
    {   
        return view('mento.put.update',['id'=> $id]);
    }

    public function updates(){
        DB::table('user_info')
        -> where('id',$_GET['id'])
        -> update(
            ['user_id' => $_GET['user_id'] , 'name' => $_GET['name'], 'gender' => $_GET['gender'], 'phone_number' => $_GET['phone_number'], 'email' => $_GET['Email'], 'register_date' => $_GET['resigter_date'], 'category' => $_GET['category'], 'situation' => $_GET['situation']]
        );

        $users = DB::table('user_info') -> get();
        dump($users);

        return view('admin.info.information',['users' => $users]);
    }


    public function destroy($id)
    {
        DB::table('users')->where('id', '=', $id)->delete();
        return view('admin.info.information',['id' => $id]);
    }

};
