<?php

namespace App\Http\Controllers;

use App\Alumnos;
use App\Cursos;
use App\Profesores;
use App\Etarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
       
        $alumnos = Alumnos::select('Alumnos.id','Alumnos.primer_nombre','Alumnos.segundo_nombre','Alumnos.primer_apellido','Alumnos.segundo_apellido','Alumnos.identificacion','Alumnos.genero','Alumnos.fch_nacimiento','Alumnos.edad','P.nombre AS profesor','C.nombre AS curso', 'E.nombre AS etario')        
                ->join('salones AS S', 'Alumnos.salon_id', '=', 'S.id')
                ->join('profesores AS P', 'Alumnos.profesor_id', '=', 'P.id')
                ->join('cursos AS C', 'Alumnos.salon_id', '=', 'C.salon_id')
                ->join('etario AS E', 'E.id', '=', 'Alumnos.etario_id')                
                ->get();

        return view('home', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $profesor = Profesores::select('profesores.id','profesores.nombre')->get();
        $curso = Cursos::select('cursos.id','cursos.nombre')->get();

        return view('crear', compact('profesor', 'curso'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        request()->validate([
            'primerNombre' => 'required',
            'primerApellido' => 'required',
            'identificacion' => 'required',
            'genero' => 'required', 
            'date' => 'required',             
            'profesor' => 'required',
            'curso' => 'required'
        ]);
        
        $fecha_nacimiento =  request('date');

        $dia=date("d");
        $mes=date("m");
        $ano=date("Y");

        $dianaz=date("d",strtotime($fecha_nacimiento));
        $mesnaz=date("m",strtotime($fecha_nacimiento));
        $anonaz=date("Y",strtotime($fecha_nacimiento));
        
        if (($mesnaz == $mes) && ($dianaz > $dia)) {
            $ano=($ano-1); 
        }
        
        if ($mesnaz > $mes) {
            $ano=($ano-1);
        }
        //EDAD     
        $edad=($ano-$anonaz);

        if($edad < 5){
            $valEtarios = 1;

        }elseif($edad >= 5 && $edad <= 10){
            $valEtarios = 2;

        }elseif($edad > 10 && $edad <= 13){
            $valEtarios = 3;

        }elseif($edad > 13 && $edad <= 18){
            $valEtarios = 4;

        }elseif($edad > 18){
            $valEtarios = 5;
        }

        Alumnos::create([
            'primer_nombre' => request('primerNombre'),
            'segundo_nombre' => request('segundoNombre'),
            'primer_apellido' => request('primerApellido'),
            'segundo_apellido' => request('segundoApellido'),
            'identificacion' => request('identificacion'),
            'genero' =>  request('genero'),
            'fch_nacimiento' =>  request('date'),
            'edad' =>  $edad,
            'salon_id' =>  request('curso'),
            'profesor_id' =>  request('profesor'),
            'etario_id' =>  $valEtarios,  
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumnos = Alumnos::findOrFail($id);    
        
        $curso = Cursos::select('cursos.id','cursos.nombre')->get();
        $profesor = Profesores::select('profesores.id','profesores.nombre')->get();
        
        return view('editar', compact('alumnos', 'curso', 'profesor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'primerNombre' => 'required',
            'primerApellido' => 'required',
            'identificacion' => 'required',
            'genero' => 'required', 
            'date' => 'required',             
            'profesor' => 'required',
            'curso' => 'required'
        ]);
        
        $fecha_nacimiento =  request('date');

        $dia=date("d");
        $mes=date("m");
        $ano=date("Y");

        $dianaz=date("d",strtotime($fecha_nacimiento));
        $mesnaz=date("m",strtotime($fecha_nacimiento));
        $anonaz=date("Y",strtotime($fecha_nacimiento));
        
        if (($mesnaz == $mes) && ($dianaz > $dia)) {
            $ano=($ano-1); 
        }
        
        if ($mesnaz > $mes) {
            $ano=($ano-1);
        }
        //EDAD     
        $edad=($ano-$anonaz);

        if($edad < 5){
            $valEtarios = 1;

        }elseif($edad >= 5 && $edad <= 10){
            $valEtarios = 2;

        }elseif($edad > 10 && $edad <= 13){
            $valEtarios = 3;

        }elseif($edad > 13 && $edad <= 18){
            $valEtarios = 4;

        }elseif($edad > 18){
            $valEtarios = 5;
        }

        $alumnos = Alumnos::findOrFail($id);
        
        $alumnos->update([
            'primer_nombre' => request('primerNombre'),
            'segundo_nombre' => request('segundoNombre'),
            'primer_apellido' => request('primerApellido'),
            'segundo_apellido' => request('segundoApellido'),
            'identificacion' => request('identificacion'),
            'genero' =>  request('genero'),
            'fch_nacimiento' =>  request('date'),
            'edad' =>  $edad,
            'salon_id' =>  request('curso'),
            'profesor_id' =>  request('profesor'), 
            'etario_id' =>  $valEtarios,  
        ]); 

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumnos = Alumnos::findOrFail($id);
        $alumnos->delete();

        return redirect()->route('home'); 
    }

 

}
