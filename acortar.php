 <html>

 <body> <input type=”url” id=”urlinput”> <button onclick=”shorturl()”>Short The URL</button>
     <script src=”main.js”></script>
 </body>

 </html>

 <?php
function shortenURL($url){
    $login="hellbat21";
    $api_key="33e106dfdda58ee993796f573aabd4cd59db051c";
    $ch= curl_init('http://api.bitly.com/v3/shorten?login='.$login.'apiKey='.$api_key.'&longUrl='.$ulr);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result= curl_exec($ch);
    $res=json_decode($result,true);
    echo $res['data']['url'];
    echo 'http://api.bitly.com/v3/shorten?login='.$login.'apiKey='.$api_key.'&longUrl='.$ulr;
    
}
?> <p>URL CORTA:<?php shortenURL('https://twitter.com/');?></p>
