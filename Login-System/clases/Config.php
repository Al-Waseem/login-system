<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author WASEEM
 */
class Config {
    public static function get($path = NULL){
        if($path){
            $config = $GLOBALS['config'];
            $path = explode('/', $path);
            
            foreach ($path as $bit){
                if(isset($config[$bit])){
                    $config = $config[$bit];
                }
            }
            return $config;
        }
        return FALSE;
    }
}

echo 'waseem';
