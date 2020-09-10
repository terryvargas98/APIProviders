<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
public function show(){

    BD::table('user')->intovalues('terry','123');
}
}
