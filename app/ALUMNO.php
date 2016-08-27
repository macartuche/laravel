<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ALUMNO extends Model {

    /**
     * Generated
     */

    protected $table = 'ALUMNO';
    protected $fillable = ['ID', 'BECA'];


    public function pERSONA() {
        return $this->belongsTo(\App\Models\PERSONA::class, 'ID', 'ID');
    }

    public function pERSONAs() {
        return $this->belongsToMany(\App\Models\PERSONA::class, 'REPRESENTANTE', 'ALU_ID', 'ID');
    }

    public function mATRICULAs() {
        return $this->hasMany(\App\Models\MATRICULA::class, 'ALUMNO_ID', 'ID');
    }

    public function rEPRESENTANTEs() {
        return $this->hasMany(\App\Models\REPRESENTANTE::class, 'ALU_ID', 'ID');
    }


}
