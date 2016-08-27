<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MATRICULA extends Model {

    /**
     * Generated
     */

    protected $table = 'MATRICULA';
    protected $fillable = ['ID', 'PARALELO_ID', 'PERIODO_ACADEMICO_ID', 'ALUMNO_ID'];


    public function aLUMNO() {
        return $this->belongsTo(\App\Models\ALUMNO::class, 'ALUMNO_ID', 'ID');
    }

    public function pARALELO() {
        return $this->belongsTo(\App\Models\PARALELO::class, 'PARALELO_ID', 'ID');
    }

    public function pERIODOACADEMICO() {
        return $this->belongsTo(\App\Models\PERIODOACADEMICO::class, 'PERIODO_ACADEMICO_ID', 'ID');
    }

    public function nOTIFICACIONs() {
        return $this->hasMany(\App\Models\NOTIFICACION::class, 'MATRICULA_ID', 'ID');
    }


}
