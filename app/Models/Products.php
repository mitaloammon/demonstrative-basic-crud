<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    protected $table = 'products_list';

    protected $fillable = ['id', 'title', 'price', 'category', 'description', 'image', 'intentionId'];

    protected $guarded = ['id'];


    public function intention(): HasMany
    {
        return $this->hasMany(Intention::class, 'product_id', 'id');
    }

    use HasFactory;
}
