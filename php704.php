<?php
//define variable
$hello="Hello";

//define function:Annonymous
$hi function ()use($hello){ //collee
    return "Hello $hello";
};

echo hi();

