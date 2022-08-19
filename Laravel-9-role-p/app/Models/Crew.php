<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Crew extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'crew_detals';

     protected $fillable =['first_name',
                     'last_name',
                     'contact_no',
                     'nic_no',
                     'sltb_id',
                     'address',
                     'email',
                     'job_role',
                     'policy_no',
                     'pin_no',
                   ];


}
