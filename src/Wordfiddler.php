<?php

/**
 * This is an example of a simple class with an internal state, which uses a constructor to get started. They don't have
 * to work like this, but this is a common concept.
 */

class Wordfiddler
{
    /**
     * This is a private property of the class, that we are calling word.
     * Private means only methods in this class can access it.
     */
    private string $word;

    /**
     * This odd __construct method is a special method that is called when you create a new object from this class.
     * It is called a constructor, and it is used to set up the object. In this case we've said it accepts a string
     * that we're calling $word, and then we assign it to our private property mentioned above.
     */
    public function __construct(string $word)
    {
        $this->word = $word;
    }

    /**
     * And now we have a bunch of simple methods to illustrate how we can interact with our object.
     */
    public function upperCase(): string
    {
        return strtoupper($this->word);
    }

    public function lowerCase(): string
    {
        return strtolower($this->word);
    }

    public function giveMeItTwiceForSomeReason(): string
    {
        return $this->word . $this->word;
    }

    public function reverseIt(): string
    {
        return strrev($this->word);
    }
}