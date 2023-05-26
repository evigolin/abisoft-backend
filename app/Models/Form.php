<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Form extends Model
{
    use Notifiable, HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'forms';

    protected $fillable = [
    	"nameComplete",
        "age",
        "birthdate",
        "registrationDate",
        "cost"
    ];
}
