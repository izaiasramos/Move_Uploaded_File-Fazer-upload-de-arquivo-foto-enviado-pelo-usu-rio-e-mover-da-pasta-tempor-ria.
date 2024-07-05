//echo '<pre>';
print_r ($_FILES);

$nome = md5(time().rand(0, 1000)).'.jpg';
move_uploaded_file($_FILES['arquivo']['tmp_name'],'arquivos/'.$nome);

Função PHP - Move_Uploaded_File - O usuario envia foto/arquivo essa foto vai para uma pasta temporária, que é apagada quando a requisição se encerra, com a função Move_Uploaded_File movemos a foto que recebemos para uma pasta criada e configuramos para usar a foto para o que desejamos, como por exemplo foto do perfil.

//echo '<pre>';
print_r ($_FILES); - com o print_r detalhamos sobre a operação, para principalmente saber o nome da pasta temporaria que esta sendo enviada a foto, assim configuramos para a função Move_Uploaded_File buscar essa foto nessa pasta e move-la para uma pasta do nosso projeto.


//nela passamos dois parâmetros, no primeiro dizemos aonde está o arquivo que queremos 
mover, e no segundo parâmetro passamos para aonde iremos move-lo:

    //move_uploaded_file($_FILES['arquivo']['tmp_name'],'arquivos/'.$nome);       <-- aqui a função esta dizendo, entra na pasta ['arquivo'] e depois na pasta ['tmp_name'] pega o arquivo que chegou o move para a pasta: ,'arquivos'


// Assim se eu quiser que o arquivo seja movido com o mesmo nome que foi enviado:

    //$nome = $_FILES['arquivo']['name'];


//Assim garanto um nome aleatorio para cada arquivo enviado, garantindo que nenhum sera 
enviado com o mesmo nome substituindo o arquivo:

$nome = md5(time().rand(0, 1000)).'.jpg';
move_uploaded_file($_FILES['arquivo']['tmp_name'],'arquivos/'.$nome);
