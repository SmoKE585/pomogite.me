<?php

namespace App\Models\Projects;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Project extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [];
    protected $guarded = [];

}
