<?php
/**
 * Created by PhpStorm.
 * User: bobert
 * Date: 8/6/17
 * Time: 10:39 AM
 */

namespace AppBundle;


class Card
{
    private $suit;
    private $value;

    /**
     * Card constructor.
     * @param string $suit
     * @param string $value
     */
    public function __construct($suit='',$value='')
    {

        $this->suit = $suit;
        $this->value = $value;
    }

    /**Returns the suit of the Card
     * @return string
     */
    public function getSuit()
    {
        return $this->suit;
    }

    /**Returns the Value of the Card
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**Returns the Value and String of the Card
     * @return string
     */
    public function getCard()
    {
        return($this->getValue().' of '.$this->getSuit());
    }
}
