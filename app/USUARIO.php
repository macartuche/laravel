<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class USUARIO extends Model {

    /**
     * Generated
     */

    protected $table = 'USUARIO';
    protected $fillable = ['ID', 'ROL_ID', 'PASSWORD', 'ACTIVO'];


    public function rOL() {
        return $this->belongsTo(\App\Models\ROL::class, 'ROL_ID', 'ID');
    }

    public function pERSONAs() {
        return $this->hasMany(\App\Models\PERSONA::class, 'USUARIO_ID', 'ID');
    }


}
