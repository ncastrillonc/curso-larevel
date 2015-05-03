<?php

class Usuario extends Eloquent{
    
    protected $table = 'usuario';
    
    public function misPublicaciones(){
        $publicaciones = publicacion::where('user_id', $this->id)
                        ->orderBy('id','desc')
                        ->get();
        
                return $publicaciones;
    }
}

?>