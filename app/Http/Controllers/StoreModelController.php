<?php

namespace App\Http\Controllers;

use App\Http\Resources\StoreModelResource;
use App\Models\StoreModel;
use Illuminate\Http\Request;

class StoreModelController extends Controller
{

    //отображение всех записей
    public function index()
    {
        $storeModels = StoreModel::all(); //получаем записи из базы данных
        return StoreModelResource::collection($storeModels); //возвращаем коллекцию резурсов
    }


    //отображение одной записи по айдишнику
    public function show($id){
        $item = StoreModel::find($id);
        if(!$item){
            return response()->json(['message'=>'Item not found'],404);
        }
        return new StoreModelResource($item);
    }

    //создание ново записи
    public function store(Request $request){
        //валидация входящих данных
        $validatedData = $request->validate([
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|string|email|max:255',
            'type_of_store' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'area_of_the_room' => 'required|integer|max:255',
            'status' => 'required|string|max:255',
        ]);

        //Создание новой записи в базе данных
        $storeModel = StoreModel::create($validatedData);

        //возвращаем созданную запись с кодом 201 (создано)
        return new StoreModelResource($storeModel);
    }

    //Обновление записи
    public function update(Request $request, $id){
        //идёт поиск по ID
        $item = StoreModel::find($id);
        if(!$item){
            return response()->json(['message'=>'Item not found'],404);
        }
        $validatedData = $request->validate([

        ]);
        $item->update($validatedData);
        return response()->json($item);
    }
}
