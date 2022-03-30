<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('./src/Models/Review.php');

/**
 * Test suite for src/Models/Review.php
 */
final class ReviewTest extends TestCase
{
    private object $review;

    protected function setUp(): void
    {
        $this->review = new Review(null, 1, 1, 'this is a title', 'this is a comment');
    }

    /**
     * Getters tests
     */
    public function testIsReviewIsGettedCorrectly(): void
    {
        $this->assertNotEmpty($this->review);
        $this->assertNull($this->review->getId());
        $this->assertEquals($this->review->getUser_id(), 1);
        $this->assertEquals($this->review->getCreation_id(), 1);
        $this->assertEquals($this->review->getTitle(), 'this is a title');
        $this->assertEquals($this->review->getComment(), 'this is a comment');
    }

    /**
     * Setters tests
     */
    public function testIsReviewIsSettedCorrectly(): void
    {
        $this->review->setId(1);
        $this->review->setUser_id(2);
        $this->review->setCreation_id(2);
        $this->review->setTitle('this is a new title');
        $this->review->setComment('this is a new comment');
        
        $this->assertEquals($this->review->getId(), 1);
        $this->assertEquals($this->review->getUser_id(), 2);
        $this->assertEquals($this->review->getCreation_id(), 2);
        $this->assertEquals($this->review->getTitle(), 'this is a new title');
        $this->assertEquals($this->review->getComment(), 'this is a new comment');
    }
}