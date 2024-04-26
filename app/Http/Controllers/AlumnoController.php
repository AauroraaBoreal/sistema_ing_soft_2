<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function findById($codigo_alumno){
        $obj = new Alumno();
        return $obj->findById($codigo_alumno);
    }

    public function getAlumnosCurso($cid){
        $obj = new Alumno();
        return $obj->getAlumnosCurso($cid);
    }
     
    public function cantidadMatriculadosCurso($cid){
        $obj = new Alumno();
        return $obj->cantidadMatriculadosCurso($cid);
    }
}
