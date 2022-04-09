<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    const ID = 'id';
    const NAME = 'name';
    const IMAGE = 'image';
    const USER_ID = 'user_id';

    protected $primaryKey = self::ID;
    protected $table = 'categories';

    protected $fillable = [
        self::NAME,
        self::IMAGE,
        self::USER_ID
    ];
}
