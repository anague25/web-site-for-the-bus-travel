<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable =["nometprenom",
                          "numerodetelephone",
                          "numeroduticket",
                          "matricule",
                          "position",
						  "destination",
						  "numerodusiege"];
}
