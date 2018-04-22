<?php 
$lang = getLang();
setLang('ru');
$message = $data['message'];
unset($data['message']);

$phonecall = false;
if(isset($data['phonecall'])) {
	$phonecall = true;
	unset($data['phonecall']);
}
?>
<table>
	<?php foreach($data as $k => $v){
		echo "<tr><td>" . T($k) . "</td><td><b>$v</b></td>";	
	} ?>
	<tr><td>Сообщение:</td></tr>
</table><br><b>
<?php echo $message; ?>
<?php if($phonecall) { ?></b><br>
<p><b>Клиент хочет, чтобы его проконсультировали по телефону <?php echo $data['phone'];?></b></p>
<?php } ?>

<?php setLang($lang); ?>