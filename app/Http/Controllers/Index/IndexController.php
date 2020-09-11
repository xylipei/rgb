<?php


namespace App\Http\Controllers\Index;


use App\Http\Controllers\AdminController;

class IndexController extends AdminController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index.index');
    }
}
