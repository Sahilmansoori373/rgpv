<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    
    protected $table = 'subjects';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'code', 'semester'];

    public function notes(){
        return $this->hasOne(Notes::class,'id');
    }
}
