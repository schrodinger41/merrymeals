<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_id',
        'menu_title',
        'menu_description',
        'menu_image',
    ];

    public function partners(){
        return $this->belongsTo(Partner::class, 'partner_id', 'id');
    }
}
