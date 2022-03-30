<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('./src/Models/Creation.php');

/**
 * Test suite for src/Models/Creation.php
 */
final class CreationTest extends TestCase
{
    private object $creation;

    protected function setUp(): void
    {
        /* Create a new instance of creation */
        $this->creation = new Creation(
            null, 
            'title', 
            true, 
            1, 
            'desc', 
            'notes',
            1648380682, 
            1648380682, 
            'enemies', 
            'traps', 
            'doors', 
            'spawns',
            'furnitures'
        );
    }

    /**
     * Getters tests
     */
    public function testIsCreationIsGettedCorrectly(): void
    {
        $this->assertNotEmpty($this->creation);
        $this->assertNull($this->creation->getId());
        $this->assertEquals($this->creation->getTitle(), 'title');
        $this->assertTrue($this->creation->getPrivate());
        $this->assertEquals($this->creation->getAuthor_id(), 1);
        $this->assertEquals($this->creation->getDescription(), 'desc');
        $this->assertEquals($this->creation->getNotes(), 'notes');
        $this->assertEquals($this->creation->getCreated_at(), 1648380682);
        $this->assertEquals($this->creation->getUpdated_at(), 1648380682);
        $this->assertEquals($this->creation->getEnemies(), 'enemies');
        $this->assertEquals($this->creation->getTraps(), 'traps');
        $this->assertEquals($this->creation->getDoors(), 'doors');
        $this->assertEquals($this->creation->getSpawns(), 'spawns');
        $this->assertEquals($this->creation->getFurnitures(), 'furnitures');
    }

    /**
     * Setters tests
     */
    public function testIsCreationIsSettedCorrectly(): void
    {
        $this->creation->setId(1);
        $this->creation->setTitle('new title');
        $this->creation->setPrivate(!$this->creation->getPrivate());
        $this->creation->setAuthor_id(2);
        $this->creation->setDescription('new desc');
        $this->creation->setNotes('new notes');
        $this->creation->setCreated_at(1648380643);
        $this->creation->setUpdated_at(1648380643);
        $this->creation->setEnemies('new enemies');
        $this->creation->setTraps('new traps');
        $this->creation->setDoors('new doors');
        $this->creation->setSpawns('new spawns');
        $this->creation->setFurnitures('new furnitures');

        $this->assertEquals($this->creation->getId(), 1);
        $this->assertEquals($this->creation->getTitle(), 'new title');
        $this->assertFalse($this->creation->getPrivate());
        $this->assertEquals($this->creation->getAuthor_id(), 2);
        $this->assertEquals($this->creation->getDescription(), 'new desc');
        $this->assertEquals($this->creation->getNotes(), 'new notes');
        $this->assertEquals($this->creation->getCreated_at(), 1648380643);
        $this->assertEquals($this->creation->getUpdated_at(), 1648380643);
        $this->assertEquals($this->creation->getEnemies(), 'new enemies');
        $this->assertEquals($this->creation->getTraps(), 'new traps');
        $this->assertEquals($this->creation->getDoors(), 'new doors');
        $this->assertEquals($this->creation->getSpawns(), 'new spawns');
        $this->assertEquals($this->creation->getFurnitures(), 'new furnitures');
    }
}