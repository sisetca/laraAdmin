<?php
/**
 * Model genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Upload extends Model
{
    use SoftDeletes;
	
	protected $table = 'uploads';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

	/**
     * Get the user that owns upload.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    /**
     * Get File path
     */
    public function path()
    {
        return url("files/".$this->hash."/".$this->name);
    }
}

/**
Diferencia entre fillable y guarded-> Ambas propiedades se usan en los asignamientos de datos en masa en los modelos Eloquent y permiten protegerse en caso que un usuario malicionso haya modificado los campos del formulario para incluir campos que existian.

$guarded permite especificar que campos si quieres que se guarden en la base de datos. es decir se asigan unicamente los especificados en ese array

protected $guarded = [] desactiva permanentemente el sistema de proteccion

*/