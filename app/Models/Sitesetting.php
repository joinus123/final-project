<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitesetting extends Model
{
    use HasFactory;
    protected $table='sitesettings';
    protected $fillable = [
        'site_title',
        'email' ,
        'phone',
        'address',
        'copyrighttext',
        'footertext',
        'header_logo',
        'fav_icon',
        'footer_logo',
    ];
}
