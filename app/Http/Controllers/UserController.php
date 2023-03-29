<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id = null){
        return view('users.show', [
            'username' => $id
        ]);
    }

    public function list(){
        $users = [
            'sanjar1',
            'sanjar2',
            'sanjar3',
            'sanjar4',
            'sanjar5',
            'sanjar6'
        ];
        return view('users.list', compact('users'));
    }

}
