<?php

	require_once 'db.class.php';

	class Gasto {

		public $id;
		public $fecha_gasto;
		public $tipo_gasto_id;
		public $detalle_gasto;
		public $monto_gasto;
		public $tipo_pago_id;
		public $cuota;
		public $gasto;

		function __construct($id){
			$sql = 'SELECT * FROM gastos WHERE id = :id';
			$stmt = DB::getStatement($sql);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			$stmt->execute();

			$gasto = $stmt->fetchObject();

			$this->id_gasto = $id;
			$this->fecha_gasto = $gasto->fecha_gasto;
			$this->tipo_gasto_id = $gasto->tipo_gasto_id;
			$this->detalle_gasto = $gasto->detalle_gasto;
			$this->monto_gasto = $gasto->monto_gasto;
			$this->tipo_pago_id = $gasto->tipo_pago_id;
			$this->cuota = $gasto->cuota;
		}

		function ingresarGasto(){
			$sql = 'INSERT INTO gastos WHERE id = :id';
			$stmt = DB::getStatement($sql);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			$stmt->execute();

			$gasto = $stmt->fetchObject();

			$this->id = $id;
			$this->fecha_gasto = $gasto->fecha_gasto;
			$this->tipo_gasto_id = $gasto->tipo_gasto_id;
			$this->detalle_gasto = $gasto->detalle_gasto;
			$this->monto_gasto = $gasto->monto_gasto;
			$this->tipo_pago_id = $gasto->tipo_pago_id;
			$this->cuota = $gasto->cuota;
		}
	}

