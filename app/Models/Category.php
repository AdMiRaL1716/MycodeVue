<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'filter',
    ];

    public function works() {
        return $this->hasMany(Work::class, 'id_category');
    }
}
