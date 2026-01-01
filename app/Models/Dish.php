<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    // On force Laravel à utiliser ton nom de table exact
    protected $table = 'dishes';

    // Si ta table n'a pas les colonnes created_at et updated_at (par défaut dans Laravel)
    public $timestamps = false;
}
