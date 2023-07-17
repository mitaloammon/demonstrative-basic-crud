<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    protected $table = 'addresses';

    protected $fillable = ['id', 'uf', 'address', 'city', 'country', 'intentionId'];

    protected $guarded = ['id'];

    use HasFactory;
}
