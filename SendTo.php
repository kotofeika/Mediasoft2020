<?php


namespace Localhost;


class Send
{
    public static function SendTo(string $file)
    {
        header('Location: '.$file);
        exit;
    }
}