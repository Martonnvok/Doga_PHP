<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $primaryKey = 'invitation_id'; 

    protected $fillable = [ 
        'appeared', 
        'user_id', 
        'event_id', 

    ]; 

}
