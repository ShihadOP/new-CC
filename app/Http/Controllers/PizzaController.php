<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\margins;

class PizzaController extends Controller
{
    public function save(Request $request)
    {
        $pizza = new Pizza();
        
        $pizza->base90 = $request->base90;
        $pizza->base90ch = $request->base90ch;
        $pizza->b2b90 = $request->b2b90; 
        $pizza->b2b90ch = $request->b2b90ch;
        $pizza->cust90 = $request->cust90;
        $pizza->cust90ch = $request->cust90ch;
               
        $pizza->base30 = $request->base30;
        $pizza->base30ch = $request->base30ch;
        $pizza->b2b30 = $request->b2b30;
        $pizza->b2b30ch = $request->b2b30ch;
        $pizza->cust30 = $request->cust30;  
        $pizza->cust30ch = $request->cust30ch; 

        $pizza->save();
        return redirect('/');
    }
    function back()
    {
        $pizzas = Pizza::all();        
        return view('back', ['pizzas' => $pizzas]);
    }
    function visarates()
    {
        $pizzas = Pizza::all();    
        $custmargin=margins::all();
        
        return view('visarates', ['pizzas' => $pizzas, 'custmargin' => $custmargin]);
    }
    function margin()
    {
        $pizzas = Pizza::all();
        return view('margin', ['pizzas' => $pizzas]);
    }
    function newuser()
    {
        $pizzas = Pizza::all();
        return view('NewUser', ['pizzas' => $pizzas]);
    }
    function savemargins(Request $request)
    {
        $mar = new margins();
        $mar->B2B_margin = $request->B2B_margin;
        $mar->customer_margin = $request->customer_margin;

        $mar->save();
        return redirect('/');
    }
}
