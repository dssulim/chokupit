<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    protected $table = 'catalogs';
    protected $fillable = [
        'name', 'user_id', 'list_data'
    ];
    
    public function user() {
        return $this->belongsTo(User::class);
    }
   
}
