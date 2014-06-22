<?php
/**
 * Hello\World test
 */

namespace Hello;

use Hello\World;

/**
 * Tests for Hello\World
 */
class WorldTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test parsePackage
     */
    public function testGreet()
    {
        $object = new World();
        $this->assertEquals('Hello World!', $object->greet());
    }
}
