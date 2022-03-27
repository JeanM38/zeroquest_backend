<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('./src/Models/Character.php');

/**
 * Test suite for src/Models/Character.php
 */
final class CharacterTest extends TestCase
{
    /**
     * Getters tests
     */
    public function testIsCharacterIsGettedCorrectly(): void
    {
        /* Create a new instance of character */
        $character = new Character(null, "Conan", 1, 1, 10, 100);

        $this->assertNotEmpty($character);
        $this->assertNull($character->getId());
        $this->assertEquals($character->getName(), "Conan");
        $this->assertEquals($character->getType(), 1);
        $this->assertEquals($character->getOwner_id(), 1);
        $this->assertEquals($character->getBody(), 10);
        $this->assertEquals($character->getGold(), 100);
    }

    /**
     * Setters tests
     */
    public function testIsCharacterIsSettedCorrectly(): void
    {
        $character = new Character(1, "Conan", 1, 1, 10, 100);

        $character->setId(2);
        $character->setName("ConanX");
        $character->setType(2);
        $character->setOwner_id(2);
        $character->setBody(8);
        $character->setGold(150);

        $this->assertEquals($character->getId(), 2);
        $this->assertEquals($character->getName(), "ConanX");
        $this->assertEquals($character->getType(), 2);
        $this->assertEquals($character->getOwner_id(), 2);
        $this->assertEquals($character->getBody(), 8);
        $this->assertEquals($character->getGold(), 150);
    }
}