<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ResultadoCand extends Model
{
    public function resultadoCursos($letraGrupo){
        $resultadoCursosCand = DB::table('cursos')
            ->select('curso_descricao')
            ->where('grupo_curso', '=', "$letraGrupo")->get();

        return $resultadoCursosCand;
    }
}