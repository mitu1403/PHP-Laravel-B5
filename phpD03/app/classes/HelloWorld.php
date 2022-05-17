<?php


namespace App\classes;

// namespace AKTA class er jonno virtual directory toiri kore..

class HelloWorld
{
    public $firstNumber;
    public $secondNumber;
    public $thirdNumber;
    public $i;
    public $j;
    public $data = [];
    public $student;
    public $students;

    public function __construct() //php er built in method // auto call hoy..alada kore call korte hoy na..
    {
        $this->firstNumber = 10;
        $this->secondNumber = 20;
        $this->thirdNumber = 30;
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
                * Assignment Operator: =, +=, -=, *=, /=, %=, .=
                * Conditional Operator: >, >=, <,<=,==,!=,===,!==
                * Logical Operator: &&, ||, !
            * statement
            * array
        */
       /* echo '<br>';
        echo $this->firstNumber;
        echo '<br>';
        echo $this->firstNumber += $this->secondNumber;
        echo '<br>';
        echo $this->firstNumber -= $this->secondNumber;
        echo '<br>';
        echo $this->firstNumber *= $this->secondNumber;
        echo '<br>';
        echo $this->firstNumber /= $this->secondNumber;
        echo '<br>';
        echo $this->firstNumber %= $this->secondNumber;
        echo '<br>';
        echo $this->firstNumber .= $this->secondNumber;
        echo '<br>';
        echo '<br>';
        echo $this->firstNumber > $this->secondNumber;
        echo '<br>';
        echo $this->firstNumber < $this->secondNumber;
        echo '<br>';
        echo '<br>';
        echo gettype($this->firstNumber);
        echo '<br>';
        echo $this->firstNumber !== $this->secondNumber;
        echo '<br>';
        echo ($this->firstNumber > $this->secondNumber)  && ($this-> secondNumber > $this->thirdNumber);
        echo '<br>';
        echo ($this->firstNumber < $this->secondNumber)  && ($this-> secondNumber > $this->thirdNumber);
        echo '<br>';
        echo ($this->firstNumber > $this->secondNumber)  && ($this-> secondNumber < $this->thirdNumber);
        echo '<br>';
        echo ($this->firstNumber < $this->secondNumber)  && ($this-> secondNumber < $this->thirdNumber);
        echo '<br>';
        echo ($this->firstNumber > $this->secondNumber)  || ($this-> secondNumber > $this->thirdNumber);
        echo '<br>';
        echo ($this->firstNumber < $this->secondNumber)  || ($this-> secondNumber > $this->thirdNumber);
        echo '<br>';
        echo ($this->firstNumber > $this->secondNumber)  || ($this-> secondNumber < $this->thirdNumber);
        echo '<br>';
        echo ($this->firstNumber < $this->secondNumber)  || ($this-> secondNumber < $this->thirdNumber);
        echo '<br>';

        if($this->firstNumber > $this->secondNumber){
            echo "hello World!!";
        }
        else{
            echo "Basis SEip php";
        }

        if($this->firstNumber > $this->secondNumber){
            echo "hello World!!";
        }
        elseif ($this->secondNumber > $this->thirdNumber){
            echo "hello Bd";
        }
        elseif ($this->thirdNumber > $this->firstNumber){
            echo "hello dhaka";
        }
        else{
            echo "Basis SEip php";
        }

        switch ($this->firstNumber){
            case 10:
                echo "hello world";
                break;
            case 20:
                echo "hello wrld";
                break;
            case 30:
                echo "hello daka";
                break;
            default:
                echo "SEIP";
        }

        for ($this->i = 30 ;  $this->i > 10; $this->i--){
            $this->j = $this->i +1;
            echo $this->j.". hellow World";
            echo '<br>';
            if($this->i == 25){
                continue;
            }
        }

        $this->i = 10;
        while ($this->i < 15){
            echo '<br>';
            echo $this->i;
            echo '<br>';
            $this->i++;
        }

        $this->i = 10;
        do{
            echo $this->i.' ';
            $this->i++;
        }while($this->i < 15);


        $this->data = [10, 20, 30, "bitm", 'seip', 100.20, true, false];
//        echo $this->data[10];
        echo '<br>';
        foreach ($this->data as $olive => $nur) {
            echo $olive.' ';
        }// to print index number
        echo '<br>';
        foreach ($this->data as $olive) {
            echo $olive.' ';
        }// to print the values
        echo '<br>';
        foreach ($this->data as $key => $value){
            echo '<br>';
            echo 'index no: '.$key." value: ".$value;
        }
        echo '<br>';

        // "=>" = array object sign
        // "->" = php object sign

        $this->student=[
            'name' => 'rudit',
            'mobile'=>'123456',
            'email'=>'rodpu@gmail.com'
        ];
        echo $this->student['name'];*/
        $this->students=[
            0 =>[
                'name' => 'rudit',
                'mobile'=>'123456',
                'email'=>'rogrfgdpu@gmail.com'
            ],
            1 =>[
                'name' => 'rudit4564',
                'mobile'=>'123456',
                'email'=>'4564646464gh@gmail.com'
            ],
            2 =>[
                'name' => 'rudit566',
                'mobile'=>'123456',
                'email'=>'564646@gmail.com'
            ],
        ];
        echo $this->students[1]['name'];





    }
}

//     $this --> own class object.$this diye dhorte hobee...

// ".=" --> concatanation operator