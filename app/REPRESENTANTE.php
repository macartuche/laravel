<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class REPRESENTANTE extends Model {

    /**
     * Generated
     */

    protected $table = 'REPRESENTANTE';
    protected $fillable = ['ID', 'ALU_ID', 'PARENTESCO'];


    public function pERSONA() {
        return $this->belongsTo(\App\Models\PERSONA::class, 'ID', 'ID');
    }

    public function aLUMNO() {
        return $this->belongsTo(\App\Models\ALUMNO::class, 'ALU_ID', 'ID');
    }


}
