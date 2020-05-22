<?php 


class bab {

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

// function show_daftar(){
//     mb_internal_encoding('UTF-8');
//     $data = database("SELECT `id`, category_id, namasubbab , sub, name FROM DaftarSurat, category WHERE category_id=name");

//      echo '<br';
//     echo '<h2>Pemetaan Bab</h2>';
//     echo '<table class="table table-striped table-hover table-sm table-bordered">';
//     echo '<thead><tr><th>No.</th><th>Nama bab</th><th>Nama subbab</th><th>sub</th></tr></thead>';
//     foreach($data as $d){
//         echo '<tbody><tr><td>'.$d['id'].'</td><td><a href="bab?sub='.$d['id'].'&nama='.$d['name'].'">'.$d['sub'].'</a></td><td>'.$d['namasubbab'].'</td></td></tr></tbody>';
//     }
//     echo '</table>';
// }
	
function daftar(){
	mb_internal_encoding('UTF-8'); 
	$data = $this->db("SELECT daftarbab.id, category.name, daftarbab.namasubbab,daftarbab.id, daftarbab.sub FROM category JOIN daftarbab ON category.id = daftarbab.category_id");
	 echo '<h2>Pemetaan Bab</h2>';
     echo '<table class="table table-striped table-hover table-sm table-bordered">';
    echo '<thead><tr><th>No.</th><th width= 20%>Nama bab</th><th>Nama subbab</th><th>Sub</th></tr></thead>';

        foreach($data as $d){
        echo '<tbody><tr><td>'.$d['id'].'</td>         
        	<td width="30px">'.$d['name'].'</td>      
        	<td>'.$d['namasubbab'].'</td>      
        	<td><a href="bab?sub='.$d['id'].'&nama='.$d['sub'].'">'.$d['sub'].'</a></td>       </td></tr></tbody>';
    }
    echo '</table>';
    // }
    // echo '</div>';
}


	
function ayat($sub, $nama=''){	
	mb_internal_encoding('UTF-8'); 
	if (($sub < 1) || ($sub > 1140)) exit; 
	echo '<p><a href="http://localhost/webquranpedia/quran" class="fa fa-arrow-left"> Kembali ke Daftar Bab</a></p>';
	$data = $this->db("SELECT quran.AyahText as arabic, indo.AyahText as indonesia, audio, daftarbabsurat.daftarsurat_id FROM quran LEFT OUTER JOIN indo ON A.id=B.id WHERE daftarsurat.surat_indonesia=daftarbabsurat.daftarsurat_id, daftarbabsurat.daftarbab_id=daftarbab.sub, daftarbabsurat.daftarsurat_id = quran.daftarsurat_id, daftarbabsurat.VerseID= quran.VerseID, daftarbabsurat.daftarbab_id=$sub");
	echo '<h3 class="bg-success" align="center">'.$nama.'</h3>';
	if(($sub > 1) && ($sub != 9)) {
		echo '<p class ="arabic_center" align="center" >'.mb_strtolower('بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ').'</p>';
		echo '<hr /><br>';
	}

	if($sub == 1)
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
	echo '<p align="center"><a href="http://localhost/webquranpedia/quran" > ***Kembali ke Daftar Surat ***</a></p>';
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

