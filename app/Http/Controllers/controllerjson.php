<?php

namespace App\Http\Controllers;
use App\alumnos; 
use Illuminate\Http\Request;
use App\Http\Requests\alumnos as requestAlumnos;

class controllerjson extends Controller
{
    public function getAlumnos (){
        $Alumnos = array (
        'nombre' => 'Moises',
        'apellido paterno'=> 'Lopez',
        'matricula'=> '221910022',
        'edad'=> 19,
        );
        return response()->json($Alumnos);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = Alumnos::all();
        return ($lista);
    }

    public function where()
    {
        $alumno = alumnos::whereId('1')
        ->get();
        return response()->json($alumno); 
    }

    public function whereNombre()
    {
        $alumno = alumnos::select('nombre')
        ->whereId('4')
        ->get();
        return response()->json($alumno); 

    }

    public function whereid($id)
    {
        $alumno = alumnos::whereId($id)
        ->get();
        return response()->json($alumno); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*protected $alumno; 
    public function contrutorAlumnos(alumnos $alumno)
    {
       $this->alumno = $alumno;
    }*/
    public function store(requestAlumnos $request)
    {
        
        $alumno = new alumnos;
        $alumno->create($request->all());
        return redirect('alumno');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $l = Alumnos::find($id);
        return ($l);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

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
        Alumnos::find($id)->update($request->all());
        return response()->json($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Alumnos::find($id);
        $alumno->delete();
        return response()->json('Eliminado correctamente');
    }
}
