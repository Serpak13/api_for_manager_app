<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property string name
 * @property json tags
 */

class TechnicModel extends Model
{
    use HasFactory, HasApiTokens;

    protected $table = 'technic_models';

    protected $fillable = [
        'name',
        'tags'
    ];

    //Автоматическое преобразование в массив и обратно
    protected $casts = [
        'tags' => 'array',
    ];

}
