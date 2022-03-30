<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('./src/Models/Creation.php');

/**
 * Test suite for src/Models/Creation.php
 */
final class CreationTest extends TestCase
{
    /**
     * Getters tests
     */
    public function testIsCreationIsGettedCorrectly(): void
    {
        /* Create a new instance of creation */
        $creation = new Creation(
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
        $this->assertNotEmpty($creation);
        $this->assertNull($creation->getId());
        $this->assertEquals($creation->getTitle(), 'title');
        $this->assertTrue($creation->getPrivate());
        $this->assertEquals($creation->getAuthor_id(), 1);
        $this->assertEquals($creation->getDescription(), 'desc');
        $this->assertEquals($creation->getNotes(), 'notes');
        $this->assertEquals($creation->getCreated_at(), 1648380682);
        $this->assertEquals($creation->getUpdated_at(), 1648380682);
        $this->assertEquals($creation->getEnemies(), 'enemies');
        $this->assertEquals($creation->getTraps(), 'traps');
        $this->assertEquals($creation->getDoors(), 'doors');
        $this->assertEquals($creation->getSpawns(), 'spawns');
        $this->assertEquals($creation->getFurnitures(), 'furnitures');
    }

    /**
     * Setters tests
     */
    public function testIsCreationIsSettedCorrectly(): void
    {
        /* Create a new instance of creation */
        $creation = new Creation(
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

        $creation->setId(1);
        $creation->setTitle('new title');
        $creation->setPrivate(!$creation->getPrivate());
        $creation->setAuthor_id(2);
        $creation->setDescription('new desc');
        $creation->setNotes('new notes');
        $creation->setCreated_at(1648380643);
        $creation->setUpdated_at(1648380643);
        $creation->setEnemies('new enemies');
        $creation->setTraps('new traps');
        $creation->setDoors('new doors');
        $creation->setSpawns('new spawns');
        $creation->setFurnitures('new furnitures');

        $this->assertEquals($creation->getId(), 1);
        $this->assertEquals($creation->getTitle(), 'new title');
        $this->assertFalse($creation->getPrivate());
        $this->assertEquals($creation->getAuthor_id(), 2);
        $this->assertEquals($creation->getDescription(), 'new desc');
        $this->assertEquals($creation->getNotes(), 'new notes');
        $this->assertEquals($creation->getCreated_at(), 1648380643);
        $this->assertEquals($creation->getUpdated_at(), 1648380643);
        $this->assertEquals($creation->getEnemies(), 'new enemies');
        $this->assertEquals($creation->getTraps(), 'new traps');
        $this->assertEquals($creation->getDoors(), 'new doors');
        $this->assertEquals($creation->getSpawns(), 'new spawns');
        $this->assertEquals($creation->getFurnitures(), 'new furnitures');
    }
}