<?php

namespace App\classes;

class Helper
{
    //FILTER DATA
    public static function filter($data){
        // Trim white spaces from the beginning and end
        $data = trim($data);
        // Remove backslashes from the input
        $data = stripslashes($data);
        // Convert special characters to HTML entities
        $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
        return $data;
    }

    public static function title(){
        $path = $_SERVER['SCRIPT_FILENAME'];
        $title = basename($path, '.php');
        if ($title == 'index') {
            $title = 'home';
        } elseif ($title == 'contact') {
            $title = 'contact';
        }
        return ucfirst($title);
    }

    public static function textShort($text, $limit = 400){
        $text = $text . " ";
        $text = substr($text, 0, $limit);
        $text = $text . " . . . .";
        return $text;
    }
}
