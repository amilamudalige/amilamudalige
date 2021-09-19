<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chart_of_account extends Model
{
    use HasFactory;
    public $table="chart_of_account";
    public $timestamps=false;


    protected $fillable = [
        'Account_Name',
        'Account_Cat',
        
    ];
}
