<?php

namespace App\Http\Controllers;

use App\Models\dataSql;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataSqlController extends Controller
{
    //
    public function all(){
        $data=dataSql::paginate(10);
        $airport=null;
        return view("airports",["data"=>$data,'airport'=>$airport]);
    }

//    GET_DATA
    public function getData(){
        $data=dataSql::all();
        return response()->json([
            'status'=>true,
            'message'=>'Success',
            'airports'=>$data
        ]);
    }

//    EDIT
    public function edit($id){
        $data=dataSql::paginate(10);
        $airport=dataSql::findOrFail($id);
        return view("airports",['airport'=>$airport,"data"=>$data]);
    }

//    UPDATE
    public function update($id,Request $request){
        $airport=dataSql::findOrFail($id);
        $airport->update([
            'code'=>$request->post('code'),
            'name'=>$request->post('name'),
            'cityCode'=>$request->post('cityCode'),
            'cityName'=>$request->post('cityName'),
            'countryName'=>$request->post('countryName'),
            'countryCode'=>$request->post('countryCode'),
            'timezone'=>$request->post('timezone'),
            'lat'=>$request->post('lat'),
            'lon'=>$request->post('lon'),
            'numAirports'=>$request->post('numAirports'),
        ]);
        return redirect()->to('airport');

    }

//    DELETE
    public function delete($id){
        $airport=dataSql::findOrFail($id);
        $airport->delete();
        return redirect()->to('airport');
    }

//    SAVE
    public function save(Request $request){
        try {
            dataSql::create([
                'code' => $request->post('code'),
                'name' => $request->post('name'),
                'cityCode' => $request->post('cityCode'),
                'cityName' => $request->post('cityName'),
                'countryName' => $request->post('countryName'),
                'countryCode' => $request->post('countryCode'),
                'timezone' => $request->post('timezone'),
                'lat' => $request->post('lat'),
                'lon' => $request->post('lon'),
                'numAirports' => $request->post('numAirports'),

            ]);
        }
        catch (\Exception $e){
            abort(404);
        }
        return redirect()->to('airport');
    }
}
