<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // tábla tulajdonság
    protected $table = 'cars'; // ha különbözik az osztály névtől
    protected $primaryKey = 'id';

    public $timestamps = true; // false nem használom

    //  php artisan make:controller CarsController --resource
}
