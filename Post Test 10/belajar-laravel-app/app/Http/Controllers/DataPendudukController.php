<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPendudukController extends Controller
{
    public function showFormPenduduk()
    {
        // $menuItems = [
        //     ['id' => 'menu1', 'name' => 'Menu 1', 'harga'
        //     => 12000],
        //     ['id' => 'menu2', 'name' => 'Menu 2', 'harga'
        //     => 15000],
        //     ['id' => 'menu3', 'name' => 'Menu 3', 'harga'
        //     => 13000],
        //     ['id' => 'menu4', 'name' => 'Menu 4', 'harga'
        //     => 10000],
        // ];
        return view('formPenduduk');
    }

    public function submitData(Request $request)
    {
        // dd($request->all());
        $data = [
            'name' => $request->input('name'),
            'NIK' => $request->input('NIK'),
            'provinsi' => $request->input('provinsi'),
            'kota' => $request->input('kota'),
            'telepon' => $request->input('telepon'),
        ];
        return view('dashboardPenduduk', compact(
            'data',
        ));
    }
}
