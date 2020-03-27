<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Fungsi
 */
class Fungsi
{
	function __construct()
    {
        $this->load->model('Pembelian_model');
        $this->load->model('Pemesanan_model');
    }


	// buat link
	function link($s) {
		$d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','<','>');
		$s = strtolower($s);
		$s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d    
		$s = str_replace('  ', ' ', $s); // Ganti dobel spasi dengan tanda -
		$s = str_replace(' ', '-', $s); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
		
		return $s;
	}

	function ceklink($c) {    
		$b = array ('/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','<','>');
		$c = strtolower($c);
		$c = str_replace($b, '', $c);
		$c = str_replace('  ', '', $c);
		$c = str_replace(' ', '-', $c);
		return $c;
	}

	function potong_kalimat($kalimat) {
	    $teks = strip_tags($kalimat);
	    $teks = substr($teks,0,300);
	    $teks = substr($teks,0,strrpos($teks," "));

	    return $teks;
	}
							
	function jam($clock){
		//$waktu = substr($clock,6,2);
		$menit = substr($clock,3,2);
		$jam = substr($clock,0,2);
		//if ($waktu == "PM"){
			//$jam2 = $jam + 12;
		//}
		// return $jam.':'.$menit.' WIB';		 
		return $jam.':'.$menit;		 
	}

	//buat tanggal
	public function getBulan_id($bln){
		switch ($bln){
			case 1: 
				return "Januari";
				break;
			case 2:
				return "Februari";
				break;
			case 3:
				return "Maret";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Juni";
				break;
			case 7:
				return "Juli";
				break;
			case 8:
				return "Agustus";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "Oktober";
				break;
			case 11:
				return "November";
				break;
			case 12:
				return "Desember";
				break;
		}
	}

}

?>
