<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('./src/Models/CharacterType.php');

/**
 * Test suite for src/Models/CharacterType.php
 */
final class CharacterTypeTest extends TestCase
{
    /**
     * Getters tests
     */
    public function testIsCharacterTypeIsGettedCorrectly(): void
    {
        /* Create a new instance of character_type */
        $character_type = new CharacterType(null, 'label', 'desc', 'media_path');

        $this->assertNotEmpty($character_type);
        $this->assertNull($character_type->getId());
        $this->assertEquals($character_type->getLabel(), 'label');
        $this->assertEquals($character_type->getDescription(), 'desc');
        $this->assertEquals($character_type->getMedia_path(), 'media_path');
    }

    /**
     * Setters tests
     */
    public function testIsCharacterTypeIsSettedCorrectly(): void
    {
        $character_type = new CharacterType(null, 'label', 'desc', 'media_path');

        $character_type->setId(1);
        $character_type->setLabel('new label');
        $character_type->setDescription('new desc');
        $character_type->setMedia_path('new media_path');

        $this->assertEquals($character_type->getId(), 1);
        $this->assertEquals($character_type->getLabel(), 'new label');
        $this->assertEquals($character_type->getDescription(), 'new desc');
        $this->assertEquals($character_type->getMedia_path(), 'new media_path');
    }
}