<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client_newsletter_detail extends Model
{
    use HasFactory;
    protected $fillable=['campaign_id','cn_title','cn_link'];

}
