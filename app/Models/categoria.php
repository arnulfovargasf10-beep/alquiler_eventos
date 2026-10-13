<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Alquiler;
class Categoria extends Authenticatable
{
  use HasFactory, Notifiable;
  
   public function equipos() {
     return $this->belongsTo(Alquiler::class);
   }
};