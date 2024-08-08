<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8" />
        <title>App Help Desk</title>
    </head>

<body> 

    <?php
        

        session_start();

        $_SESSION['X']='sessão oficial';
        print_r($_SESSION['X']);
        echo '<hr>';

        $usuario_autenticator=false; /* é para criar uma condição*/

            $usuarios_app= array( /*é para criar um array*/
                array( /*criar um array dentro do array ^^*/
                    'email' => 'isabelli@gmail.com',
                    'senha' => 'asdfg'
                ),
                array(
                    'email' => 'isabelli@hotmail.com',
                    'senha' => 'asdfg'
                )
            );
            
            foreach ($usuarios_app as $user){ /*foreach é pra procurar/buscar no servidor/exemplos acima dos arreys e ai volta se é true or false*/
                if($user['email']==$_POST['email'] && $user['senha']==$_POST['senha']) {
                    $usuario_autenticator=true;
                 }
            } /* -se o email e a senha for igual os arreys é true */

            if($usuario_autenticator) {
                echo "Usuário autenticado";
                $_SESSION['autenticado'] = 'SIM';
            } else {
                $_SESSION['autenticado'] = 'NAO';
                //echo "Erro. Usuário não encontrado";
                header('Location: index.php?login=erro');
            }
    ?>
</body>
    
</html>

