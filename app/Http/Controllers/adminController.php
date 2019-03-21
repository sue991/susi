<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
ㄴ
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
       if($_POST['user_id'] == '') $_POST['user_id'] = '%%';
       if($_POST['name'] == '') $_POST['name'] = '%%';
       if($_POST['email'] == '') $_POST['email'] = '%%';
       if(!isset($_POST['category'])) $_POST['category'] = '%%';

            $users = DB::table('user_info')
            -> where('user_id', 'like', $_POST['user_id'])
            -> where('name', 'like', $_POST['name'])
            -> where('email', 'like', $_POST['email'])
            -> where('category', 'like', $_POST['category'])
            -> get();
            

        
        dump($users);
       
        return view('admin.info.information',['users' => $users]);
    }

    public function edit($id)
    {
        $info = DB::table('user_info') 
        -> where('id',$id)
        ->first();
        
        // $users = DB ::table('user_info') -> get();

        //  dump($info);
         return view('admin.edit',['info' => $info]);
    }

    // public function delete($id){
    //     $info = DB::table('user_info') 
    //     -> where('id',$id)
    //     ->delete();

    //     $users = DB::table('user_info') -> get();


    //     return view('admin.info.information',['users' => $users]);
    // }

    public function update(Request $request, $id)
    {   
        DB::table('user_info')
        -> where('id', $id)
        -> update(
            ['user_id' => $request->input('user_id') , 'name' => $request->input('name'), 'gender' => $request->input('gender'), 'phone_number' => $_POST['phone_number'], 'email' => $_POST['Email'], 'register_date' => $_POST['resigter_date'], 'category' => $_POST['category'], 'situation' => $_POST['situation']]
        );

        $users = DB::table('user_info') -> get();
        dump($users);

        //return view('mento.put.update',['id'=> $id]);

        return redirect(route('admin.index'));
    }

    // public function updates(){
        

    //     return view('admin.info.information',['users' => $users]);
    // }


    public function destroy($id)
    {
        $info = DB::table('user_info') 
        -> where('id', $id)
        ->delete();

        return redirect(route('admin.index'));

        // return view('admin.info.information',['id' => $id]);
    }

};
