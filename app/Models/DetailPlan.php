<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPlan extends Model
{
    protected $table = 'details_plan';

    protected $fillable = ['name'];

    //relacionamento um para muitos
    public function plan()
    {
        $this->belongsTo(Plan::class);
    }
    //use HasFactory;
}
