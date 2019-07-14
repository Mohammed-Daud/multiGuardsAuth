<?php

namespace App\Http\Controllers\Backend\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\ResetsPasswords;

class BkResetPasswordController extends Controller
{
    use ResetsPasswords;

    public function broker()
    {
        return Password::broker('admins'); 
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
