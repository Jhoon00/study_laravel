<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    protected static $users = [
        ['id'=>1, 'name'=>'고길동', 'birthDate'=>'1999/01/02', 'email'=>'gdgo@gmail.com'],
        ['id'=>2, 'name'=>'홍길동', 'birthDate'=>'1998/06/02', 'email'=>'gdh@gmail.com'],
        ['id'=>3, 'name'=>'박동훈', 'birthDate'=>'1599/05/02', 'email'=>'dhp@gmail.com'],
        ['id'=>4, 'name'=>'박찬호', 'birthDate'=>'1699/02/02', 'email'=>'chp@gmail.com'],
        ['id'=>5, 'name'=>'박문수', 'birthDate'=>'1990/07/02', 'email'=>'msp@gmail.com']
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome', ['users'=>static::$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        return redirect('/users/3');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $userFound = null;
        foreach (static::$users as $user) {
            if ($user["id"] == $id) {
                $userFound = $user;
                break;
            }
        }

        $userFound = $userFound!=null? $userFound : [];
        return view('user_info', ['user'=>$userFound]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $userFound = null;
        for ($i=0; $i < sizeof(static::$users); $i++) {
            if (static::$users[$i]["id"] == $id) {
                $userFound = static::$users[$i];
                break;
            }
        }
        return view('update_form', ['user'=>$userFound]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->input("name");
        $birthDate = $request->input("birthDate");
        $email = $request->input("email");
        $updatedUser = null;

        for ($i=0; $i < sizeof(static::$users); $i++) {
            if (static::$users[$i]["id"] == $id) {
                static::$users[$i]["name"]=$name;
                static::$users[$i]["birthDate"] = $birthDate;
                static::$users[$i]["email"] = $email;
                $updatedUser = static::$users[$i];
                // dd(static::$users[$i]);
                break;
            }
        }
        return redirect('/users/'.$updatedUser['id']);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        for ($i=0; $i < sizeof(static::$users); $i++) {
            if(static::$users[$i]['id']==$id) {
                unset(static::$users[$i]);
            }
        }

        return redirect('/users');
    }
}
