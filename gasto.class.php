<?php

	require_once 'db.class.php';

	class Gasto {

		public $id_gasto;
		public $fecha_gasto;
		public $tipo_gasto_id;
		public $detalle_gasto;
		public $monto_gasto;
		public $tipo_pago_id;
		public $cuota;
		public $gasto;

		function __construct($id_gasto){
			$sql = 'SELECT * FROM gastos WHERE id = :id_gasto';
			$stmt = DB::getStatement($sql);
			$stmt->bindParam(':id_gasto', $id_gasto, PDO::PARAM_INT);
			$stmt->execute();

			$gasto = $stmt->fetchObject();

			$this->id_gasto = $id_gasto;
			$this->fecha_gasto = $gasto->fecha_gasto;
			$this->tipo_gasto_id = $gasto->tipo_gasto_id;
			$this->detalle_gasto = $gasto->detalle_gasto;
			$this->monto_gasto = $gasto->monto_gasto;
			$this->tipo_pago_id = $gasto->tipo_pago_id;
			$this->cuota = $gasto->cuota;
		}

	}

