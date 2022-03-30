<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('./src/Models/User.php');

/**
 * Test suite for src/Models/User.php
 */
final class UserTest extends TestCase
{
    private object $user;

    protected function setUp(): void
    {
        $this->user = new User(null, "Vazek", "jmionnet@emagineurs.com", "pass");
    }

    /**
     * Getters tests
     */
    public function testIsUserIsGettedCorrectly(): void
    {
        $this->assertNotEmpty($this->user);
        $this->assertNull($this->user->getId());
        $this->assertEquals($this->user->getPseudo(), "Vazek");
        $this->assertEquals($this->user->getEmail(), "jmionnet@emagineurs.com");
        $this->assertEquals($this->user->getPassword(), "pass");
        $this->assertEquals($this->user->getTime_played(), 0);
        $this->assertEquals($this->user->getGold_earned(), 0);
        $this->assertEquals($this->user->getCompleted_chapters(), 0);
    }

    /**
     * Setters tests
     */
    public function testIsUserIsSettedCorrectly(): void
    {
        $this->user->setId(1);
        $this->user->setPseudo("VazekLeRetour");
        $this->user->setEmail("jmionnet@emagineurs.fr");
        $this->user->setPassword("passSecured");
        $this->user->setTime_played($this->user->getTime_played() + 1);
        $this->user->setGold_earned($this->user->getGold_earned() + 200);
        $this->user->setCompleted_chapters($this->user->getCompleted_chapters() + 1);

        $this->assertEquals($this->user->getPseudo(), "VazekLeRetour");
        $this->assertEquals($this->user->getEmail(), "jmionnet@emagineurs.fr");
        $this->assertEquals($this->user->getPassword(), "passSecured");
        $this->assertEquals($this->user->getTime_played(), 1);
        $this->assertEquals($this->user->getGold_earned(), 200);
        $this->assertEquals($this->user->getCompleted_chapters(), 1);
    }
}