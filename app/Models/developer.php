<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class developer extends Model
{
    use HasFactory;
    function developer_skill(){
        return $this->belongsTo(developer_skill::class,'developer_id');
    }
}
