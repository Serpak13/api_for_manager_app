<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreModelRequest;
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

    //создание новой записи
    public function store(StoreModelRequest $request){
        //валидация входящих данных
        $validatedData = $request->validated();

        //Создание новой записи в базе данных
        $storeModel = StoreModel::create($validatedData);

        //возвращаем созданную запись с кодом 201 (создано)
        return new StoreModelResource($storeModel);
    }

    //Обновление записи
    public function update(StoreModelRequest $request, $id){
        //идёт поиск по ID
        $item = StoreModel::find($id);
        if(!$item){
            return response()->json(['message'=>'Item not found'],404);
        }
        //получение валидированных данных из реквеста
        $validatedData = $request->validated();
        //Обновление записи
        $item->update($validatedData);
        //Возвращение обновлённой записи
        return response()->json($item);
    }


    //Удаление записи
    public function destroy($id){
        $item = StoreModel::find($id);
        if(!$item){
            return response()->json(['message'=>'Item not found'],404);
        }
        $item->delete();
        return response()->json(['message'=>'Item deleted'],200);
    }
}
