<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    protected $table = 'articles';
    //protected $primaryKey = 'id';
    public $incrementing = TRUE;
    public $timestamps = TRUE;
    //protected $timestamps = FALSE;
    protected $fillable = ['name', 'text'];
    protected $guarded = ['*'];
    protected $dates = ['deleted_at'];

    //Attribute Casting
    //The $casts
    protected $casts = [
        'name' => 'boolean',
        'text' => 'array',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    /*public function getNameAttribute($value){
        return 'Hello World - '.$value.' - Hello World';
    }

    public function setNameAttribute($value){
        // kod..
        $this->attributes['name'] = ' | '.$value.' | ';
    }*/
}
