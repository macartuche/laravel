<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NOTIFICACION extends Model {

    /**
     * Generated
     */

    protected $table = 'NOTIFICACION';
    protected $fillable = ['ID', 'MATRICULA_ID', 'FECHACREACION', 'FECHALECTURA'];


    public function mATRICULA() {
        return $this->belongsTo(\App\Models\MATRICULA::class, 'MATRICULA_ID', 'ID');
    }


}
