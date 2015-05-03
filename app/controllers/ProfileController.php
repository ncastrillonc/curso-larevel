<?php

class ProfileController extends BaseController{
    
    // cargar mi pagina
    public function getIndex(){
        
        $amigos = Usuario::all();
        $uss = Auth::user()->nombre_completo; 
        
        $publicaciones = Publicacion::where('user_id', Auth::user()->id)
                                    ->orderBy('id','desc')
                                    ->get();
        
        $s = "";
        
        foreach($amigos as $amigo){
            if($amigo->nombre_completo != $uss){
                $s.="\"{$amigo->nombre_completo}\","; // Los nombres deben ir con comillas
            }
        }
        
        $s=trim($s,",");
        
        return View::make('perfil.profile')
            ->with("nombre", $uss)
            ->with("correo", Auth::user()->correo)
            ->with("friends", $s)
            ->with("foto", Auth::user()->id.".jpg")
            ->with("publicaciones", $publicaciones);
    }
    
    public function getVer($id){
        
        if($id == Auth::user()->id) return Redirect::to("/profile");
        
        $usuario = Usuario::find($id);        
        
        if($usuario){
            $publicaciones = $usuario->misPublicaciones(); 
            
            return View::make('perfil.profile')
            ->with("nombre", $usuario->nombre_completo)
            ->with("correo", $usuario->correo)
            //->with("friends", $s)
            ->with("foto", $usuario->id.".jpg")
            ->with("publicaciones", $publicaciones);
        } else{
            return Redirect::to('/profile');
        }
    }
    
    public function getLogout(){
        Auth::logout();
        Session::flush();
        return Redirect::to('/login');
    }
}

