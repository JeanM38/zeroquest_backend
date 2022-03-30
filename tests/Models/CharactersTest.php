<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('./src/Models/Character.php');

/**
 * Test suite for src/Models/Character.php
 */
final class CharacterTest extends TestCase
{
    private object $character;

    protected function setUp(): void
    {
        $this->character = new Character(null, "Conan", 1, 1, 10, 100);
    }

    /**
     * Getters tests
     */
    public function testIsCharacterIsGettedCorrectly(): void
    {
        $this->assertNotEmpty($this->character);
        $this->assertNull($this->character->getId());
        $this->assertEquals($this->character->getName(), "Conan");
        $this->assertEquals($this->character->getType(), 1);
        $this->assertEquals($this->character->getOwner_id(), 1);
        $this->assertEquals($this->character->getBody(), 10);
        $this->assertEquals($this->character->getGold(), 100);
    }

    /**
     * Setters tests
     */
    public function testIsCharacterIsSettedCorrectly(): void
    {
        $this->character->setId(2);
        $this->character->setName("ConanX");
        $this->character->setType(2);
        $this->character->setOwner_id(2);
        $this->character->setBody(8);
        $this->character->setGold(150);

        $this->assertEquals($this->character->getId(), 2);
        $this->assertEquals($this->character->getName(), "ConanX");
        $this->assertEquals($this->character->getType(), 2);
        $this->assertEquals($this->character->getOwner_id(), 2);
        $this->assertEquals($this->character->getBody(), 8);
        $this->assertEquals($this->character->getGold(), 150);
    }
}