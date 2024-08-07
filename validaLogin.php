<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
</head>

<body>
    
    <?php

    $usuario_autentificator=false; /* variavel para armazenar as contas, tanto o email e senha, 
                                    de todos os usuarios, false pois não ha nenhuma conta */

        $usuario_app=array(

            array(
                'email' => 'lalalala@gmail.com',
                'senha' => '987654321'
            ), 
            array(
                'email' => 'popopopo@gmail.com',
                'senha' => '123456789'
            )

        );

        /*um array que pertencem as contas de cada usuarios, na qual estao dentro de outro array o email e senha de cada*/

    foreach ($usuario_app as $user){
            if($user['email']==$_POST['email'] && $user['senha']==$_POST['senha']) {

                $usuario_autentificator=true;

            }
    }

    /* não entendi daqui pra frente */

    if($usuario_autentificator){
        echo "Usuario autentificado";
    } else {
        echo "Usuario ou Senha não identificado";
    }

    ?>

</body>

</html>