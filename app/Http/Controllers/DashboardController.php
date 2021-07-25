<?php


namespace App\Http\Controllers;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        //TODO 체이닝 only() except()
        $this->middleware('admin-auth')
            ->only('editUsers');
        $this->middleware('team-member')
            ->except('editUsers');
    }
}
