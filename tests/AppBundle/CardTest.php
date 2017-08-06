<?php
/**
 * Created by PhpStorm.
 * User: bobert
 * Date: 8/6/17
 * Time: 10:35 AM
 */


use AppBundle\Card;
use PHPUnit\Framework\TestCase;

class CardTest extends TestCase
{
    function testNewCardDefault(){

        $card = new Card();
        $this->assertEmpty($card->getSuit());
        $this->assertEmpty($card->getValue());
    }

    function testSetNewCard(){
        $card=new Card('Clubs','King');
        $this->assertEquals('Clubs',$card->getSuit());
        $this->assertEquals('King',$card->getValue());
    }

    function testShowCard(){
        $card = new Card('Clubs','King');
        $this->assertEquals('King of Clubs',$card->getCard());
    }

}
