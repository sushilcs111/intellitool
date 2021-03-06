<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller {

    //

    public function index() {
        return view(config('constants.adminPages') . '.project.index');
    }

    public function add() {
        return view(config('constants.adminPages') . '.project.add');
    }

    function edit() {
        return view(config('constants.adminPages') . '.project.edit');
    }

}
