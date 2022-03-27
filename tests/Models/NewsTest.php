<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('./src/Models/News.php');

/**
 * Test suite for src/Models/News.php
 */
final class NewsTest extends TestCase
{
    /**
     * Getters tests
     */
    public function testIsNewsIsGettedCorrectly(): void
    {
        /* Create a new instance of news */
        $news = new News(null, 1.2, 1648380682, 1648380682, 'bodytext', 'patch_note');

        $this->assertNotEmpty($news);
        $this->assertNull($news->getId());
        $this->assertEquals($news->getVersion(), 1.2);
        $this->assertEquals($news->getPublication_date(), 1648380682);
        $this->assertEquals($news->getUpdated_at(), 1648380682);
        $this->assertEquals($news->getBodytext(), 'bodytext');
        $this->assertEquals($news->getType(), 'patch_note');
    }

    /**
     * Setters tests
     */
    public function testIsNewsIsSettedCorrectly(): void
    {
        $news = new News(null, 1.2, 1648380682, 1648380682, 'bodytext', 'patch_note');

        $news->setId(1);
        $news->setVersion(1.3);
        $news->setPublication_date(1648316485);
        $news->setUpdated_at(1648316485);
        $news->setBodytext('new bodytext');
        $news->setType('news');

        $this->assertEquals($news->getId(), 1);
        $this->assertEquals($news->getVersion(), 1.3);
        $this->assertEquals($news->getPublication_date(), 1648316485);
        $this->assertEquals($news->getUpdated_at(), 1648316485);
        $this->assertEquals($news->getBodytext(), 'new bodytext');
        $this->assertEquals($news->getType(), 'news');
    }
}