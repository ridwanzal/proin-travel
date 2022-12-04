<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $fillable = ['email', 'name', 'company_name', 'country', 'needs', 'qty', 'subject', 'message'];
}
