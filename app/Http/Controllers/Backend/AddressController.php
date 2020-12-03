<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    public function districts($id)
    {
        echo json_encode(DB::table('districts')->where('parent_code', $id)->get());
    }

    public function wards($id)
    {
        echo json_encode(DB::table('wards')->where('parent_code', $id)->get());
    }
}
