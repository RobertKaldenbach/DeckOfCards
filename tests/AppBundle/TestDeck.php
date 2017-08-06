<?php
/**
 * Created by PhpStorm.
 * User: bobert
 * Date: 8/6/17
 * Time: 11:14 AM
 */


use AppBundle\Deck;
use PHPUnit\Framework\TestCase;

class TestDeck extends TestCase
{
    function testDeckCreation(){
        $deck = new Deck();
        $this->assertNotEmpty($deck);
    }

    function testShowDeck(){
        $deck = new Deck();
        $this->assertEquals('1 of A, 2 of A, 3 of A, 1 of B, 2 of B, 3 of B, 1 of C, 2 of C, 3 of C, ',$deck->show());
    }

    function testCountDeck(){
        $deck = new Deck();
        $this->assertEquals(9,$deck->count());
    }

    function testShuffleDeck(){
        $deck = new Deck();
        $deck->shuffle();
        $this->assertNotEquals('1 of A, 2 of A, 3 of A, 1 of B, 2 of B, 3 of B, 1 of C, 2 of C, 3 of C, ',$deck->show());
    }

    function testDealCards(){
        $deck = new Deck();
        $deck->dealCards('2');
        $this->assertEquals(7,$deck->count());
    }

}
