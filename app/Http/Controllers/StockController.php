<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\User;

use Illuminate\Http\Request;

class StockController extends Controller
{
       public function stock(Request $request)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        //     // 'phone' => ['required', 'string', 'lowercase', 'phone', 'max:255', 'unique:'.User::class],
        //     // 'address' => ['required', 'string', 'lowercase', 'adress', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        $stock = Stock::create([
            'Product_Name' => $request->Product_Name,
            'Product_Type' => $request->Product_Type,
            'Quantity' => $request->Quantity,
            'Description' => $request->Description,
            'price' => $request->price,
            'Stock_Owner' => $request->user()->name,
        ]);



    }
}
