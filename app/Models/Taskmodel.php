<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taskmodel extends Model
{
    use HasFactory;
    protected $table='task';
    protected $primarykey='id';
    protected $fillable=['title','description','due_date'];
}
