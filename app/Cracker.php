<?php

namespace App;

class Cracker 
{


    public function decrypt($str) : string
    {
        $output = "";

        $dictionary = [
        "!" => "a",
        ")" => "b",
        "#" => "c",
        "(" => "d",
        "£" => "e",
        "*" => "f",
        "%" => "g",
        "&" => "h",
        ">" => "i",
        "<" => "j",
        "@" => "k",
        "a" => "l",
        "b" => "m",
        "c" => "n",
        "d" => "o",
        "e" => "p",
        "f" => "q",
        "g" => "r",
        "h" => "s",
        "i" => "t",
        "j" => "u",
        "k" => "v",
        "l" => "w",
        "m" => "x",
        "n" => "y",
        "o" => "z"
        ];

        $messageArr = str_split($str);
        
        foreach($messageArr as $char) 
        {
            foreach($dictionary as $letter => $code)
            {
                if($char === $letter) {
                    $output .= $code;
                }
            }
        }

        return $output; 
    }

}

