<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{
    use HasFactory;

    protected $fillable = ['attendance_id', 'rest_start_time', 'rest_end_time'];

    // public function getTotal(){
    //     return 'ID'.$this->id . ':' . $this->title;
    // }
}
