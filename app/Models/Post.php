<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Emadadly\LaravelUuid\Uuids;

class Post extends Model {
    use Uuids;
    use HasFactory;

    protected $primaryKey = 'id'; // or null

    public $incrementing = false;
}
