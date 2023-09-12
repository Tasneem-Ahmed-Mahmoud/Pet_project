<?php

namespace App\Models;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubService extends Model
{
    use HasFactory;
    protected  $fillable=['name','description','service_id','image'];

    public function suppliers(){
        return $this->belongsToMany(Supplier::class,'sub_service_supplier');
    }
}
