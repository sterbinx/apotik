<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;
use DB;

class Apotek extends Model
{
    public function getApotek(){

		$pdo = DB::getPdo();

		$sql = "SELECT * FROM obat JOIN kategori on obat.id_kategori = kategori.id_kategori";

		$statement = $pdo->prepare($sql);
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_OBJ);
	}
}
