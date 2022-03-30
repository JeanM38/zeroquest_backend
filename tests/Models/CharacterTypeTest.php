<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('./src/Models/CharacterType.php');

/**
 * Test suite for src/Models/CharacterType.php
 */
final class CharacterTypeTest extends TestCase
{
    private object $character_type;

    protected function setUp(): void
    {
        $this->character_type = new CharacterType(null, 'label', 'desc', 'media_path');
    }

    /**
     * Getters tests
     */
    public function testIsCharacterTypeIsGettedCorrectly(): void
    {
        $this->assertNotEmpty($this->character_type);
        $this->assertNull($this->character_type->getId());
        $this->assertEquals($this->character_type->getLabel(), 'label');
        $this->assertEquals($this->character_type->getDescription(), 'desc');
        $this->assertEquals($this->character_type->getMedia_path(), 'media_path');
    }

    /**
     * Setters tests
     */
    public function testIsCharacterTypeIsSettedCorrectly(): void
    {
        $this->character_type->setId(1);
        $this->character_type->setLabel('new label');
        $this->character_type->setDescription('new desc');
        $this->character_type->setMedia_path('new media_path');

        $this->assertEquals($this->character_type->getId(), 1);
        $this->assertEquals($this->character_type->getLabel(), 'new label');
        $this->assertEquals($this->character_type->getDescription(), 'new desc');
        $this->assertEquals($this->character_type->getMedia_path(), 'new media_path');
    }
}