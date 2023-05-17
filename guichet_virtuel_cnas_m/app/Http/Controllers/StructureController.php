<?php

namespace App\Http\Controllers;

use App\Models\Structure;
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
        return view('superadmin.structures_list');
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
    public function store(Request $request)
    {
        $structure = new Structure();
        $structure->name = $request->name;
        $structure->state_id = $request->state_id;

        $structure->save();

        // return compact('validated');
        return response()->json([
            'success' => 'Information added with success',
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
    public function update(Request $request, $id)
    {
              
        $structure = Structure::findOrFail($id);
        $structure->name = $request->name;
        $structure->state_id = $request->state_id;

        $structure->save();

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
        $structures = Structure::all();
        return compact('structures');
    }



}
