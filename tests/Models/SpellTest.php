<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('./src/Models/Spell.php');

/**
 * Test suite for src/Models/Spell.php
 */
final class SpellTest extends TestCase
{
    /**
     * Getters tests
     */
    public function testIsSpellIsGettedCorrectly(): void
    {
        /* Create a new instance of spell */
        $spell = new Spell(null, 'label', 'desc', 'media_path', 1);

        $this->assertNotEmpty($spell);
        $this->assertNull($spell->getId());
        $this->assertEquals($spell->getLabel(), 'label');
        $this->assertEquals($spell->getDescription(), 'desc');
        $this->assertEquals($spell->getMedia_path(), 'media_path');
        $this->assertEquals($spell->getType(), 1);
    }

    /**
     * Setters tests
     */
    public function testIsSpellIsSettedCorrectly(): void
    {
        $spell = new Spell(null, 'label', 'desc', 'media_path', 1);

        $spell->setId(1);
        $spell->setLabel('new label');
        $spell->setDescription('new desc');
        $spell->setMedia_path('new media_path');
        $spell->setType(2);

        $this->assertEquals($spell->getId(), 1);
        $this->assertEquals($spell->getLabel(), 'new label');
        $this->assertEquals($spell->getDescription(), 'new desc');
        $this->assertEquals($spell->getMedia_path(), 'new media_path');
        $this->assertEquals($spell->getType(), 2);

    }
}