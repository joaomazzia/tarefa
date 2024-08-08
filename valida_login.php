
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
</head>

<body>
    <?php 

$usuario_autenticador=false;
    /*Criamos  os usuarios*/
    $usuario_app=array(    
        array(
            'email' => 'fabiogay@gmail.com',
            'senha' => 'soumuitogay'
            ),
       array(
           'email' => 'fabiogay@gmail.com',
           'senha' => 'soumuitogay'
                )
    );
    
foreach($usuario_app as $user){

if($user ['email']== $_POST['email'] && $user['senha'] ==$_POST['senha']){
    $usuario_autenticador=true;
}

}
/*e se isso acortecer e para aparecer  o if se nao o else*/
if($usuario_autenticador) {
    echo'usuario foi encontrado';
}else{
    echo 'usuario nao encontrado';
}
    ?>
</body>

</html>