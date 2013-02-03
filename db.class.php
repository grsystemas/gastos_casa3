<?php


	class DB {

		static $db;

		static function getConnection(){
			if(empty(self::$db)){
				self::$db = new PDO('mysql:host=localhost;dbname=gastos_casa3',
					'root',
					'2112',
					array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
				);
			}

			return self::$db;
		}

		static function getStatement($sql){


			return self::getConnection()->prepare($sql);
		}
	}