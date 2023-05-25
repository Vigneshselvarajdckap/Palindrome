<?php

function palindrome($input)
{
    if($input != false)
    {
        if(strrev($input) == $input)
        {
            return "It's Palindrome";
        }
        else
        {
            return "It's Not Palindrome";
        }
    }
    else
    {
        return "please Enter values";
    }

}

echo palindrome("mom");