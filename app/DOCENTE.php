<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DOCENTE extends Model {

    /**
     * Generated
     */

    protected $table = 'DOCENTE';
    protected $fillable = ['ID', 'HORASTRABAJO'];


    public function pERSONA() {
        return $this->belongsTo(\App\Models\PERSONA::class, 'ID', 'ID');
    }

    public function dISTRIBUTIVODOCENTEs() {
        return $this->hasMany(\App\Models\DISTRIBUTIVODOCENTE::class, 'DOC_ID', 'ID');
    }


}
