<?php
use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 12/12/2558
 * Time: 20:29
 */
class Patients extends Model{
    protected $table = 'patientsdata';

    protected $fillable = ['bp', 'fbs', 'suggestion'];

    public function user()
    {
        return $this->belongsTo('App/User');
    }
}