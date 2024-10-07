<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'categories_id',
        'product',
        'description',
        'price',
        'stock',
        'image',
    ];
    public function categorie(): BelongsTo
{
        return $this->BelongsTo(categorie::class); // atau jenis relasi yang sesuai
    }
}
