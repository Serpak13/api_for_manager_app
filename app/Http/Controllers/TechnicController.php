<?php

namespace App\Http\Controllers;

use App\Http\Resources\TechnicResource;
use App\Models\TechnicModel;
use Illuminate\Http\Request;

class TechnicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technicModels = TechnicModel::all(); //Получение записи из базы данных
        return TechnicResource::collection($technicModels); //возват коллекции ресурсов, в том виде, который прописан в  TechnicResource
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

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
    public function show($id)
    {
        $item = TechnicModel::find($id);
        if(!$item){
            return response()->json(['message' => 'Technic not found'], 404);
        }
        return new TechnicResource($item);
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
