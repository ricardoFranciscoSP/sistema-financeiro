<?php

namespace SisFin\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class BancoRepository extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];

}