<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    //protected $primaryKey = 'id';
    public $incrementing = TRUE;
    public $timestamps = TRUE;
    //protected $timestamps = FALSE;
    protected $fillable = ['name', 'text'];
}
