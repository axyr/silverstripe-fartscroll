<?php

/**
 * Class FartTest
 *
 * @mixin PHPUnit_Framework_TestCase
 */
class FartTest extends SapphireTest
{
    /**
     * After Composer install, the supersake file should be copied to the webroot.
     */
    public function testPageTypesStinks()
    {
        $controller = new Page_Controller();
        $this->assertTrue($controller->hasExtension('FartScrollExtension'));
    }
}
