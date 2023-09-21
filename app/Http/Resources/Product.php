<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    // public function toArray(Request $request): array
    // {
    //     return parent::toArray($request);
    // }

    //dinh nghia data tra ve
    public function toArray(Request $request)
    {
        return [
            'id'            =>$this->id,
            'tenSp'         =>$this->name_pd,
            'sanphamcon'    =>$this->quantity_pd,
            'sanphadaban'   =>$this->sold_pd,
            'anhSp'         =>$this->image_pd,
            'giaSp'         =>$this->price_pd,
            'motaSp'        =>$this->describe_pd,
            'created_at'    =>$this->created_at,
            'updated_at'    =>$this->updated_at,
        ];
    }
}
