<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Form;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'nameComplete' => 'required|max:250',
            'age' => 'required',
            'birthdate' => 'required',
            'registrationDate' => 'required',
            'cost' => 'required',
        ]);

        if($validator->fails()) {
          return response()->json(['success'=> false, 'error'=> $validator->messages()], 400);
        }
    
        DB::beginTransaction();

        try {
            $form = new Form();
            $form->nameComplete = $request->nameComplete;
            $form->age = $request->age;
            $form->birthdate = $request->birthdate;
            $form->registrationDate = $request->registrationDate;
            $form->cost = $request->cost;
            $form->save();

          DB::commit();
        } catch (\Exception $e) {
          DB::rollback();
          $message = $e->getMessage();
          return response()->json(['success'=> false, 'error'=> $message], 500);
        }

        return response()->json(['success'=>true,'message'=>'Agregado con exito!!',
          'data'=> $form
          ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
