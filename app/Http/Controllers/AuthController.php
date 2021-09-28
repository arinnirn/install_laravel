<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return
            [
                "NIS" => 3103119181,
                "Name" => "Sri setya Rini",
                "Phone" => 6281226044701,
                "Class" => "XII RPL 6"
            ];
    }
}
