<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'gallery';

    protected $fillable = [
        'id',
        'ext',
        'size_image',
        'id_producto',
        'created_at',
        'updated_at',
    ];
    public function producto()
    {
        return $this->belongsTo('App\Models\Producto', 'id_producto', 'id');
    }
}
