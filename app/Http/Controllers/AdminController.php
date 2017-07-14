<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
    }

//    插入单条数据
    public function index(Request $request){

         $admin = new Admin();
        $password = md5('123456');
         $arr=[
             'uname'=>'xiaoke',
             'email'=>'14596786@qq.com',
             'password'=>$password
         ];
//         保存数据
        $a= $admin->fill($arr)->save();
         if ($a){
             echo $a;
         }
    }

//批量插入数据的另外一种方式
    public function add(){
        factory(Admin::class,20)->create()->each(function ($u){
             $arr=[
                'uname'=>$u['uname'],
                'email'=>$u['email'],
                'password'=>$u['password']
            ];
        });
    }
}
