<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSite extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'reason_contact_id', 'message'];

    
}
