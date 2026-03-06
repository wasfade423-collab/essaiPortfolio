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
            $_SESSION['error'] = $error;
        }else{
            $email = $data['email'];
            $nom = $data['nom'];
            $prenom = $data['prenom'];
            $sujet = $data['sujet'];
            file_put_contents("list.txt", $data);
            $instance = new PHPMailer(true);
            try{
                $instance ->isSMTP();
                $instance ->Host = "smtp.gmail.com";
                $instance ->SMTPAuth = true;
                $instance ->Username = "wasfade423@gmail.com"; // mon email en l'occurence celui qui est connecté au serveur PHPMailer
                $instance ->Password = "rpuyklolkcvlsukh";
                $instance ->SMTPSecure = "tls";
                $instance ->Port = "587";
                $instance ->setFrom($email, "Un visiteur du site Wab vitrine"); // l'email du visiteur
                $instance ->addAdress("wasfade423@gmail.com");//le proprétaire du site
                $instance ->Subject = $sujet;
                $instance ->Body = "
                    Nom: $nom $prenom
                    Email: $email
                    Message: $message
                ";
                $instance->send();
            }catch(Exception $e){
                $_SESSION['error']['valide'] = $e->getMessage();
            }
            //c'est ici que je consomme l'api.
        }
        header("Location: /index.php");
    }
?>