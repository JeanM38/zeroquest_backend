<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('./src/Models/FaqItem.php');

/**
 * Test suite for src/Models/FaqItem.php
 */
final class FaqItemTest extends TestCase
{
    /**
     * Getters tests
     */
    public function testIsFaqItemIsGettedCorrectly(): void
    {
        /* Create a new instance of faqItem */
        $faqItem = new FaqItem(null, 'this is a question', 'this is an answer');
        $this->assertNotEmpty($faqItem);
        $this->assertNull($faqItem->getId());
        $this->assertEquals($faqItem->getQuestion(), 'this is a question');
        $this->assertEquals($faqItem->getAnswer(), 'this is an answer');
    }

    /**
     * Setters tests
     */
    public function testIsFaqItemIsSettedCorrectly(): void
    {
        $faqItem = new FaqItem(0, 'this is a question', 'this is an answer');

        $faqItem->setId(1);
        $faqItem->setQuestion('this is a new question');
        $faqItem->setAnswer('this is a new answer');

        $this->assertEquals($faqItem->getId(), 1);
        $this->assertEquals($faqItem->getQuestion(), 'this is a new question');
        $this->assertEquals($faqItem->getAnswer(), 'this is a new answer');
    }
}