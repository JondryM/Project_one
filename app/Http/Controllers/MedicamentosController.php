<?php

namespace servmed\Http\Controllers;

use Illuminate\Http\Request;
use servmed\Http\Requests;
use servmed\Http\Controllers\Controller;
use servmed\Medicamentos;
use Illuminate\Support\facades\Redirect;
use sermed\Http\Request\MedicamentoFormRequest;
use DB;


class MedicamentosController extends Controller
{
    public function __construct()
    {


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request){

            $query=trim($request->get('searchText'));
            $medicamento=DB::table('medicamento')->where('nombre','LIKE','%'.$query.'%')
            ->orderBy('idinventario','desc')
            ->paginate(7);
            return view('historial.medicamentos.index',["medicamento"=>$medicamento,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("historial.medicamentos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 public function store(Request $request)
    {

        $medicamento=new Medicamentos;
        $medicamento->nombre = $request->get('nombre');
        $medicamento->descripcion = $request->get('descripcion');
        $medicamento->num_inventario = $request->get('num_inventario');
        $medicamento->save();
        return redirect('/historial/medicamentos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("historial.medicamentos.show",["medicamento"=>Medicamentos::FindOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $medicamento = Medicamentos::where('idinventario', $id)
               ->get();
        return view("historial.medicamentos.edit", ["medicamento" => $medicamento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

      Medicamentos::where('idinventario', $request->idinventario)
              ->update([
                  'nombre' => $request->nombre,
                  'descripcion' => $request->descripcion,
                  'num_inventario' => $request->num_inventario,
      ]);

        return redirect('/historial/medicamentos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $medicamentos=Medicamentos::FindOrFail($id);
     $medicamentos->update();
     return Redirect::to('historial.medicamentos');
    }

    public function delete($id)
    {
      Medicamentos::where('idinventario', '=', $id)->delete();
    }
}
