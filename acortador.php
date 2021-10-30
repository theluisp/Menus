<?php
class GoogleURL
{
 
private $apiURL = 'https://www.googleapis.com/urlshortener/v1/url';
 
function __construct($apiKey)
{
  //creamos la url de solicitud con nuestra key pública
  $this->apiURL = $this->apiURL . '?key=' . $apiKey;
}
 
//convierte una url larga en una corta
public function encode($url)
{
  $data = $this->cURL($url, true);
  return isset($data->id) ? $data->id : '' ;
}
 
//convierte una url corta en la real (larga)
public function decode($url)
{
  $data = $this->cURL($url, false);
  return isset($data->longUrl) ? $data->longUrl : '' ;
}
 
//enviamos y recogemos los datos del api de google
private function cURL($url, $post = true)
{
  $ch = curl_init();
  if ($post) {
   curl_setopt( $ch, CURLOPT_URL, $this->apiURL );
   curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json') );
   curl_setopt( $ch, CURLOPT_POST, true );
   curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode(array('longUrl' => $url)) );
  }
  else {
   curl_setopt( $ch, CURLOPT_URL, $this->apiURL . '&shortUrl=' . $url );
  }
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
  curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
  $json = curl_exec($ch);
  curl_close($ch);
  return (object) json_decode($json);
}
}

?>
<?php
include("acortador.php");
$api = new GoogleURL('AIzURixuB9d-deRq3_xIKUEYQoxUSTEz82osxYcTA');
if($_POST[url]!="")
{
 $acortada=$api->encode($_POST[url]);
 }
?>
<style>
    body {
        font-family: arial;
        size: 11px;
    }

    input {
        border: solid 1px #BEBEBE;
        background-color: #ffffff;
        height: 20px;
        padding-left: 1%;
        padding-right: 1%;
        font-family: 'arial';
    }

</style>
<form name='formx2ac' method='post' action='acortar.php'>
    Acortar URL: <input type='text' name='url' id='url'> <input type='submit' value='Acortar'><br>
</form>
<?php
if($acortada!="")
{
echo "<b>$acortada</b>";
 }
?>
