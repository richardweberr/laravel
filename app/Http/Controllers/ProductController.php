<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

require('catalog.php');

class ProductController extends Controller
{

    public function index()
    {


    }

    public function create()
    {


    }

    public function store()
    {


    }

    public function show($id)
    {
        $products = app\Product::find($id);

        return view('product', ['product' => $products]);
    }

    public function edit()
    {

    }

    public function update()
    {


    }

    public function destroy()
    {


    }

}


