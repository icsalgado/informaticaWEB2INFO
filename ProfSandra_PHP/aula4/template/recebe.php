
$nome = filter_input(INPUT_GET,'nome');
$idade = filter_input(INPUT_GET,'idade');
if($nome && $idade){
 echo "Nome: ".$nome." <br> Idade: ".$idade;
}else{
 echo "Nao enviou!";
}
