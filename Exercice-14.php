<?php

class Car{
    //Attributs
    private string $brand;
    private string $model;
    private string $type;

    //__construct
    public function __construct($brand, $model, $type){

        $this->brand = $brand;
        $this->model = $model;
        $this->type = $type;
    }

    //getter and setter
    public function getData(){
        return $this->brand . $this->model . " et est un véhicule " . $this->type . " . <br>" ;
    }
}

class ElecCar extends Car{

    private string $autonomy;

    public function __construct($brand, $model, $type, string $autonomy){
        $this->brand = $brand;
        $this->model = $model;
        $this->type = $type;
        $this->autonomy = $autonomy;
    }
    
    public function getData(){
        return $this->brand . $this->model . ", autonomie de ". $this->autonomy ." et est un véhicule " . $this->type . " . <br>" ;
    }
}


$v1 = new Car("Peugeot"," 408", "diesel");
$ve1 = new ElecCar("BMW","I3","éléctrique",100);

echo $v1->getData();
echo $ve1->getData();
?>