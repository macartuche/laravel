<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MATERIUM extends Model {

    /**
     * Generated
     */

    protected $table = 'MATERIA';
    protected $fillable = ['ID', 'NOMBRE', 'CODIGO', 'DESCRIPCION'];


    public function dISTRIBUTIVODOCENTEs() {
        return $this->hasMany(\App\Models\DISTRIBUTIVODOCENTE::class, 'MATERIA_ID', 'ID');
    }


}
