<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siege extends Model
{
    use HasFactory;
    protected $fillable=['numeroduticket','nombredesiege','numerodusiege','statusdusiege','nomdelagence','matriculedubus'];
}
