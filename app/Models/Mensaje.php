<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Mensaje extends Model
{
    protected $table = 'mensaje'; // Nombre de la tabla en la base de datos
    protected $fillable = ['nombre', 'telefono', 'mail','mensaje','fecha']; // Lista de campos rellenables
    public $timestamps = false;
    const CREATED_AT = 'fecha';

    use HasFactory;
    
    protected function nombre(): Attribute{

        return new Attribute(
            set: function($value){
                return strtolower($value);
            }
        );
    }

    protected function mensaje(): Attribute{

        return new Attribute(
            set: function($value){
                return strtolower($value);
            }
        );
    }

    protected function mail(): Attribute{

        return new Attribute(
            set: function($value){
                return strtolower($value);
            }
        );
    }

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->fecha = now();
        });
    }
}
