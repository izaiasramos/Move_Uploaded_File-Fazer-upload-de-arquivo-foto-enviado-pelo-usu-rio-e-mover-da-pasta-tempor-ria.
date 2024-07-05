<?php
//print_r ($_FILES); Para obter informações sobre o arquivo enviado e a operação, principalmente para saber em qual pasta esta o arquivo temporario, para poder move-lo.


echo '<pre>';
print_r ($_FILES);

//move_uploaded_file - Essa função move os arquivos recebidos pelo upload, tirando da pasta temporária e levando para a pasta desejada/correta.
//nela passamos dois parâmetros, no primeiro dizemos aonde está o arquivo que queremos mover, e no segundo parâmetro passamos para aonde iremos move-lo:

    //move_uploaded_file($_FILES['arquivo']['tmp_name'],'arquivos/'.$nome);


// Assim se eu quiser que o arquivo seja movido com o mesmo nome que foi enviado:

    //$nome = $_FILES['arquivo']['name'];


//Assim garanto um nome aleatorio para cada arquivo enviado, garantindo que nenhum sera enviado com o mesmo nome substituindo o arquivo:
$nome = md5(time().rand(0, 1000)).'.jpg';
move_uploaded_file($_FILES['arquivo']['tmp_name'],'arquivos/'.$nome);

?>