<?php

$anuncio = new Anuncios();
$result = $anuncio->select();

foreach ($result as $value) {
   echo $value['titulo'].'<br>'; 
}

?>

<div class="posts">
    
    <div class="post">
        
    </div>
    
</div>
<button class="btn btn-sm btn-success j_mais">Mais posts</button>