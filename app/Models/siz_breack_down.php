<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siz_breack_down extends Model
{
    public $table="s_date";
    use HasFactory;

    protected $fillable = [
        'Account_Name',
        'Account_Cat',
        
    ];
    
}
