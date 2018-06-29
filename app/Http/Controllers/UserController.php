<?php

namespace App\Http\Controllers;

use App\Jobs\UserTestJob;
use App\Test;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     * @author LaravelAcademy.org
     */
    public function show($id)
    {
//        dd(User::findOrFail($id));
//        dd(User::all());
//        $test = new Test();
//        $test->key = 'Scout是什么';
//        $test->value = 'Scout是Laravel官方提供的全文搜索解决方案';
//        $test->save();
        $posts = Test::search('方案')->raw();
        dd($posts);
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
    public function quote(){
//        dispatch((new UserTestJob())->onQueue('user_quote'));
        UserTestJob::dispatch(new UserTestJob());
        return 'quote ok';
    }
}
