<?php

class StringHelper {

    public static function truncate($text, $max = 25) {
        if (strlen($text) <= $max) {
            return $text;
        }
        $text = $text . " ";
        $text = substr($text, 0, $max);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text . "...";

        return $text;
    }

}