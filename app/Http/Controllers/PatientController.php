<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use Exception;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
      
        try {
         
            return $this->success($patients, 'Retrived  patients list is successfully');
        } catch(Exception $e) {
            return $this->unknown();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(StorePatientRequest $request)
    {
        $payload = collect($request->validated());
        
        try{
            $patients= Patient::create($payload->toArray());
            
            return $this->success($patients,'New Patients is created successfully');
        }catch(Exception $e){
            return $this->unknown();
        }
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientRequest  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientRequest $request,$id)
    {
        $payload = collect($request->validated());
        try {
            $patients= Patient::findOrFail($id);
            $patients ->update($payload->toArray());
            
            return $this->success($patients, "Patients is updated successfully");
        } catch(Exception $e) {
            return $this->unkonwn();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
        $patients= Patient::findOrFail($id);
           
        $patients -> delete();
             return $this->success($patients, "patients is deleted successfully");
         }catch(Exception $e) {
             return $this->unknown();
         }
    }
}
