<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    // use HasFactory;
    protected $fillable = ['service_id'];
     public function services() {
        return $this->belongsTo(Service::class,'service_id');
    }
}
