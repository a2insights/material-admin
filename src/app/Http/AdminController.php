<?php

namespace MaterialAdmin\app\Http\Controllers;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(config('material.middleware'));
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('material::index')
            ->with(
                [
                    'page' =>(object)
                    [
                        'name' => 'Admin'
                    ]
                ]
            );
    }
}
