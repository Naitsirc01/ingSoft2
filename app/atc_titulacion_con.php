<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class atc_titulacion_con extends Model
{
    protected $fillable = [
        'titulo','nombre1','nombre2','nombre3','nombre4','rut1','rut2','rut3','rut4','carrera', 'fecha_inicio','fecha_termino',
        'profesor_id1','profesor_id2','empresa', 'Indicadores_id'];

    public function indicador(){
        return $this->belongsTo('App\Indicadores','Indicadores_id');
    }

    public function profesor1(){
        return $this->belongsTo('App\Profesore','profesor_id1');
    }

    public function profesor2(){
        return $this->belongsTo('App\Profesore','profesor_id2');
    }

    public function evidencia(){
        return $this->hasOne('App\evidencia');
    }
}
