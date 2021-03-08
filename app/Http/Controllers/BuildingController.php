<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function roomNumber($room)
    {
        return "部屋番号は" . $room . "です";
    }
}
