<?php 
// Send Message 
if (isset($_POST['kirim'])) {
	$isi = $_POST['isi'];
	$nomertujuan = $_POST['nomertujuan'];

	$my_apikey = "APIKEY ANDA"; 
	$destination = $nomertujuan; 
	$message = $isi; 
	$api_url = "http://panel.apiwha.com/send_message.php"; 
	$api_url .= "?apikey=". urlencode ($my_apikey); 
	$api_url .= "&number=". urlencode ($destination); 
	$api_url .= "&text=". urlencode ($message); 
	$my_result_object = json_decode(file_get_contents($api_url, false)); 
	echo "<br>Result: ". $my_result_object->success; 
	echo "<br>Description: ". $my_result_object->description;
	echo "<br>Code: ". $my_result_object->result_code; 
}
?>