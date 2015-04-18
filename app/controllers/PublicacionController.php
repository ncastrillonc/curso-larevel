<?php

class PublicacionController extends BaseController{
    
    public function postCrear(){        
        
        /*
         * $var = "Colombia";
         * Describe variable parando la ejecución
         * dd($var);
         * echo "xd";
         */
        
        /*
         * Describa todas las variables que se vinieron
         * dd(Input::all());
         */
        
        $publicacion = [
            'contenido' => Input::get('publicacion'),
            'tipo' => '0',
            'user_id' => Auth::user()->id
        ];
        
        DB::table('publicacion')->insert($publicacion);
        
        return Redirect::to("/profile");
    }
    
    public function postComentar(){
        
    }
    
    public function getEliminar($id){
        $publicacion = Publicacion::find($id);
        
        if($publicacion && $publicacion->user_id == Auth::user()->id){
            $publicacion->delete();
        }
        return Redirect::to("/profile");
    }
}