<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('./src/Models/News.php');

/**
 * Test suite for src/Models/News.php
 */
final class NewsTest extends TestCase
{
    private object $news;

    protected function setUp(): void
    {
        $this->news = new News(null, 1.2, 1648380682, 1648380682, 'bodytext', 'patch_note');
    }

    /**
     * Getters tests
     */
    public function testIsNewsIsGettedCorrectly(): void
    {
        $this->assertNotEmpty($this->news);
        $this->assertNull($this->news->getId());
        $this->assertEquals($this->news->getVersion(), 1.2);
        $this->assertEquals($this->news->getPublication_date(), 1648380682);
        $this->assertEquals($this->news->getUpdated_at(), 1648380682);
        $this->assertEquals($this->news->getBodytext(), 'bodytext');
        $this->assertEquals($this->news->getType(), 'patch_note');
    }

    /**
     * Setters tests
     */
    public function testIsNewsIsSettedCorrectly(): void
    {
        $this->news->setId(1);
        $this->news->setVersion(1.3);
        $this->news->setPublication_date(1648316485);
        $this->news->setUpdated_at(1648316485);
        $this->news->setBodytext('new bodytext');
        $this->news->setType('news');

        $this->assertEquals($this->news->getId(), 1);
        $this->assertEquals($this->news->getVersion(), 1.3);
        $this->assertEquals($this->news->getPublication_date(), 1648316485);
        $this->assertEquals($this->news->getUpdated_at(), 1648316485);
        $this->assertEquals($this->news->getBodytext(), 'new bodytext');
        $this->assertEquals($this->news->getType(), 'news');
    }
}