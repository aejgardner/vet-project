<?php

namespace App;

class FizzBuzz 
{
    public function forNumber($i) 
    {
        $result = ""; 
        
        $result .= $i % 3 === 0 ? 'Fizz' : ''; 
        
        $result .= $i % 5 === 0 ? 'Buzz' : ''; 
        
        $result .= $i % 7 === 0 ? 'Rarr' : ''; 

        return $result ? $result : "$i"; 
    
    }
}