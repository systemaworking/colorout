<?php
function out( $text, $color = false, $bg = false )
{
    $txtColors = [
        "black" => "0;30",
        "dark-grey" => "1;30",
        "red" => "0;31",
        "light-red" => "1;31",
        "green" => "0;32",
        "light-green" => "1;32",
        "brown" => "0;33",
        "yellow" => "1;33",
        "blue" => "0;34",
        "light-blue" => "1;34",
        "magenta" => "0;35",
        "light-magenta" => "1;35",
        "cyan" => "0;36",
        "light-cyan" => "1;36",
        "light-grey" => "0;37",
        "white" => "1;37",
    ];
    
    $bgColors = [
        "black" => "40",
        "red" => "41",
        "green" => "42",
        "yellow" => "43",
        "blue" => "44",
        "magenta" => "45",
        "cyan" => "46",
        "light-grey" => "47",
    ];
    
    $bgUse = $bg !== false && isset( $bgColors[ strtolower( $bg ) ] ) ? $bgColors[ strtolower( $bg ) ] : $bgColors[ "black" ];
    $colorUse = $color !== false && isset( $txtColors[ strtolower( $color ) ] ) ? $txtColors[ strtolower( $color ) ] : $txtColors[ "white" ];
    
    #echo "\e[0;31;42m";
    $return = "\e[{$colorUse};{$bgUse}m";
    $return.= $text;
    $return.= "\e[0m";
    
    return $return;
} 