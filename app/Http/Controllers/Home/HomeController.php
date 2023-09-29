<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use lop DB(su dung data core thuan)
use Illuminate\Support\Facades\DB;

//model data product mvc
use App\Models\Product;

class HomeController extends Controller
{
    private $Products;
    public function __construct() {
        $this->Products = new Product();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //tieu de
        $title = 'trang chu';

        return view('home.index',['title'=>$title]);
    }

    //show all tabel product
    public function showAllProduct(){

        $title = 'san pham';

        $data = Product::orderBy('created_at','desc')->get();

        return view('home.home_showProduct',['title'=>$title,'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
