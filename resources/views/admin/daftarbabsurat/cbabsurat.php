<?php 


class quran {

function db($sql){
	$db = new mysqli("localhost", "root", "", "quranpedia");
	if($db->connect_errno > 0){
    		die('Unable to connect to database [' . $db->connect_error . ']');
	}
	$db->query("SET NAMES 'utf8'"); 
	$db->query('SET CHARACTER SET utf8');

	if(!$result = $db->query($sql)){
    		die('There was an error running the query [' . $db->error . ']');
	}
		
	$return = array();
	while($row = $result->fetch_array()){
    		$return[] = $row;
	}
	$result->free();
	$db->close();
	return $return;	
}

function show_daftar(){
    mb_internal_encoding('UTF-8');
    $data = database("SELECT `id`, sub, namasubbab , arti, jumlah_ayat, tempat_turun FROM DaftarSurat");

    echo '<table class="table table-striped table-hover table-sm table-bordered">';
    echo '<thead><tr><th>No.</th><th>Surah</th><th>Arab</th><th>Arti</th><th>Jumlah Ayat</th></tr>Tempat turun</th><th>Action</th><tr></thead>';
    foreach($data as $d){
        echo '<tbody><tr><td>'.$d['index'].'</td><td><a href="quran?surat='.$d['index'].'&nama='.$d['surat_indonesia'].'">'.$d['surat_indonesia'].'</a></td><td>'.$d['surat_arab'].'</td></td></td><td>'.$d['arti'].'</td></td><td>'.$d['jumlah_ayat'].'</td><td>'.$d['tempat_turun'].'</td><td>
						<form action="" method="POST">
					<a href="daftarsurat/edit '.$d['index'].' " class="btn btn-primary btn-sm">Edit</a>
					</form>
				</td></tr></tbody>';
    }
    echo '</table>';
}
	
function daftar(){
	mb_internal_encoding('UTF-8'); 
	$data = $this->db("SELECT `id`, sub, namasubbab FROM daftarbab");
    echo '<table class="table table-striped table-hover table-sm table-bordered">';
    echo '<thead><tr><th>No.</th><th>Nama bab</th><th>Nama sub bab</th><th>Arti</th><th>Jumlah Ayat</th><th>Tempat Turun</th><th>Action</th></tr></thead>';

        foreach($data as $d){
        echo '<tbody><tr><td>'.$d['index'].'</td><td><a href="quran?surat='.$d['index'].'&nama='.$d['surat_indonesia'].'">'.$d['surat_indonesia'].'</a></td><td>'.$d['surat_arab'].'</td></td></td><td>'.$d['arti'].'</td></td><td>'.$d['jumlah_ayat'].'</td><td>'.$d['tempat_turun'].'</td><td>
						<form action="" method="POST">
					<a href="daftarsurat/edit '.$d['index'].' " class="btn btn-primary btn-sm">Edit</a>
					</form>
				</td></tr></tbody>';
    } 
    echo '</table>';
    // }
    // echo '</div>';
}
	
function ayat($surat, $nama=''){	
	mb_internal_encoding('UTF-8'); 
	if (($surat < 1) || ($surat > 114)) exit; 
	echo '<p><a href="http://localhost/webquranpedia/quran" class="fa fa-arrow-left"> Kembali ke Daftar Surat</a></p>';
	$data = $this->db("SELECT A.AyahText as arabic, B.AyahText as indonesia, audio FROM quran A LEFT OUTER JOIN indo B ON A.ID=B.ID WHERE A.SuraID = $surat");
	echo '<h3 class="bg-success" align="center">'.$nama.'</h3>';
	if(($surat > 1) && ($surat != 9)) {
		echo '<p class ="arabic_center" align="center" >'.mb_strtolower('بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ').'</p>';
		echo '<hr /><br>';
	}

	if($surat == 1)
	$ayat = 1;
	else
	$ayat = 1;
	foreach($data as $d){
        $str = mb_strtolower($d['arabic']);
        echo '<br/>';
  		echo '<p class ="arabic" align="right" style="font-size: 30px">'. $str .' ('.$this->angka($ayat).')'.'</p>';
		echo '<br><p class ="latin">'.'['.$ayat.'] '.$d['indonesia'] .'</p>';	
		echo '<br><audio controls>
  					<source src="public/assets/audio/'.$d['audio'].'" type="audio/mpeg">
					Your browser does not support the audio element.
				</audio>';	
        echo '<hr />';
        echo '<br />';
         
		$ayat++;	
	}
	echo '<p align="center"><a href="#" > ***Kembali ke Daftar Surat ***</a></p>';
}



function angka($number){
	$arabic_number = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');
	$jum_karakter = strlen($number);
	$temp = "";
	for($i = 0; $i < $jum_karakter; $i++){
		$char = substr($number, $i, 1);
		$temp .= $arabic_number[$char];
	}
	return '<span class="arabic_number">'.$temp.'</span>';
}


}

