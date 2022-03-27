<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once('./src/Models/Review.php');

/**
 * Test suite for src/Models/Review.php
 */
final class ReviewTest extends TestCase
{
    /**
     * Getters tests
     */
    public function testIsReviewIsGettedCorrectly(): void
    {
        /* Create a new instance of review */
        $review = new Review(null, 1, 1, 'this is a title', 'this is a comment');

        $this->assertNotEmpty($review);
        $this->assertNull($review->getId());
        $this->assertEquals($review->getUser_id(), 1);
        $this->assertEquals($review->getCreation_id(), 1);
        $this->assertEquals($review->getTitle(), 'this is a title');
        $this->assertEquals($review->getComment(), 'this is a comment');
    }

    /**
     * Setters tests
     */
    public function testIsReviewIsSettedCorrectly(): void
    {
        $review = new Review(null, 1, 1, 'this is a title', 'this is a comment');

        $review->setId(1);
        $review->setUser_id(2);
        $review->setCreation_id(2);
        $review->setTitle('this is a new title');
        $review->setComment('this is a new comment');
        
        $this->assertEquals($review->getId(), 1);
        $this->assertEquals($review->getUser_id(), 2);
        $this->assertEquals($review->getCreation_id(), 2);
        $this->assertEquals($review->getTitle(), 'this is a new title');
        $this->assertEquals($review->getComment(), 'this is a new comment');
    }
}