<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
/**
 * @property string userName
 * @property string userEmail
 * @property string typeOfStore
 * @property string location
 * @property string address
 * @property string phoneNumber
 * @property integer areaOfTheRoom
 * @property string status
 */
class StoreModel extends Model
{
    use HasFactory, HasApiTokens;
    protected $table = 'store_models';
    public $incrementing = false;

    protected $fillable = [
        'user_name',
        'user_email',
        'type_of_store',
        'location',
        'address',
        'phone_number',
        'area_of_the_room',
        'status'
    ];

    //protected $hidden = [];
}
