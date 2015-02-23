<?php
/**
 * Created by PhpStorm.
 * User: NUIZ
 * Date: 24/2/2558
 * Time: 2:03
 */

class Api {
    private static $base_url = "http://localhost/tobacco";
    public static function get($uri){
        return Unirest\Request::get(self::$base_url.$uri);
    }
}