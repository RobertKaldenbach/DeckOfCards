<?php
/**
 * Created by PhpStorm.
 * User: bobert
 * Date: 8/6/17
 * Time: 11:18 AM
 */

namespace AppBundle;


class Deck
{
    private $cards;
    private $suits;
    private $values;

    /**
     * Deck constructor.
     */
    public function __construct($type='test')
    { $this->cards=array();
        switch ($type){
            case 'test':
                $this->suits=array('A','B','C');
                $this->values = array ('1','2','3');
                break;
            case 'playing cards':
                $this->suits=array('Clubs','Diamonds','Hearts','Spades');
                $this->values=array('Ace','2','3','4','5','6','7','8','9','10','Jack','Queen','King');
                break;
        }
        foreach ($this->suits as $suit){
            foreach ($this->values as $value){
                array_push($this->cards,new Card($suit,$value));
            }
        }

    }

    /**Shows the entire deck in string format
     * @return string
     */
    public function show()
    { $return ='';
        foreach($this->cards as $card){
            $return .=  $card->getCard().', ';
        }
        return $return;
    }

    /**Returns the remaining number of Cards in the Deck
     * @return int
     */
    public function count()
    {
        $this->cards;
        return count($this->cards);
    }

    /**
     *Shuffles the cards
     */
    public function shuffle()
    {
        shuffle($this->cards);
    }

    /**Deals number of Cards from the deck
     * @param $numberOfCardsToDeal
     */
    public function dealCards($numberOfCardsToDeal)
    {
        for($i=0;$i<$numberOfCardsToDeal;$i++) {
            array_shift($this->cards);
        }
    }


}




