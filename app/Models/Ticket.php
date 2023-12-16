<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable=['numeroduticket','nombredesiege','numerodusiege','nometprenom',
                        'nomdelagence','matricule','prix','date','destination','depart',
                        'numerodetelephone'];

}
