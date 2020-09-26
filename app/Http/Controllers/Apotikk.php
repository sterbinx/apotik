<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;

class Apotikk extends Controller
{
    public function getApotikk(){

		$pdo = DB::getPdo();

		$sql = "SELECT * FROM obat JOIN kategori on obat.id_kategori = kategori.id_kategori";

		$statement = $pdo->prepare($sql);
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_OBJ);
	}
}
