<?php

namespace App\Controllers;

class MataKuliah extends BaseController
{
    public function rpl()
    {
        return view('mata_kuliah/rpl');
    }

    public function sim()
    {
        return view('mata_kuliah/sim');
    }

    public function mbd()
    {
        return view('mata_kuliah/mbd');
    }

    public function mp_si()
    {
        return view('mata_kuliah/mp_si');
    }

    public function pemweb2()
    {
        return view('mata_kuliah/pemweb2');
    }

    public function visdat()
    {
        return view('mata_kuliah/visdat');
    }
}
