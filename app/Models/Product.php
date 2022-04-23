<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    const ID = 'id';
    const NAME = 'name';
    const IMAGE = 'image';
    const CATEGORY_ID = 'category_id';

    protected $primaryKey = self::ID;
    protected $table = 'products';

    protected $fillable = [
        self::NAME,
        self::IMAGE,
        self::CATEGORY_ID
    ];
}
