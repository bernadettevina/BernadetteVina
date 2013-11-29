
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
	display ("http://www.sti-itb.org/BernadetteVina/csv.php","row");
	display ("http://www.sti-itb.org/BernadetteVina/csv.php","row");
	display ("http://www.sti-itb.org/BernadetteVina/xml.php","item");
	display ("http://www.sti-itb.org/BernadetteVina/sql.php","mahasiswa");
	display ("http://www.sti-itb.org/tugas-2-pemrograman-integratif/tugas2.php?db=data1", "data");
	display ("http://www.sti-itb.org/progin-raosanfady/show.php/?id=all","data");
	
	
?>