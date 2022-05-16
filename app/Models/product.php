<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'unit',
        'quantity',
        'price',
    ];
public function Catagories()
{
return  $this->belonsTo(Catagory::class);
}
 }
