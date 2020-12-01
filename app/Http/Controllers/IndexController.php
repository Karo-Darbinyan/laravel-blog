<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param int $id
     * @return void
     */
    public function show(int $id)
    {
//        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

}
