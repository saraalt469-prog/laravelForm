<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['title', 'body', 'priority'];
}
// $fillable использовать безопаснее потому что в post запросе принимаются только 
// заданные нами поля, 
// когда через Note::create($request->all()) 
// можно создать любое поле и задать допустим права администратора