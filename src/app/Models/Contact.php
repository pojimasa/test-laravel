<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

class Contacts extends Model
{
    use HasFactory;

    protected $fillable = ['content'];
}
