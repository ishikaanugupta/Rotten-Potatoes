<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {

        $user = User::all();
        return $user;
    }

    public function uploadAvatar(Request $request)
    {
    }
}
