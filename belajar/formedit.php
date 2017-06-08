<?php 
$id = $_GET['id'];
echo $id;

$host = 'localhost';
$dbname = 'sisfonews';
$username = 'root';
$password = 'satu';
$db = '';


try {
     $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
     die("Connection error: " . $exception->getMessage());
}
try {
	$stmt = $db->prepare("SELECT * FROM berita WHERE id_berita=:id");
$stmt->bindparam(":id",$id);
 	$stmt->execute();
	$data = $stmt->fetch();
 } catch (PDOException $exception){
     die("Connection error: " . $exception->getMessage());
}
 try {
 	$stmt2 = $db->prepare("SELECT * FROM kategori");
	$stmt2->execute();
	$data2 = $stmt2->fetchAll();
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}


?>

<form action="ubah_berita.php?id=<?php echo $id ?>" method='POST'>
			  
	<label for='judul' >Judul</label> <br>
		<input type="text" name="judul" value="<?php echo $data['judul']; ?>"><br>
			  
	<label for="isi">Isi</label><br>
		<textarea class="form-control" name="isi" id="isi" cols="30" rows="10"><?php echo $data['isi']; ?></textarea><br>
			   
	<label for="kategori" >Kategori</label><br>
		<select name="kategori" id="kategori">
		<?php foreach ($data2 as $kat): ?>
			<option value= "<?php echo $kat['id_kategori'];?>" 
			
			<?php 
			if ($kat['id_kategori']==$data['kategori_id']) 
			echo "selected";
			?>
			
			> <?php echo $kat['nama_kategori']; ?> </option>
		<?php endforeach ?>
		<br>		
		</select> <br>
	<br>
	<input type="submit" value ="submit">
</form>

