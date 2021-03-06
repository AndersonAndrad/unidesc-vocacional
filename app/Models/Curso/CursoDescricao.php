<?php

namespace App\Models\Curso;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CursoDescricao extends Model
{
    public function descCand($cat)
    {
        return DB::table('curso_descricaos')
            ->select('caracteristica', 'descricao')
            ->where('grupo_letra', '=', "$cat")->get();

    }
}
