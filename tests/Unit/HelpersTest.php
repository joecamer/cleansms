<?php

namespace Undjike\CleanSmsPhp\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Undjike\CleanSmsPhp\Helpers;

use function PHPUnit\Framework\assertFalse;

class HelpersTest extends TestCase {

    /**
     * Test that string verification helper is working as well
     * 
     */
    public function testContainString() {
        assertFalse(Helpers::containsString(['123',456]));
    }
}