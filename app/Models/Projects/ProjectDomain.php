<?php

namespace App\Models\Projects;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProjectDomain extends Model
{
    use HasFactory;

    protected $fillable = [
        'domain',
        'project_id',
        'external',
    ];

    protected $table = 'project_domain';

}
