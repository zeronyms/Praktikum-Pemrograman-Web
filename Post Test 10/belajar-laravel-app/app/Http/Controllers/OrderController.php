<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showFormPesan()
    {
        $menuItems = [
            ['id' => 'menu1', 'name' => 'Menu 1', 'harga'
            => 12000],
            ['id' => 'menu2', 'name' => 'Menu 2', 'harga'
            => 15000],
            ['id' => 'menu3', 'name' => 'Menu 3', 'harga'
            => 13000],
            ['id' => 'menu4', 'name' => 'Menu 4', 'harga'
            => 10000],
        ];
        return view('pesan', compact('menuItems'));
    }
    public function submitOrder(Request $request)
    {
        $menuItems = [
            'menu1' => ['name' => 'Menu 1', 'harga' =>
            12000],
            'menu2' => ['name' => 'Menu 2', 'harga' =>
            15000],
            'menu3' => ['name' => 'Menu 3', 'harga' =>
            13000],
            'menu4' => ['name' => 'Menu 4', 'harga' =>
            10000],
        ];
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'pesan' => $request->input('pesan'),
            'menuItems' => $menuItems,
        ];
        $total = 0;
        foreach ($data['pesan'] as $itemId => $quantity) {
            $total += $quantity *
                $menuItems[$itemId]['harga'];
        }
        $data['total'] = $total;
        return view('dashboardKasir', compact(
            'data',
            'menuItems'
        ));
    }
}
