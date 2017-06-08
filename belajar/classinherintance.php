<?php 
class bunga {
	public $nama;
	public $warna;

	public function mekar{
		return "Bunga ini sangat indah ";
	}
}
		class tulip extends bunga {
			public $jenis;

			public function kembang{
				return "Bunga tulip mekar sepanjang hari ";
			}
		}
	
?>