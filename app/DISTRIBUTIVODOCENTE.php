<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DISTRIBUTIVODOCENTE extends Model {

    /**
     * Generated
     */

    protected $table = 'DISTRIBUTIVODOCENTE';
    protected $fillable = ['ID', 'PARALELO_ID', 'MATERIA_ID', 'DOC_ID'];


    public function dOCENTE() {
        return $this->belongsTo(\App\Models\DOCENTE::class, 'DOC_ID', 'ID');
    }

    public function mATERIUM() {
        return $this->belongsTo(\App\Models\MATERIUM::class, 'MATERIA_ID', 'ID');
    }

    public function pARALELO() {
        return $this->belongsTo(\App\Models\PARALELO::class, 'PARALELO_ID', 'ID');
    }


}
