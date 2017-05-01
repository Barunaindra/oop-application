<?php

class kendaraan
{
	protected $jumlahRoda;
	public $warna;
    public $bahanBakar;
	public $harga;
	private $merek;
	public $tahunPembuatan;

	function statusHarga()
	{
		if ($this->harga >50000000) $status = 'Mahal';
		else $status = 'Murah';
		return $status;
	}
	function setMerek($x)
	{
		$this->merek = $x;
	}

	function setHarga($x)
	{
		$this->harga = $x;
	}

	function bacaMerek()
	{
		return $this->merek;
	}

	function bacaHarga()
	{
		return $this->harga;
	}

	function _construct($x,$y)
	{
		$this->merek = $x;
		$this->harga = $y;
	}
}

 class keretaApi extends kendaraan
    {
    	public $jumGerbong;

    	function setGerbong ($x)
    	{
    		$this->jumGerbong = $x;
    	}
    	function bacaGerbong()
    	{
    		return $this->jumGerbong;
    	}
    }


?>

<?php
class pesawat extends kendaraan  
{
	private $tinggiMaks;       
	private $KecepatanMaks;


	function setTinggiMaks ($x)  
	{
		$this->TinggiMaks=$x;
	}
	function setKecepatanMaks ($x)
	{
		$this->KecepatanMaks=$x;
	}
	function bacaTinggiMaks ()  
	{
		return $this->TinggiMaks;
	}
	function bacaKecepatanMaks () 
	{
		return $this->KecepatanMaks;
	}
	function biayaOperasional() 
	{
	 if($this->TinggiMaks>5000 && $this->kecepatanMaks>800){
      $biayaOperasional=$this->harga-($this->harga*0.3);
	 }
	 else if ($this->TinggiMaks>3000 && $this->TinggiMaks<5000 && $this->kecepatanMaks>500 && $this->kecepatanMaks<800) {
      $biayaOperasional=$this->harga-($this->harga*0.2);
	 }
	 else if($this->TinggiMaks<3000 && $this->kecepatanMaks<500){
      $biayaOperasional=$this->harga-($this->harga*0.1);
	 }
	 else{
	 	$biayaOperasional=$this->harga-($this->harga*0.05);
	 }
	 return $biayaOperasional;
	}
}
$pesawat1 = new pesawat () ;             
$pesawat1->setMerek('Boeing 737');
$pesawat1->setHarga(2000000000);
$pesawat1->setTinggiMaks(7500);
$pesawat1->setKecepatanMaks(650);
echo 'Biaya operasi pesawat '.$pesawat1->bacaMerek().' dengan harga Rp '.$pesawat1->bacaHarga().' yang memiliki tinggi maksimum '.$pesawat1->bacaTinggiMaks().' feet dan kecepatan maksimum '.$pesawat1->bacaKecepatanMaks().' km/jam adalah '.$pesawat1->biayaOperasional()."<br>";

$pesawat2 = new pesawat () ;
$pesawat2->setMerek('Boeing 747');
$pesawat2->setHarga(3500000000);
$pesawat2->setTinggiMaks(5800);
$pesawat2->setKecepatanMaks(750);
echo 'Biaya operasi pesawat '.$pesawat2->bacaMerek().' dengan harga Rp '.$pesawat2->bacaHarga().' yang memiliki tinggi maksimum '.$pesawat2->bacaTinggiMaks().' feet dan kecepatan maksimum '.$pesawat2->bacaKecepatanMaks().' km/jam adalah '.$pesawat2->biayaOperasional()."<br>";

$pesawat3 = new pesawat () ;
$pesawat3->setMerek('Cassa');
$pesawat3->setHarga(750000000);
$pesawat3->setTinggiMaks(3500);
$pesawat3->setKecepatanMaks(500);
echo 'Biaya operasi pesawat '.$pesawat3->bacaMerek().' dengan harga Rp '.$pesawat3->bacaHarga().' yang memiliki tinggi maksimum '.$pesawat3->bacaTinggiMaks().' feet dan kecepatan maksimum '.$pesawat3->bacaKecepatanMaks().' km/jam adalah '.$pesawat3->biayaOperasional()."<br>";

?>
