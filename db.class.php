<?php


	class DB {

		static $db;

		static function getConnection(){
			if(empty(self::$db)){
				self::$db = new PDO('mysql:host=mysql12.000webhost.com;dbname=a6235987_gastos',
					'a6235987_root',
					'salta2266',
					array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
				);
			}

			return self::$db;
		}

		static function getStatement($sql){


			return self::getConnection()->prepare($sql);
		}
	}