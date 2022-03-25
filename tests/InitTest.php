<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    public function testIsTestIsWorking(): void
    {
        $this->assertEquals(1,1);
    }
}