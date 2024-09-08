<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class TechnicModel extends Model
{
    use HasFactory, HasApiTokens;

    protected $table = 'technic_models';

    protected $fillable = [];

    //Автоматическое преобразование в массив и обратно
    protected $casts = [
        'tags' => 'array',
    ];

}
