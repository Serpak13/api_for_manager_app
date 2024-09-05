<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreModelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    //Настройка структуры JSON ответ
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'user_name'=>$this->user_name,
            'user_email'=>$this->user_email,
            'type_of_store'=>$this->type_of_store,
            'location'=>$this->location,
            'address'=>$this->address,
            'phone_number'=>$this->phone_number,
            'area_of_the_room'=>$this->area_of_the_room,
            'status'=>$this->status,
            //'created_at'=>$this->created_at,
           // 'updated_at'=>$this->updated_at
        ];
    }
}
