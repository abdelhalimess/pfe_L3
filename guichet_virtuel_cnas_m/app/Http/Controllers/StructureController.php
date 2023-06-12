<?php

namespace App\Http\Controllers;

use App\Http\Requests\StructureStoreRequest;
use App\Http\Requests\StructureUpdateRequest;
use App\Models\State;
use App\Models\Structure;
use App\Models\StructureType;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $structureTypes = StructureType::with('structures')->get();
        $states = State::with('communes')->get();
        return view('superadmin.structures_list', compact('states', 'structureTypes'));
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
    public function store(StructureStoreRequest $request)
    {
        $structure = new Structure();
        $structure->name = $request->name;
        $structure->state_id = $request->state_id;
        $structure->structure_type_id = $request->structure_type_id;
        $structure->address = $request->address;

        $structure->save();
        $structure = Structure::with('state', 'structureType')->findOrFail($structure->id);
        // return compact('validated');
        return response()->json([
            'success' => 'Structure added with success',
            'structure' => $structure
        ]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StructureUpdateRequest $request, $id)
    {

        $structure = Structure::with('state','structureType')->findOrFail($id);
        $structure->name = $request->name;
        $structure->state_id = $request->state_id;
        $structure->structure_type_id = $request->structure_type_id;
        $structure->address = $request->address;
        $structure->save();
        $structure = Structure::with('state','structureType')->findOrFail($id);
        return response()->json([
            'success' => 'Structure updated with success',
            'structure' => $structure
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $structure = Structure::where('id', '=', $id);
        $structure->delete();
        return response()->json(['success' => 'The structure has been deleted']);
    }


    public function getStructures()
    {
        $structures = Structure::with('state', 'structureType')->get();
        return compact('structures');
    }
    public function getStructuresCount()
    {
        $structures = Structure::count();
        return compact('structures');
    }

}
