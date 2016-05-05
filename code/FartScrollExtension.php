<?php

/**
 * Class FartScrollExtension
 */
class FartScrollExtension extends Extension
{
    function onAfterInit()
    {
        $environmentTypes = Config::inst()->get('FartScrollExtension', 'environmentTypes');
        $speed = Config::inst()->get('FartScrollExtension', 'speed');
        if (in_array(Director::get_environment_type(), $environmentTypes)) {
            Requirements::javascript('http://code.onion.com/fartscroll.js');
            Requirements::customScript('fartscroll(' . $speed . ');', 'Fart');
        }
    }
}
