<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;

class BlockController extends Controller
{
    public function block(Session $session){
        $session->block();
        return response(null, 201);
    }

    public function unblock(Session $session){
        $session->unblock();
        return response(null, 201);
    }
}
