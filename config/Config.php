<?php

namespace Config;

class Config {
	public static function wczytaj(){
        $ini_array = parse_ini_file("./conf.ini");
        print_r($ini_array);
	}
}
