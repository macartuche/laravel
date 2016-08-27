<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PERSONA extends Model {

    /**
     * Generated
     */

    protected $table = 'PERSONA';
    protected $fillable = ['ID', 'USUARIO_ID', 'NOMBRES', 'APELLIDOS', 'NOMBRECOMPLETO', 'FECHANACIMIENTO'];


    public function uSUARIO() {
        return $this->belongsTo(\App\Models\USUARIO::class, 'USUARIO_ID', 'ID');
    }

    public function aLUMNOs() {
        return $this->belongsToMany(\App\Models\ALUMNO::class, 'REPRESENTANTE', 'ID', 'ALU_ID');
    }

    public function aLUMNO() {
        return $this->hasOne(\App\Models\ALUMNO::class, 'ID', 'ID');
    }

    public function dOCENTE() {
        return $this->hasOne(\App\Models\DOCENTE::class, 'ID', 'ID');
    }

    public function rEPRESENTANTE() {
        return $this->hasOne(\App\Models\REPRESENTANTE::class, 'ID', 'ID');
    }


}
