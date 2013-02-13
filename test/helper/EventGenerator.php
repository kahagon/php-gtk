<?php
/**
*   Small event generator to do automated unit tests with PHP-Gtk2
*   Supports different drivers.
*
*   A generator has the following methods:
*   - sendKey($key)
*   - sendKeyPress($key)
*   - sendKeyRelease($key)
*   where $key is a string/char what key to send.
*   For example, " " would send a space, "a" a lowercase a
*   "ctrl" a left control and so on.
*
*   @author Christian Weiske <cweiske@php.net>
*/
class EventPHPGtkGenerator
{
    function createPHPGtkGenerator($type = null)
    {
        if ($type == null) {
            $type = EventPHPGtkGenerator::getDefaultPHPGtkGenerator();
        }
        $class = 'EventPHPGtkGenerator_' . $type;
        include_once($class . '.php');
        if (!class_exists($class)) {
            die('Couldn\'t load class "' . $class . '"' . "\r\n");
        }
        return new $class();
    }//function createPHPGtkGenerator($type = 'xte')



    function getDefaultPHPGtkGenerator()
    {
        if (file_exists('EventPHPGtkGenerator.config.php')) {
            include_once('EventPHPGtkGenerator.config.php');
        }
        if (defined('EVENT_GENERATOR')) {
            return EVENT_GENERATOR;
        }
        //no static class properties in php4
        return 'xte';
    }//function getDefaultPHPGtkGenerator()
}//class EventPHPGtkGenerator

?>