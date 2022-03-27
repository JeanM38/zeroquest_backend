<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('./src/Models/User.php');

/**
 * Test suite for src/Models/User.php
 */
final class UserTest extends TestCase
{
    /**
     * Getters tests
     */
    public function testIsUserIsGettedCorrectly(): void
    {
        /* Create a new instance of user */
        $user = new User(null, "Vazek", "jmionnet@emagineurs.com", "pass");

        $this->assertNotEmpty($user);
        $this->assertNull($user->getId());
        $this->assertEquals($user->getPseudo(), "Vazek");
        $this->assertEquals($user->getEmail(), "jmionnet@emagineurs.com");
        $this->assertEquals($user->getPassword(), "pass");
        $this->assertEquals($user->getTime_played(), 0);
        $this->assertEquals($user->getGold_earned(), 0);
        $this->assertEquals($user->getCompleted_chapters(), 0);
    }

    /**
     * Setters tests
     */
    public function testIsUserIsSettedCorrectly(): void
    {
        $user = new User(null, "Vazek", "jmionnet@emagineurs.com", "pass");

        $user->setId(1);
        $user->setPseudo("VazekLeRetour");
        $user->setEmail("jmionnet@emagineurs.fr");
        $user->setPassword("passSecured");
        $user->setTime_played($user->getTime_played() + 1);
        $user->setGold_earned($user->getGold_earned() + 200);
        $user->setCompleted_chapters($user->getCompleted_chapters() + 1);

        $this->assertEquals($user->getPseudo(), "VazekLeRetour");
        $this->assertEquals($user->getEmail(), "jmionnet@emagineurs.fr");
        $this->assertEquals($user->getPassword(), "passSecured");
        $this->assertEquals($user->getTime_played(), 1);
        $this->assertEquals($user->getGold_earned(), 200);
        $this->assertEquals($user->getCompleted_chapters(), 1);
    }
}