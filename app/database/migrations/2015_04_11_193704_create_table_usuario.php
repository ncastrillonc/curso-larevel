<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuario extends Migration {
        
	public function up()
	{
            Schema::create('usuario', function(Blueprint $table)
            {
                $table->increments('id');
                $table->string('nombre_completo');
                $table->string('correo');
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
            });
            
            Schema::create('publicacion', function(Blueprint $table)
            {
                $table->increments('id');
                $table->string('contenido');
                $table->boolean('tipo');
                $table->integer('padre')->unsigned()->nullable(); 
                $table->integer('user_id')->unsigned();  
                $table->timestamps();
                
                // $table->primary('id');
                $table->foreign('padre')->references('id')->on('publicacion');
                $table->foreign('user_id')->references('id')->on('usuario');
            });
            
            Schema::create('me_gusta', function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('user_id')->unsigned(); 
                $table->integer('public_id')->unsigned(); 
                $table->timestamps();
                
                $table->foreign('user_id')->references('id')->on('usuario');
                $table->foreign('public_id')->references('id')->on('publicacion');
            });
            
            DB::table('usuario')
                    ->insert([
                        'nombre_completo' => 'Luis',
                        'correo' => 'luis@gmail.com',
                        'password' => Hash::make('abcd123')
                    ]);
            DB::table('usuario')
                    ->insert([
                        'nombre_completo' => 'Sam',
                        'correo' => 'sam@gmail.com',
                        'password' => Hash::make('abcd123')
                    ]);
            DB::table('usuario')
                    ->insert([
                        'nombre_completo' => 'Eduardo',
                        'correo' => 'ed@gmail.com',
                        'password' => Hash::make('abcd123')
                    ]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuario', function(Blueprint $table)
		{
                    Schema::drop('me_gusta');
                    Schema::drop('publicacion');
                    Schema::drop('usuario');
		});
	}

}
