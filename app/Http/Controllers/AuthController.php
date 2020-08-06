<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller {
    
    public function me() {
        return [
            "nis" => 3103118110,
            "name" => "Pramadika Nai=ubal Setiawan",
            "gender" => "Laki-laki",
            "phone" => 6288997766,
            "class" => "XII RPL 4"
        ];
    }
}