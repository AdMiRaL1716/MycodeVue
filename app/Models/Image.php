<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    public $timestamps = true;

    protected $fillable = [
        'images',
        'id_work',
    ];

    public function work() {
        return $this->belongsTo(Work::class, 'id_work');
    }
}
