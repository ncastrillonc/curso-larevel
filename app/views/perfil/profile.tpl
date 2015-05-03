{capture assign="left"}
    <center>
        <img src="{url('assets/img/profile')}/{$foto}" width="260" height="150">
        <div class="well">
            {$nombre}<br><br>
            {$correo}
        </div>
    </center>
{/capture}

{capture assign="right"}
    {Form::open(['url'=>'publicacion/crear'])}
        <textarea name="publicacion" placeholder="¿Qué estás pensando?" rows=3 class="col-lg-12" required></textarea>
        <button class="btn pull-right btn-success" type="submit">Publicar</button>
    {Form::close()}	
    
    <br>
    <hr>
    <br><br><br>
        <!-- Imprime las publicaciones en el perfil -->
        {foreach $publicaciones as $publicacion}   
            <div>
                <div class="well" style="word-break: break-all; margin-buttom: 5px; padding: 10px 5px; font-family: 'Indie Flower', cursive;">
                    <a href="{url('publicacion/eliminar')}/{$publicacion->id}">
                        <span class="pull-right glyphicon glyphicon-remove" style="margin-top: -5px; color: gray"></span>
                    </a><br>
                    {$publicacion->contenido}
                </div>
                <div>
                    <span class="glyphicon glyphicon-comment" style="color: green"></span> Comentar
                    <span class="glyphicon glyphicon-thumbs-up" style="color: blue"></span> Me gusta <br>
                    
                    <div>
                        <div style="font-size: 10px; padding: 3px;" class="well well-sm col-sm-7">Esto es un comentario</div>
                    </div>
                    
                    <br>
                    <br>
                    
                    <textarea name="comenta" id="comentario-{$publicacion->id}" placeholder="Escribe tu comentario" rows=1 class="col-sm-6"></textarea>
                    <button class="btn bnt-success btn-small" onclick="fb.comentar({$publicacion->id})">Comentar</button>
                </div>
            </div><br><br><br>
        
        {foreachelse}
            <div class="alert alert-info">
                No hay publicaciones  
            </div>    
        {/foreach}       
            
{/capture}

{capture assign="portada"}    
    
{/capture}

{include file="../masterpage/template.tpl" layout="two_columns"}