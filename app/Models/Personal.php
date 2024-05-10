<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $fillable =['name','last_name','age','birthdate','CI','sex','email','emergency_contac','positions_id'];
    public function positions(){
        return $this->belongsTo(position::class, 'positions_id');
    }
}
