<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reportable extends Model
{
    use HasFactory;

    protected $fillable = [
      'abbreviation',
      'city',
      'conference',
      'division',
      'full_name',
      'name'
    ];
}
