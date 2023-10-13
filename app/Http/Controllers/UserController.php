<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function test() : View {
        return view('welcome');
    }

    public function create() : View {
        return view('register_form');
    }

    public function edit() : View {
        return view('update_form');
    }

    public function index() :View {
        return view('list');
    }

    public function store(Request $req) : View {
        $name = $req->name;
        $email = $req->email;
        $birthDate = $req->birthDate;
        $organization = $req->organization;

        return view('register', ['name' => $name, 'email' => $email, 'birthDate' => $birthDate, 'organization' => $organization]);
    }

    public function update(Request $req) : View {
        $name = $req->name;
        $email = $req->email;
        $birthDate = $req->birthDate;
        $organization = $req->organization;

        return view('update', ['name' => $name, 'email' => $email, 'birthDate' => $birthDate, 'organization' => $organization]);
    }

    public function destroy(Request $req) {
        $name = $req->name;

        return view('remove', ["name" => $name]);
    }
};
