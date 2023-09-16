<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//usre models product mvc
use App\Models\Product;

//use form request product
//use App\Http\Requests\Admin\ProductRequest;

use Carbon\Carbon;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //ten trang
        $title = 'product';

        //lay het data produc
        $data = Product::where('id', '>', '0')
        ->orderBy('created_at','desc')
        ->limit(10)
        ->get();

        return view('product.index',['data'=>$data,'title'=>$title]);
    }

    //select name product
    public function getName(Request $request){

        $title = 'produc '.$request->all()['key_word'];

        $name = $request->all()['key_word'];
        $dataName = Product::where('name_pd','like',"%$name%")->orderBy('created_at','desc')->get();
        return view('home.home_nameProduct',['title'=>$title,'dataName'=>$dataName]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //ten trang
        $title = 'add_product';
        //get add product
        return view('form.product.form_add',['title'=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file               = $request->image_pd;
        $filename           = 'company-logo-' . time() . '.' . $file->getClientOriginalExtension();
        //$path = $file->storeAs('public/uload', $filename);
        //Lưu file vào thư mục public/upload/
		$destinationPath    = public_path('/upload');
		$file->move($destinationPath, $filename);

        $request->validate([
            'name_pd'           => 'required|unique:product',
            'quantity_pd'       => 'required',
            'sold_pd'           => 'required',
            'image_pd'          => 'image|mimes:jpg,bmp,png',
            'price_pd'          => 'required',
            'describe_pd'       => 'required',
        ]);

        $product = new Product;

        $product->name_pd       = $request->name_pd;
        $product->quantity_pd   = $request->quantity_pd;
        $product->sold_pd       = $request->sold_pd;
        $product->image_pd      = $filename;
        $product->price_pd      = $request->price_pd;
        $product->describe_pd   = $request->describe_pd;

        $product->save();

        return redirect()->route('product');
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
    public function edit($id)
    {
        ////ten trang
        $title = 'edit_product';

        if (!empty($id)) {
            $dataId = Product::find($id);
            dd($dataId);
            die;
            //kiem tra con ton tai khong
            if (!empty($dataId[$id])) {
                $dataId = $dataId[$id];
            }else{
                return redirect()->route('product')->with('msg','san pham khong ton tai');
            }
        }else{    
            return redirect()->route('product')->with('msg','san pham khong ton tai');
        }
        //get add product
        //return view('form.product.form_edit',['title'=>$title,'dataId'=>$dataId]);
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
        //xoa product
        Product::deleteProduct($id);
        return redirect()->route('product')->with('msg','san pham da xoa');
    }
    
}
