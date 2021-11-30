<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

trait OtherActions {

    public function upload(Request $request){
        $m = self::MODEL;
        $id = $request->get('id');
        $model = $m::find($id);
        if(is_null($model)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        $property = $request->file('property');
        $file = $request->file('file');
        $property = $request->get('property');
        $location = base_path().'/../'.$request->get('location');
        $extension = $file->getClientOriginalExtension();
        $save_as = $property.'_'.$id.'_'.uniqid().'.'.$extension;
        $file->move($location, $save_as);
        if($file){
            $model->$property = $save_as;
            $model->save();
            return $this->respond(Response::HTTP_OK, ['saved' => $save_as, 'id'=>$id, 'property'=>$property]);
        }
        else{
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
    }
}
