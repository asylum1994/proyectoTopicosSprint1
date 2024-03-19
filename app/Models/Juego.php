<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Juego
 *
 * @property $id
 * @property $nombre
 * @property $monto
 * @property $fecha_ini
 * @property $fecha_fin
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Juego extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'monto', 'fecha_ini', 'fecha_fin'];



}
