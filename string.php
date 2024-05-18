<?php

$strings = ["Hello", "World", "PHP", "Programming"];

//function for vowelCount
function vowelCount($str)
{
    $vowels=['a','e','i','o','u'];
    $count=0;
    $str=strtolower($str);
    $chars=str_split($str);

    //count vowel from a string 

    foreach($chars as $char) {
        
        if(in_array($char,$vowels,true)) 
        {
            $count++;
        }
    }
    
    return $count;

    
}

//Reverse the string

function reverseString($str)
{
    $reverseString1=strrev($str);

    return $reverseString1;
}

//traverse each value of array

foreach ($strings as $string) {

    //count vowel
    $numberOfVowel=vowelCount($string);

    //Reverse String
    $reverseString=reverseString($string);
    
    //print
    echo "Original String: {$string}, Vowel Count: {$numberOfVowel}, Reversed String: {$reverseString}\n";
}



