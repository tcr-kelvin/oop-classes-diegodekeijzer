<?php

class auto{

	public $prijs;
	public $merk;
	public $kleur;
	public $Apkkeuring;
    public $klant;
	public $Kmstand;

	public function __construct($prijs,$merk,$kleur,$Apkkeuring,$klant,$Kmstand) {
		$this->prijs = $prijs;
		$this->Apkkeuring   = $Apkkeuring;
		$this->merk          = $merk;
		$this->kleur         = $kleur;
		$this->klant         = $klant;
		$this->Kmstand       = $Kmstand;
	}
}


	$auto = new auto(2000,"honda","groen",12-1-2019,"Diego",122010);
//	echo $auto->merk;
//	echo $auto->id;
//	echo $auto->kleur;
//	echo $auto->Apkkeuring;
//	echo $auto->klant;
//	echo $auto->Kmstand;

class klant{

	public $naam;
	public $auto;
	public $adres;
	public $geboortedatum;
	public $telefoonnummer;
	

	public function __construct($naam,$telefoonnummer,$adres,$auto,$geboortedatum) {
		$this->naam = $naam;
		$this->auto = $auto;
		$this->telefoonnummer  = $telefoonnummer;
		$this->adres = $adres;
		$this->geboortedatum = $geboortedatum;

	}

}


$klant = new klant(1,122,"rotterdam","honda","Diego",122010);
//echo $klant->adres;
//echo $klant->id;
//echo $klant->auto;
//echo $klant->geboortedatum;
//
//echo $klant->telefoonnummer;
var_dump($auto,$klant);
