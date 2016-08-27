<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PARALELO extends Model {

    /**
     * Generated
     */

    protected $table = 'PARALELO';
    protected $fillable = ['ID', 'NOMBRE', 'CODIGO'];


    public function dISTRIBUTIVODOCENTEs() {
        return $this->hasMany(\App\Models\DISTRIBUTIVODOCENTE::class, 'PARALELO_ID', 'ID');
    }

    public function mATRICULAs() {
        return $this->hasMany(\App\Models\MATRICULA::class, 'PARALELO_ID', 'ID');
    }


}
