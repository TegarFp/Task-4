<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Pengunjung;

class Home extends Controller
{
    public function index()
    {
        $pengunjung=Pengunjung::get();
        $data=array(
            'pengunjung'=> $pengunjung

        );
        return view('pengunjung', $data);
    }

    public function store(Request $request)
    {
        $pengunjung=Pengunjung::create($request->all());
        if($pengunjung) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new student success!');
        }
    return redirect('/dashboard');
    }
}
