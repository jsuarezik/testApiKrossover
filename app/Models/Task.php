<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Priority;
use User;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'due_date', 'priority_id' , 'creator_id', 'user_assigned_id'
    ];

    protected $table = 'task';

    /**
    * @Relation
    */
    public function priority() {
        return $this->belongsTo(Priority::class);
    }

    /**
    * @Relation
    */
    public function creator(){
        return $this->belongsTo(User::class);
    }

    /**
    * @Relation
    */
    public function assigned_user(){
        return $this->belongsTo(User::class);
    }


}