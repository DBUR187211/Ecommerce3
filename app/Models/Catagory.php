<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;
    protected $fillable=[
        'Name',
    ];
public function products()
{
    return $this ->hasmany(product::class);
}
}
