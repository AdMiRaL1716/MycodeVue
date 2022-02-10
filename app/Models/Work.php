<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $table = 'works';

    public $timestamps = true;

    protected $fillable = [
        'cover',
        'name',
        'description',
        'client',
        'link',
        'id_category',
    ];

    public function images() {
        return $this->hasMany(Image::class, 'id_work');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'id_category');
    }
}
