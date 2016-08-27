<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PERIODOACADEMICO extends Model {

    /**
     * Generated
     */

    protected $table = 'PERIODOACADEMICO';
    protected $fillable = ['ID', 'NOMBRE', 'CODIGO', 'FECHA_INICIO', 'FECHA_FIN'];


    public function mATRICULAs() {
        return $this->hasMany(\App\Models\MATRICULA::class, 'PERIODO_ACADEMICO_ID', 'ID');
    }


}
