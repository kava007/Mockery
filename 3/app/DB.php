<?php

namespace App;

class DB
{

	public function get($table)
	{
		sleep(10);
		
		return (bool) "colección de datos de la tabla $table";
	}

}