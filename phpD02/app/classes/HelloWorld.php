<?php


namespace App\classes;

// namespace AKTA class er jonno virtual directory toiri kore..

class HelloWorld
{
    public $message;
    public $name;
    public $firstName;
    public $lastName;
    public $firstNumber;
    public $secondNumber;

    public function __construct() //php er built in method // auto call hoy..alada kore call korte hoy na..
    {
        $this->message = 'Hello World';
        $this->firstNumber = 10;
        $this->secondNumber = 20;
    }

    public function index()     //amader banano method
    {
        //echo $this->message;

        /*
            * variable --> memory location er address.
                * Major Rules
                    * Start with $
                    * a-z, A-Z, 0-9, _, !(-#%^&)
                    * No number in start
                * Standard Rules
                    * Small letter
                    * Meaning full
                    * Readable
            * operator
                * Arithmatic Operator: +,-,*,/,%,++,--,(-)
                * Assignment Operator: =, +=, -=, *=, /=, %=
                * Conditional Operator: >, >=, <,<=,==,!=,===,!==
                * Logical Operator: &&, ||, !
            * statement
            * array
        */

        //  variable

//        /*$this->name = "BASIS";
//        $this->name .= "SEIP";
//        $this->name .= "PHP";
//        echo $this->name;
//
//        $this->firstName = "\r\nBasis";
//        $this->lastName = "SEIP";
//
//        echo $this->firstName .' '. $this->lastName;
//        echo '$this->firstName';
//        echo "$this->firstName";   // "" variable dhorte pare*/

        // operator

        /*echo $this->firstNumber + $this->secondNumber;
        echo '<br>';
        echo $this->firstNumber - $this->secondNumber;
        echo '<br>';
        echo $this->firstNumber * $this->secondNumber;
        echo '<br>';
        echo $this->firstNumber / $this->secondNumber;
        echo '<br>';
        echo $this->firstNumber % $this->secondNumber;
        echo '<br>';*/

        echo $this->firstNumber;
        echo '<br>';
        echo $this->firstNumber++;
        echo '<br>';
        echo $this->firstNumber;
        echo '<br>';
        echo $this->firstNumber;
        echo '<br>';








    }
}

//     $this --> own class object.$this diye dhorte hobee...

// ".=" --> concatanation operator