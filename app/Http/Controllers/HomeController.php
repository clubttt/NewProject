<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 12/12/2558
 * Time: 20:46
 */

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {

    }

}