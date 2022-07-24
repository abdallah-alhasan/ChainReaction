<?php 

function validateHexCode(string $code) {

    if (strlen($code) != 7 || !str_starts_with($code, '#')) 
        return 'false';
    
    for ($i = 1; $i < strlen($code); $i++)
    if (!(($code[$i] >= '0' && $code[$i] <= 9)
            || ($code[$i] >= 'a' && $code[$i] <= 'f')
            || ($code[$i] >= 'A' && $code[$i] <= 'F')
            ))
            return 'false';

            if ($code[$i] == '*' || $code[$i] == '&')
            return 'false';

    return 'true';
}



//test cases 

echo validateHexCode("#CD5C5C");
echo validateHexCode("#EAECEE");
echo validateHexCode("#eaecee");


echo validateHexCode("#CD5C58C");
// Length exceeds 6

echo validateHexCode("#CD5C5Z");
// Not all alphabetic characters in A-F

echo validateHexCode("#CD5C&C");
// Contains unacceptable character

echo validateHexCode("CD5C5C");
// Missing #

