<?php

namespace App\Models\Projects;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function domain(): HasOne
    {
        return $this->hasOne(ProjectDomain::class);
    }
}
