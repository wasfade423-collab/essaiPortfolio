<?php  
    session_start();
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        //recupere nom
        if(isset($_POST['nom']) && !empty($_POST['nom'])){
            $data['nom'] = htmlspecialchars(strip_tags($_POST['nom']));
        }else{
            $error['nom'] = "Le <b>nom</b> non renseigné ou invalide.";
        }
        //recupere prenom
        if (isset($_POST['prenom']) && !empty($_POST['prenom'])){
            $data['prenom'] = htmlspecialchars(strip_tags($_POST['prenom']));
        }else{
            $error['prenom'] = "Le <b>prenom</b> non renseigné ou invalide.";
        }
        //recupere sujet
        if(isset($_POST['sujet']) && !empty($_POST['sujet'])){
            $data['sujet'] = htmlspecialchars(strip_tags($_POST['sujet']));
        }else{
            $error['sujet'] = "Le <b>sujet</b> du message est invalide.";
        }
        //recupere email
        if(isset($_POST['email']) && !empty($_POST['email'])){
            $data['email'] = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        }else{
            $error['email'] = "<b>Adresse Email</b> invalide ou non envoyé.";
        }
        //recupere email
        if(isset($_POST['message']) && !empty($_POST['message'])){
            $data['message'] = htmlspecialchars(strip_tags($_POST['message']));
        }else{
            $error['message'] = "Votre <b>message</b> non renseigné ou invalide."; 
        }
        $_SESSION['data'] = $data;
        if(!empty($error)){
            var_dump($_SESSION['error'] = $error);
        }else{
            $_SESSION['valide'] = "Votre Message a bien été envoyé.";
            $data = implode('/', $data);
            $data = $data."\n";
            file_put_contents("list.txt", $data);
            //c'est ici que je consomme l'api.
        }
        header("Location: /index.php");
    }
?>