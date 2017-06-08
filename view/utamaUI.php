<?php 

require_once 'View.php';
/**
* 
*/
class utamaUI extends View
{
	
	public function tampilkanBerita()
	{
		include_once 'model/ModelBerita.php';
		$uii = new Berita();
		
		$isi_berita = $uii->ambilBerita();
		
		include_once 'pages/beranda.php';
		$this->end();
	}
}

?>