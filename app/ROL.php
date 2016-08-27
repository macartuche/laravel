<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ROL extends Model {

    /**
     * Generated
     */

    protected $table = 'ROL';
    protected $fillable = ['ID', 'NOMBRE', 'CODIGO'];


    public function uSUARIOs() {
        return $this->hasMany(\App\Models\USUARIO::class, 'ROL_ID', 'ID');
    }


}
