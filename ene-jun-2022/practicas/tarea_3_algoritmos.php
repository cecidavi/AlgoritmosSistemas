<?php

class tarea_3_algoritmos
{
    public $top = -1;
    public $arreglo =array();
    function push($x){
        $this->top++;
        $this->arreglo[$this->top]=$x;
    }

    function insert_sort(){
        for ($i=0; $i <count($this->arreglo) ; $i++) 
        { 
            $x=$this->arreglo[$i];
            $y=$i-1;
            while ($y >= 0 && $this->arreglo[$y] > $x){ 
                $this->arreglo[$y+1]=$this->arreglo[$y];
                $y--;
            }
            $this->arreglo[$y+1]=$x;   
        }
    }
    function imprimir(){
        for($i=$this->top; $i>=0; $i--)
        {
        if($this->arreglo[$i]%2==0)
            {
                echo $this->arreglo[$i]." ";
            }
        }
    } 
}

$traea3 = new tarea_3_algoritmos();
$tarea3->push(4);
$traea3->push(324);
$traea3->push(345);
$traea3->push(1);
$traea3->push(3564);
$traea3->push(3437);
$traea3->push(3);
$traea3->push(45);
$traea3->push(32);
$traea3->push(34);
$traea3->push(2);
$traea3->insert_sort();
$traea3->imprimir();

?>