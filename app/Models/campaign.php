<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class campaign extends Model
{
    use HasFactory;
    protected $fillable=['campaign_number','campaign_name','client_name','campaign_status','campaign_status_message'];
}
