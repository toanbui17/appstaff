<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\Product as ProductResource;
use GuzzleHttp\Handler\Proxy;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $product = Product::all();

        $arr = [
            'status'    => true,
            'message'   => 'da lay san pham thanh cong',
            'data'      => ProductResource::collection($product),
        ];

        return response()->json($arr,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //them moi product
        $request->validate([
            'name_pd'           => 'required|unique:product',
            'quantity_pd'       => 'required',
            'sold_pd'           => 'required',
            'image_pd'          => 'required|image|mimes:jpg,bmp,png',
            'price_pd'          => 'required',
            'describe_pd'       => 'required',  
        ]);
        $filename = rand().'.'.$request->image_pd->extension();
        $request->image_pd->move(public_path('upload'),$filename);

        $product = new Product;

        $product->name_pd       = $request->name_pd;
        $product->quantity_pd   = $request->quantity_pd;
        $product->sold_pd       = $request->sold_pd;
        $product->image_pd      = $filename;
        $product->price_pd      = $request->price_pd;
        $product->describe_pd   = $request->describe_pd;

        $product->save();

        $arr = [
            'status' => true,
            'message' => 'da lu san pham thanh cong',
            'data' => new ProductResource($product),
        ];

        return response()->json($arr,200);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product        = Product::find($id);

        if (is_null($product)) {
            return response()->json('khong co san pham nay');
        }else{
      
            $arr = [
                'status'    => true,
                'message'   => 'da lay san pham thanh cong',
                'data'      => new ProductResource($product),
            ];
    
            return response()->json($arr,200);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $product = Product::find($id);
        $request->validate([
            'name_pd'           => 'required|unique:product',
            'quantity_pd'       => 'required',
            'sold_pd'           => 'required',
            'image_pd'          => 'required|image|mimes:jpg,bmp,png',
            'price_pd'          => 'required',
            'describe_pd'       => 'required',  
        ]);
        $filename   = rand().'.'.$request->image_pd->extension();
        $request->image_pd->move(public_path('upload'),$filename);

        $product->name_pd       = $request->name_pd;
        $product->quantity_pd   = $request->quantity_pd;
        $product->sold_pd       = $request->sold_pd;
        $product->image_pd      = $filename;
        $product->price_pd      = $request->price_pd;
        $product->describe_pd   = $request->describe_pd;

        $product->save();

        $arr = [
            'status'    => true,
            'message'   => 'da luu san pham thanh cong',
            'data'      => ProductResource::collection($product),
        ];

        return response()->json($arr,200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Product::findOrFail($id);
        if($product)
           $product->delete(); 
        else
            return response()->json(401);
        return response()->json('xoa thanh cong',200); 
    }
}
