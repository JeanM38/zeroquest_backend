<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('./src/Models/Item.php');

/**
 * Test suite for src/Models/Item.php
 */
final class ItemTest extends TestCase
{
    /**
     * Getters tests
     */
    public function testIsItemIsGettedCorrectly(): void
    {
        /* Create a new instance of item */
        $item = new Item(null, 'label', 'desc', 'media_path');

        $this->assertNotEmpty($item);
        $this->assertNull($item->getId());
        $this->assertEquals($item->getLabel(), 'label');
        $this->assertEquals($item->getDescription(), 'desc');
        $this->assertEquals($item->getMedia_path(), 'media_path');
    }

    /**
     * Setters tests
     */
    public function testIsItemIsSettedCorrectly(): void
    {
        $item = new Item(null, 'label', 'desc', 'media_path');

        $item->setId(1);
        $item->setLabel('new label');
        $item->setDescription('new desc');
        $item->setMedia_path('new media_path');

        $this->assertEquals($item->getId(), 1);
        $this->assertEquals($item->getLabel(), 'new label');
        $this->assertEquals($item->getDescription(), 'new desc');
        $this->assertEquals($item->getMedia_path(), 'new media_path');
    }
}