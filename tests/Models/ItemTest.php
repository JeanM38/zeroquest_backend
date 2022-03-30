<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('./src/Models/Item.php');

/**
 * Test suite for src/Models/Item.php
 */
final class ItemTest extends TestCase
{
    private object $item;

    protected function setUp(): void
    {
        $this->item = new Item(null, 'label', 'desc', 'media_path');
    }

    /**
     * Getters tests
     */
    public function testIsItemIsGettedCorrectly(): void
    {
        $this->assertNotEmpty($this->item);
        $this->assertNull($this->item->getId());
        $this->assertEquals($this->item->getLabel(), 'label');
        $this->assertEquals($this->item->getDescription(), 'desc');
        $this->assertEquals($this->item->getMedia_path(), 'media_path');
    }

    /**
     * Setters tests
     */
    public function testIsItemIsSettedCorrectly(): void
    {
        $this->item->setId(1);
        $this->item->setLabel('new label');
        $this->item->setDescription('new desc');
        $this->item->setMedia_path('new media_path');

        $this->assertEquals($this->item->getId(), 1);
        $this->assertEquals($this->item->getLabel(), 'new label');
        $this->assertEquals($this->item->getDescription(), 'new desc');
        $this->assertEquals($this->item->getMedia_path(), 'new media_path');
    }
}