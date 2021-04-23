<?php

include "../model/db.php";

$chambreSimplePrix = 0;
$chambreDoubleePrix = 0;
$AppartementPrix = 0;
$BangloawPrix = 0;


$execution = new CRUD("chambre");

$GetchambreSimple = ["name" => "chambre simple"];
$GetchambreDouble = ["name" => "chambre double"];
$GetAppartement = ["name" => "appartement"];
$GetBangloaw = ["name" => "banglaow"];


$SetChambreSimple  = $execution->select("",$GetchambreSimple);
foreach($SetChambreSimple as $value){
    $chambreSimplePrix  = $value['Prix'];
}

$SethambreDouble  = $execution->select("",$GetchambreDouble);
foreach($SethambreDouble as $value){
    $chambreDoubleePrix   = $value['Prix'];
}

$SetAppartement = $execution->select("",$GetAppartement );
foreach($SetAppartement as $value){
    $AppartementPrix  = $value['Prix'];
}

$SetBangloaw  = $execution->select("",$GetBangloaw  );
foreach($SetBangloaw as $value){
    $BangloawPrix = $value['Prix'];
}


chambre_Simple:: $chambre_simple_prix = $chambreSimplePrix;
chambre_Double::$chambre_Double_prix = $chambreDoubleePrix;
appartement::$appartement_prix = $AppartementPrix;
bungalow::$bangloaw_prix = $BangloawPrix;

///////////////////// class chambre;





class chambre{
    public $name;
    public $type;
    public static $prix;

    public function __construct($name,$type)    {   
           $this->name = $name;
           $this->type = $type; 
    }
}

class chambre_Simple extends chambre{
    public static $chambre_simple_prix;
    public function __construct($name,$type)
    {   
           $this->name = $name;
           $this->type = $type; 

    }

    public function tarif_chambre($prix = 30){
        if($this->type =="Vue interieur")
        {
            return chambre_Simple::$chambre_simple_prix;
        }
        else if($this->type =="Vue exterieur"){
            chambre_Simple::$chambre_simple_prix += chambre_Simple::$chambre_simple_prix * 0.2;
            return chambre_Simple::$chambre_simple_prix;
        }
    }

}

class chambre_Double extends chambre{
    public static $chambre_Double_prix;

    public function __construct($name,$type)
    {   
           $this->name = $name;
           $this->type = $type; 
        //    $this->prix = $prix; 
    }
    public function tarif_chambre($type_lit){
        if($this->type == "lit double")
        {
            if($type_lit =="Vue interieur")
            {
                return chambre_Double::$chambre_Double_prix;
            }
            else if($type_lit =="Vue exterieur"){
                chambre_Double::$chambre_Double_prix+= chambre_Double::$chambre_Double_prix * 0.2;
                return chambre_Double::$chambre_Double_prix;
            }
        }
        else{
            return chambre_Double::$chambre_Double_prix;
        }
    }

}


class bungalow extends chambre{
    public static $bangloaw_prix;
    public function __construct($name,$type)
    {   
           $this->name = $name;
           $this->type = $type; 
    }

    public function tarif_chambre(){
        if($this->type =="Vue interieur")
        {
            return bungalow::$bangloaw_prix;
        }
        else if($this->type =="Vue exterieur"){
            bungalow::$bangloaw_prix+= bungalow::$bangloaw_prix * 0.2;
            return bungalow::$bangloaw_prix;
        }
    }

}



class appartement extends chambre{
    public static $appartement_prix;

    public function __construct($name,$type)
    {   
           $this->name = $name;
           $this->type = $type; 

    }

    public function tarif_chambre(){
        if($this->type =="Vue interieur")
        {
            return appartement::$appartement_prix ;
        }
        else if($this->type =="Vue exterieur"){
            appartement::$appartement_prix += appartement::$appartement_prix  * 0.2;
            return appartement::$appartement_prix ;
        }
    }

}





////////////// class pension

class penstion{

    // public $type;
    public $prix ;
    
    public function __construct($prix)
    {
        // $this->type = $type;
        $this->prix = $prix;
    }
}

class Complete extends penstion{
    public function __construct($prix = 80)
    {
        $this->prix = $prix;
    }
    function food(){
        return $this->prix;
    }
}
class Sans extends penstion{
    public function __construct($prix = 0)
    {
        // $this->type = $type;
        $this->prix = $prix;
    }
    function food(){
        return $this->prix * 0;
    }
}
class Demi extends penstion{
    public $type_demi;
    public function __construct($prix = 60)
    {
        $this->prix = $prix;
    }
    function food($demi){
        if($demi == "Petit dej/dej")
        {
            return $this->prix;
        }
        else if($demi == "Petit dej/din"){
            return $this->prix * 0.7;
        }
    }
}





class enfant{
    public $age;
    public function __construct($age)
    {
        $this->age = $age;
    }
}

class bebe extends enfant{
    public function __construct()
    {
        // $this->age = $age;
    }

    public function bebe_tarif($type_lit){
    $bebe_prix = 0;
        if($type_lit == "Add lit")
        {
         $chambe_simple = new Chambre_Simple("chambre simple" , "Vue interieur");
         $bebe_prix = $chambe_simple->tarif_chambre() * 0.25;
         return $bebe_prix;
        }
        else if($type_lit == "Without lit"){
            return $bebe_prix;
        }
    }
}

class enfants extends enfant{
    public function __construct()
    {
        // $this->age = $age;
    }

    public function enfants_tarif(){
         $chambe_simple = new Chambre_Simple("chambre simple" , "Vue interieur");
         $enfants_prix = $chambe_simple->tarif_chambre() * 0.50;
        return $enfants_prix;
    }
}


class adulte extends enfant{
    public function __construct()
    {
        // $this->age = $age;
    }

    public function adulte_tarif($type_chambre){
        $chambe_simple = new Chambre_Simple("chambre simple" , "Vue interieur");
        $adulte_prix = 0;
        if($type_chambre == "Add Chambre")
        {
            $adulte_prix = $chambe_simple->tarif_chambre();
           return $adulte_prix;
        }
        else if($type_chambre == "Add Lit")
        {
            $adulte_prix = $chambe_simple->tarif_chambre() * 0.7;
            return $adulte_prix;
        }

    }
}






?>