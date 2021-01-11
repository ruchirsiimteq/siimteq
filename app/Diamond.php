<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Attribute;

class Diamond extends Model
{
    protected $table = 'diamonds'; 
    protected $primaryKey = 'diamond_id';

    
    public $timestamps = false;
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }

    public function shape(){
        return $this->hasOne(Attribute::class,'attribute_id','diamond_shape_id');
    }

    public function lab(){
        return $this->hasOne(Attribute::class,'attribute_id','diamond_lab_id');
    }

    public function clr(){
        return $this->hasOne(Attribute::class,'attribute_id','diamond_clr_id');
    }

    public function cla(){
        return $this->hasOne(Attribute::class,'attribute_id','diamond_cla_id');
    }

}
