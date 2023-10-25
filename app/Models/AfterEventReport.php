<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AfterEventReport extends Model
{
    use HasFactory;

    protected $fillable
        = [
            'title',
            'op_leader',
            'op_date',
            'op_summary',
            'op_went_well',
            'op_can_be_improved',
            'op_cover_img',
            'author'
        ];
}
