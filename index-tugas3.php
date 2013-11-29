
<?php
echo "BernadetteVina STI. Dibuat oleh : Bernadette Vina(18211019) dan Stella Kurniawan(18211046)";
echo '<p></p>';
echo '<p></p>';
$x=0;
function display ($uri,$tag)
{
	global $x;
	if($x!=0){
		echo "Data $uri";
		
	}
	else {
		$x++;
	}
    $xml = file_get_contents($uri);
	//$xml = simplexml_load_file($uri);
	$element = new SimpleXMLElement($xml);?>
	
	<table border="1"><br>
        <caption><b> <?php echo " Tabel " . $element -> getName() . "<br>"; ?> </b></caption>
		<tr> <?php foreach ($element -> children() -> children as $child) { ?>
		<th> <?php echo $child->getName(); ?> </th>
		<?php } ?> </tr>
		<?php
			foreach ($element ->children() as $child) 
			{
				foreach ($child-> children() as $r) :?>
				<td> <?php echo $r . "<br>"; ?></td>
				<?php endforeach;
				?>
				</tr>
				<?php echo '<p></p>';
				echo '<p></p>';
			}
} ?>

<?php /*$dom = new DomDocument();
$dom -> load($uri);
$data = $dom->getElementsByTagName($tag);
    echo( "<table border=\"1\" cellpading=\"3\"><tr>");
	$n = 0;
foreach($data as $node)
{ 
    if($n % 3 == 0) { echo '<tr>'; }
    echo( "<td>". $node -> textContent . "<td>");
    if(++$n % 3 == 0) { echo '</tr>'; }
}
echo( "</tr></table>");*/
	/*display ("http://localhost/BernadetteVina/csv.php","row");
	display ("http://localhost/BernadetteVina/csv.php","row");
	display ("http://localhost/BernadetteVina/xml.php","item");
	display ("http://localhost/BernadetteVina/sql.php","mahasiswa");
	display ("http://localhost/18211010-18211035/progin.xml","mahasiswa");
	display ("http://localhost/18211037/RestWebService/data/shortlist.xml","item");
	display ("http://localhost/BintangAdinandra/menu.xml","mymenu");
	display ("http://localhost/ConvertXML/database_collection/xmldb.xml" ,"pasien");
	display ("http://localhost/II3160-18211003-18211050/datasql.xml", "row");
	display ("http://localhost/II3160-18211003-18211050/Menu.xml", "Nasi");
	display ("http://localhost/II3160-18211003-18211050/output.xml", "row");
	display ("http://localhost/II3160--Pemrograman-Integratif-/DaftarIdol.xml", "Idol");
	display ("http://localhost/II3160-Tugas1-Tugas2/tab2.xml", "mhs");
	display ("http://localhost/II3160-Tugas1-Tugas2/csvoutput.xml", "kantor");
	display ("http://localhost/IPT-Assignments/data1.xml", "Anggota");
	display ("http://localhost/IPT-Assignments/data2.xml", "data_pesanan");
	display ("http://localhost/IPT-Assignments/data3.xml", "Baris");
	display ("http://localhost/Pemrograman_integratif/output.xml", "mahasiswa");
	display ("http://localhost/Pemrograman-Intergratif/dbxml.xml", "genre");
	display ("http://localhost/Pemrograman-Intergratif/myData.xml", "ticket");
	display ("http://localhost/progin/contoh.xml", "country");
	display ("http://localhost/progin-raosanfady/data.xml", "data");
	display ("http://localhost/Progint/data/sqltoxml.xml", "buku");
	display ("http://localhost/Protif/Protif/converter/mencari/buku.xml", "home");
	display ("http://localhost/Protif/Protif/converter/mencari/daftarbuku.xml", "buku");
	display ("http://localhost/Protif/Protif/database/rumah.xml", "home");
	display ("http://localhost/testPHP2/test.xml", "tabel_1");
	display ("http://localhost/tugas-2-pemrograman-integratif/data3.xml", "mahasiswa");
	display ("http://localhost/web-service/csvtoxml.xml", "siswa");
	display ("http://localhost/web-service/datasiswa.xml", "siswa");
	display ("http://localhost/web-service/sqltoxml.xml", "siswa");
	display ("http://localhost/Workspace/datasql.xml", "row");
	display ("http://localhost/Workspace/Menu.xml", "Nasi");
	display ("http://localhost/Workspace/output.xml", "row");*/
	
	display ("http://sti-itb.org/BernadetteVina/csv.php","row");
	display ("http://sti-itb.org/BernadetteVina/csv.php","row");
	display ("http://sti-itb.org/BernadetteVina/xml.php","item");
	display ("http://sti-itb.org/BernadetteVina/sql.php","mahasiswa");
	display ("http://sti-itb.org/18211010-18211035/progin.xml","mahasiswa");
	display ("http://sti-itb.org/18211037/RestWebService/data/shortlist.xml","item");
	display ("http://sti-itb.org/BintangAdinandra/menu.xml","mymenu");
	display ("http://sti-itb.org/ConvertXML/database_collection/xmldb.xml" ,"pasien");
	display ("http://sti-itb.org/II3160-18211003-18211050/datasql.xml", "row");
	display ("http://sti-itb.org/II3160-18211003-18211050/Menu.xml", "Nasi");
	display ("http://sti-itb.org/II3160-18211003-18211050/output.xml", "row");
	display ("http://sti-itb.org/II3160--Pemrograman-Integratif-/DaftarIdol.xml", "Idol");
	display ("http://sti-itb.org/II3160-Tugas1-Tugas2/tab2.xml", "mhs");
	display ("http://sti-itb.org/II3160-Tugas1-Tugas2/csvoutput.xml", "kantor");
	display ("http://sti-itb.org/IPT-Assignments/data1.xml", "Anggota");
	display ("http://sti-itb.org/IPT-Assignments/data2.xml", "data_pesanan");
	display ("http://sti-itb.org/IPT-Assignments/data3.xml", "Baris");
	display ("http://sti-itb.org/Pemrograman_integratif/output.xml", "mahasiswa");
	display ("http://sti-itb.org/Pemrograman-Intergratif/dbxml.xml", "genre");
	display ("http://sti-itb.org/Pemrograman-Intergratif/myData.xml", "ticket");
	display ("http://sti-itb.org/progin/contoh.xml", "country");
	display ("http://sti-itb.org/progin-raosanfady/data.xml", "data");
	display ("http://sti-itb.org/Progint/data/sqltoxml.xml", "buku");
	display ("http://sti-itb.org/Protif/Protif/converter/mencari/buku.xml", "home");
	display ("http://sti-itb.org/Protif/Protif/converter/mencari/daftarbuku.xml", "buku");
	display ("http://sti-itb.org/Protif/Protif/database/rumah.xml", "home");
	display ("http://sti-itb.org/testPHP2/test.xml", "tabel_1");
	display ("http://sti-itb.org/tugas-2-pemrograman-integratif/data3.xml", "mahasiswa");
	display ("http://sti-itb.org/web-service/csvtoxml.xml", "siswa");
	display ("http://sti-itb.org/web-service/datasiswa.xml", "siswa");
	display ("http://sti-itb.org/web-service/sqltoxml.xml", "siswa");
	display ("http://sti-itb.org/Workspace/datasql.xml", "row");
	display ("http://sti-itb.org/Workspace/Menu.xml", "Nasi");
	display ("http://sti-itb.org/Workspace/output.xml", "row");
?>