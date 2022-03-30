<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('./src/Models/Spell.php');

/**
 * Test suite for src/Models/Spell.php
 */
final class SpellTest extends TestCase
{
    private object $spell;

    protected function setUp(): void
    {
        $this->spell = new Spell(null, 'label', 'desc', 'media_path', 1);
    }

    /**
     * Getters tests
     */
    public function testIsSpellIsGettedCorrectly(): void
    {
        $this->assertNotEmpty($this->spell);
        $this->assertNull($this->spell->getId());
        $this->assertEquals($this->spell->getLabel(), 'label');
        $this->assertEquals($this->spell->getDescription(), 'desc');
        $this->assertEquals($this->spell->getMedia_path(), 'media_path');
        $this->assertEquals($this->spell->getType(), 1);
    }

    /**
     * Setters tests
     */
    public function testIsSpellIsSettedCorrectly(): void
    {
        $this->spell->setId(1);
        $this->spell->setLabel('new label');
        $this->spell->setDescription('new desc');
        $this->spell->setMedia_path('new media_path');
        $this->spell->setType(2);

        $this->assertEquals($this->spell->getId(), 1);
        $this->assertEquals($this->spell->getLabel(), 'new label');
        $this->assertEquals($this->spell->getDescription(), 'new desc');
        $this->assertEquals($this->spell->getMedia_path(), 'new media_path');
        $this->assertEquals($this->spell->getType(), 2);

    }
}