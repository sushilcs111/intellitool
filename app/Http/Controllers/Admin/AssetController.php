<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssetController extends Controller
{
  
    public function index() {
    //    $shifts = Shift::orderBy("id", "desc")->paginate(Config('constants.adminPaginateNo'));
        return view(Config('constants.adminPages') . '.asset.index');
    }

    public function addEdit() {
       // $shift = Shift::findOrNew(Input::get('id'));
        return view(Config('constants.adminPages') . '.asset.addEdit');
    }
}
