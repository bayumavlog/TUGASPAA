<?php
echo "\n        __     _ _    __  _   _       _    _     _ _     _ _      _    __ _  @BAYU MAVLOG
      | _  )  / \  \ /  /| | | |     |  \/  |   / \ \   / / |   / _ \ /  _ |
      | _ /  / _ \  V  / | | | |     | |\/| |  / _ \ \ / /| |  | | | | |  _
      | _  )/ __  \   |  | | | |     | |  | | /  _  \ V / | |_ | |_| |_|_| |
      | _ ///    \_\ _|   \ _ /      | |  | |/ /  \  \_/  |___| \ _ / \ _ _|\n";
echo "\n\033[34;1mNama \t: BAYU DWI DIRGANTARA\n";	
	sleep(2);
echo "\033[33;1mStambuk : F551 20 126\n";	
	sleep(2);
echo "\033[31;1mKelas \t: C\n";	
	sleep(2);
echo "\n\033[35;1mMasukkan Stambuk : ";
$NIM = trim(fgets(STDIN));
function iterasi($NIM)
	{
    for ($i = $NIM; $i >=1 ; $i--){
    echo "\033[36;1mAngka ke\t : ".$i."\n";} 
	}
	echo "\033[34;1mStambuk \t : ".$NIM."\n";
	echo iterasi($NIM);
	function rekursif_faktroial ($nilai){
	if ($nilai == 1){
		return $nilai;
	}else{
		return $nilai = rekursif_faktroial ($nilai-1);
	}
} 
function iterasi_faktorial ($nilai){
	$hasil = 1;
	for($i=0; $i<$nilai; $i++){
		$hasil = $hasil * ($i + 1);
	}
	return $hasil;
}
  {
    nilai:
	$nilai = $NIM;
		echo "\n\033[33;1mHasil Dari Stambuk \033[31;1m[$nilai]\033[33;1m Adalah Sebagai Berikut :\n";
		echo "\n\033[36;1m\t\t\t\t\t\tRekursif : ".rekursif_faktroial($nilai). "\n";
		echo "\n\t\t\t\t\t\tIterasi\t : ".iterasi_faktorial($nilai);
		echo"\n\n";
    }
?>
