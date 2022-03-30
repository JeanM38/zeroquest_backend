<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('./src/Models/FaqItem.php');

/**
 * Test suite for src/Models/FaqItem.php
 */
final class FaqItemTest extends TestCase
{
    private object $faq_item;

    protected function setUp(): void
    {
        $this->faq_item = new FaqItem(null, 'this is a question', 'this is an answer'); 
    }

    /**
     * Getters tests
     */
    public function testIsFaqItemIsGettedCorrectly(): void
    {
        $this->assertNotEmpty($this->faq_item);
        $this->assertNull($this->faq_item->getId());
        $this->assertEquals($this->faq_item->getQuestion(), 'this is a question');
        $this->assertEquals($this->faq_item->getAnswer(), 'this is an answer');
    }

    /**
     * Setters tests
     */
    public function testIsFaqItemIsSettedCorrectly(): void
    {
        $this->faq_item->setId(1);
        $this->faq_item->setQuestion('this is a new question');
        $this->faq_item->setAnswer('this is a new answer');

        $this->assertEquals($this->faq_item->getId(), 1);
        $this->assertEquals($this->faq_item->getQuestion(), 'this is a new question');
        $this->assertEquals($this->faq_item->getAnswer(), 'this is a new answer');
    }
}