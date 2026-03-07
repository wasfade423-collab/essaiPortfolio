<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="fr" class="px-0">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">    
    <link rel="stylesheet" href="frontend/css/sortie.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    
    <link rel="shortcut icon" href="frontend/assets/user.ico" type="image/x-icon">
    <title>Portfolio | Le Technicien BTP</title>
    <style>
        header, .header{
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
        }
        .dd{
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.8);
        }
        #hero{
            box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.1);
            background-image: url("frontend/assets/hommeNoir.jpg");
            background-repeat:no-repeat;
            background-size: cover;
            background-position: center;
        }
        .orange{
            box-shadow: 0 4px 4px rgba(245, 158, 11, 0.3);
        }
        tr{
            height: 40px;
        }
        tbody tr:nth-child(even){
            background-color: #e2e2e2;
        }
        input, textarea{
            padding: 0px 4px;
        }
        html{
            scroll-behavior:smooth;
        }
        .hero{
            animation: floatY 4s ease-in-out infinite;
        }
        @keyframes floatY{
            0%{
                transform: translateY(20px);
            }
            50%{
                transform: translateY(-20px);
            }
            100%{
                transform: translateY(20px);
            }
        }
        .policeText{
  font-family: "Poppins", sans-serif;
  font-weight: 200;
        }
        .policeTitre{
  font-family: "Poppins", sans-serif;
  font-weight: 500;
        }
    </style>
</head>
<body class="mx-0 px-0 bg-white overflow-x-hidden dark:bg-black dark:text-white">
    <header 
        class="z-100 bg-white h-[10vh] flex border-b border-b-slate-500/80 sticky top-0">
        <nav 
        class="px-4 flex items-center justify-between w-full">
            <div
            class="rounded-full dd flex justify-center items-center text-amber-600 bg-slate-500/20 w-12 h-12 font-semibold text-2xl">
                DD
            </div>
            <div>                
                <div class="flex gap-1 justify-center items-center">
                    <button id="burger"
                        class="cursor-pointer text-4xl px-2 py-1 rounded-full font-bold text-slate-700">
                        &equiv;
                    </button>
                </div>
            </div>
        </nav>
        <div class="absolute z-1000 -translate-x-100 duration-500 navM bg-slate-500 h-[750px] flex justify-center py-2 w-[300px]">
            <ul
                class="font-medium flex text-2xl flex-col gap-1 text-white ">
                    <a href="index.php"><li class="mx-2 my-2 pb-1 hover:border-b border-amber-400 hover:translate-x-0.5 hover:text-amber-400 duration-500 active:border-white">Accueil</li></a>
                    <a href="#propos"><li class="mx-2 my-2 pb-1 hover:border-b border-amber-400 hover:translate-x-0.5 hover:text-amber-400 duration-500 active:border-white">A propos</li></a>
                    <a href="#projets"><li class="mx-2 my-2 pb-1 hover:border-b border-amber-400 hover:translate-x-0.5 hover:text-amber-400 duration-500 active:border-white">Projets</li></a>
                    <a href="#contact"><li class="mx-2 my-2 pb-1 hover:border-b border-amber-400 hover:translate-x-0.5 hover:text-amber-400 duration-500 active:border-white">Contact</li></a>
            </ul>            
        </div>
    </header>
    <main class="mt-4 px-2">
        <!-- Hero -->
        <section
            class="h-[87vh] policeText hero mx-2 flex justify-center items-center">
            <div id="hero" class="h-4/5 rounded-3xl">
                <div class="text-slate-700 text-left flex px-2 flex-row justify-center items-end h-full bg-linear-to-t from-white from-0% to-transparent to-60%">
                    <div class="font-semibold text-[14px] mb-2" style="line-height: 25px;">
                        Je suis <span class="font-bold text-white policeTitre bg-orange-400/80 px-1">Wasfade Tonoukoin</span>Etudiant en génie civil. sJe vous présente ici mon <b>parcours</b> et mes <b>ambitions</b>.
                    </div>
                </div>
            </div>
        </section>
        <!-- Biography -->
        <section id="propos"
            class="orange scroll-mt-[11vh] min-h-[60vh] rounded-3xl bg-amber-200/20 p-3" style="line-height:30px;">
            <h2
            class="font-bold text-2xl policeTitre"> 
            <i class="ri-book-open-fill mr-2"></i> 
            Ma Bio
            </h2>
            <caption
                class="text-xs font-light text-center policeText mb-1">   Qui est Wasfade Tonoukoin ? 
            </caption>
            <div class="policeText flex h-[85%] justify-center items-center">
                <div>
                    <span class="policeTitre font-semibold text-center">Wasfade Tonoukoin Informaticien Junior</span><br>
                    <div class="mb-2">
                        &nbsp;&nbsp;&nbsp;&nbsp;Passionné par le développement <b>Mobile et Web</b> depuis plusieurs annnées, j'intervient déjà sur iverse projet dans la réalisation de site Ecommerce, site Portfolio, site de Vote en ligne. Mon parcours est marqué par une formation de 3ans à l'INSTI Lokossa/Benin , ce qui m'a permis de développer une expertise pointue en Dévelloppement Mobile et Web.
                    </div>
                    <div>
                        &nbsp;&nbsp;&nbsp;&nbsp;Originaire du <b>Bénin</b>, j'ai choisis le domaine de l'informatique car cela est une passion pour moi.Je parle princialement le français puis l'Anglais couramment.
                    </div>                
                </div>
            </div>
        </section>
        <br><br><br>
        <!-- Diplômes -->
        <section 
            class="h-[65vh]  rounded-3xl bg-slate-500/20 p-3" style="line-height:30px;">
            <h2
                class="font-bold text-2xl policeTitre">
                <i class="ri-graduation-cap-fill mr-2"></i>
                Volet Education
            </h2>
            <caption class="text-xs font-light text-center policeText">Quels sont mes diplômes ?</caption>
            <div class="policeText flex h-[85%] justify-center items-center">
                <table class="rounded-lg bg-white py-1">
                    <thead class="policeTitre border-b-2 border-slate-500/80">
                        <tr>
                            <th>Diplômes</th>
                            <th>Année d'obtention</th>
                        </tr>
                    </thead>
                    <tbody class="policeText">
                        <tr>
                            <td class="">Licence Professionnelle en BTP </td>
                            <td class="text-center">2027</td>
                        </tr>
                        <tr>
                            <td class="">Certificat de Trading</td>
                            <td class="text-center">2025</td>
                        </tr>
                        <tr>
                            <td class="">Baccalauréat C</td>
                            <td class="text-center">2024</td>
                        </tr>
                        <tr>
                            <td class="">BEPC Modèle Court</td>
                            <td class="text-center">2021</td>
                        </tr>
                        <tr>
                            <td class="">CEP</td>
                            <td class="text-center">2017</td>
                        </tr>
                    </tbody>
                    <tfoot class="border-t-2 font-medium border-slate-500/80 pt-3">
                        <tr>
                            <td colspan="2" class="text-center">
                                <p>Pour consulter avec plus de détails vous pouvez télécharger le <a href="CV.pdf" class="font-semiold underline hover:text-blue-400/90 px-1">CV</a>...</p>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>
        <br><br><br>
        <!-- Profetionnel -->
        <section
            class="orange h-[50vh] rounded-3xl bg-amber-200/20 p-3" style="line-height:25px;">
            <h2 class="font-bold text-2xl policeTitre">
                <i class="ri-briefcase-4-fill mr-2"></i>
                Volet Professionnel
            </h2>
            <caption class="text-xs font-light text-center policeText">Quels sont mes domaines d'expertise ?</caption>
            
            <!-- Informatique -->
            <div class="h-[80%] policeText flex justify-center items-center">
                <div class="swiper w-full max-w-4xl mx-auto">
                    <div class="swiper-wrapper pb-12">

                        <!-- Slide 1 -->
                        <div class="swiper-slide flex justify-center">
                                <h3 class="font-semibold policeTitre
                                text-center mb-3">Développement Web</h3>
                                <div>
                                    Je conçois des solutions informatiques innovantes pour automatiser vos processus. Mon rôle est de transformer vos défis complexes en outils numériques performants sur le Web.
                                </div>
                        </div>

                        <!-- Slide 2 -->

                        <div class="swiper-slide flex justify-center">
                                <h3 class="font-semibold policeTitre
                                 text-center mb-3">Dévelloppement Mobile</h3>
                                <div>
                                    Je conçois des applications mobiles fluides et intuitives. Mon rôle : transformer vos idées en expériences performantes sur smartphone.
                                </div>
                        </div> 
                        
                        <!-- slide 3 -->

                        <div class="swiper-slide flex justify-center">
                                <h3 class="font-semibold policeTitre
                                 text-center mb-3">Génie Civil Construction Bâtiment.</h3>
                                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam impedit vitae mollitia sed perferendis illum officia atque nihil praesentium hic!</div>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>       
            </div>    
        </section>
        <br><br><br>
        <!-- Projets -->
        <section id="projets" 
            class="orange scroll-mt-[11vh] h-[50vh] rounded-3xl bg-amber-200/20 p-3" style="line-height:30px;">
            <h2 class="font-bold text-2xl policeTitre">
                <i class="ri-folder-open-fill  mr-2"></i>
                   
                Mes Projets
            </h2>
            <caption class="text-xs font-light text-center policeText">J'ai laissé quelques de mes projets ici</caption> 
            <div class="policeText flex h-[85%] justify-center items-center">
                <div class="swiper w-full">
                    <div class="swiper-wrapper pb-10">
                        <!-- Projet 1 -->
                        <div class="swiper-slide flex justify-center">
                            <div class="flex w-full gap-2">
                                <!-- Image du projet -->
                                <div class="w-1/4 h-auto flex items-center justify-center">
                                    <div class="w-auto h-auto rounded-full overflow-hidden bg-gray-300 flex items-center justify-center">
                                        <img src="frontend/assets/user.png" class="w-full h-full object-cover">
                                    </div>
                                </div>
                                
                                <!-- Developpement -->
                                <div class="w-3/4">
                                    <p class="text-lg font-semibold mb-3 policeTitre">
                                        Nom du Projet 
                                    </p>
                                    <p class="text-gray-600 policeText">
                                        Texte texte texte. Ceci est un exemple de témoignage affiché dans un slide Swiper.
                                    </p>
                                </div>                                 
                            </div>
                        </div>
                        <!-- Projet 2 -->
                        <div class="swiper-slide flex justify-center">
                            <div class="flex w-full gap-2">
                                <!-- Image du projet -->
                                <div class="w-1/4 flex items-center justify-center">
                                    <div class="w-auto h-auto rounded-full overflow-hidden bg-gray-300 flex items-center justify-center">
                                        <img src="frontend/assets/user.png" class="w-full h-full object-cover">
                                    </div>
                                </div>
                                
                                <!-- Developpement -->
                                <div class="w-3/4">
                                    <p class="text-lg font-semibold mb-3 policeTitre">
                                        Nom du Projet 
                                    </p>
                                    <p class="text-gray-600 policeText">
                                        Texte texte texte. Ceci est un exemple de témoignage affiché dans un slide Swiper.
                                    </p>
                                </div>                                 
                            </div>
                        </div>
                        <!-- Projet 3 -->
                        <div class="swiper-slide flex justify-center">
                            <div class="flex w-full gap-2">
                                <!-- Image du projet -->
                                <div class="w-1/4 flex items-center justify-center">
                                    <div class="w-auto h-auto rounded-full overflow-hidden bg-gray-300 flex items-center justify-center">
                                        <img src="frontend/assets/user.png" class="w-full h-full object-cover">
                                    </div>
                                </div>
                                
                                <!-- Developpement -->
                                <div class="w-3/4">
                                    <p class="text-lg font-semibold mb-3 policeTitre">
                                        Nom du Projet 
                                    </p>
                                    <p class="text-gray-600 policeText">
                                        Texte texte texte. Ceci est un exemple de témoignage affiché dans un slide Swiper.
                                    </p>
                                </div>                                 
                            </div>
                        </div>                              
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <br><br><br>
      
        <!-- Témoignages -->
        <section class="h-[40vh] rounded-3xl bg-slate-500/20 p-3" style="line-height:30px;">
            <h2 class="font-bold text-2xl policeTitre">
                 <i class="ri-speak-fill"></i>
                Témoignages
            </h2>
            <div class="policeText flex h-[85%] justify-center items-center">
                <div class="swiper w-full">
                    <div class="swiper-wrapper pb-10">

                        <!-- Slide 1 -->
                        <div class="swiper-slide flex justify-center">
                            <div class="flex w-full gap-2 justify-center items-center">

                                <!-- Avatar -->
                                <div class="w-1/4 flex items-center justify-center">
                                    <div class="w-auto h-auto rounded-full overflow-hidden bg-gray-300 flex items-center justify-center">
                                        <img src="frontend/assets/user.png" class="w-full h-full object-cover">
                                    </div>
                                </div>

                                <!-- Texte -->
                                <div class="w-3/4">
                                    <p class="text-lg font-semibold mb-3 policeTitre">
                                        Auteur 
                                    </p>
                                    <p class="text-gray-600 policeText">
                                        Texte texte texte. Ceci est un exemple de témoignage affiché dans un slide Swiper.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- Slide 2 -->

                        <div class="swiper-slide flex justify-center">
                            <div class="flex w-full gap-2 justify-center items-center">

                                <!-- Avatar -->
                                <div class="w-1/4 flex items-center justify-center">
                                    <div class="w-auto h-auto rounded-full overflow-hidden bg-gray-300 flex items-center justify-center">
                                        <img src="frontend/assets/user.png" class="w-full h-full object-cover">
                                    </div>
                                </div>

                                <!-- Texte -->
                                <div class="w-3/4">
                                    <p class="text-lg font-semibold mb-3 policeTitre">
                                        Auteur 
                                    </p>
                                    <p class="text-gray-600 policeText">
                                        Texte texte texte. Ceci est un exemple de témoignage affiché dans un slide Swiper.
                                    </p>
                                </div>

                            </div>
                        </div> 
                        
                        <!-- slide 3 -->

                        <div class="swiper-slide flex justify-center">
                            <div class="flex w-full gap-2 justify-center items-center">

                                <!-- Avatar -->
                                <div class="w-1/4 flex items-center justify-center">
                                    <div class="w-auto h-auto rounded-full overflow-hidden bg-gray-300 flex items-center justify-center">
                                        <img src="frontend/assets/user.png" class="w-full h-full object-cover">
                                    </div>
                                </div>

                                <!-- Texte -->
                                <div class="w-3/4">
                                    <p class="text-lg font-semibold mb-3 policeTitre">
                                        Auteur 
                                    </p>
                                    <p class="text-gray-600 policeText">
                                        Texte texte texte. Ceci est un exemple de témoignage affiché dans un slide Swiper.
                                    </p>
                                </div>

                            </div>
                        </div>        

                    </div>
                    <div class="swiper-pagination mt-20"></div>
                </div>
            </div>            
        </section>
        <br><br>
        <!-- Contact -->
        <section id="contact" 
            class="header scroll-mt-[11vh] min-h-[60vh] rounded-3xl bg-white pt-3 px-3" style="line-height:30px;">
            <h2 class="text-2xl text-center font-bold policeTitre mb-0">
                <i class="ri-phone-line"></i>
                Me Contactez
            </h2>
            <div class="text-green-500/90 font-semibold policeText text-center"><?=  $message = (isset($_SESSION['valide'])) ? "<i class=\"ri-verified-badge-line rounded-full bg-green-200/80\"></i>".$_SESSION['valide'] : "" ?></div>
            <div class="text-red-500/80 font-semibold policeText text-center"><?=  $message = (isset($_SESSION['error']['valide'])) ? "<i class=\"ri-error-warning-line rounded-full bg-red-200/80\"></i>".$_SESSION['error']['valide'] : "" ?></div>
            <form action="/backend/process.php" method="post" class="flex flex-col gap-2 policeText pb-2">
                <div class="flex gap-1 justify-center items-center">
                    <div class="flex flex-col gap-1 w-1/2">
                        <label for="nom" class="font-medium ">Nom</label>
                        <div class="text-red-500/80 font-semibold policeText text-left text-sm"><?=  $message = (isset($_SESSION['error']['nom'])) ? $_SESSION['error']['nom'] : "" ?></div>
                        <input type="text" id="nom" name="nom" value="<?= @$_SESSION['data']['nom'] ?>" class="rounded-sm border border-slate-400/90 outline-0">
                    </div>
                    <div class="flex flex-col gap-1 w-1/2">
                        <label for="prenom" class="font-medium">Prenom</label>
                        <div class="text-red-500/80 font-semibold policeText text-left text-sm"><?=  $message = (isset($_SESSION['error']['prenom'])) ? $_SESSION['error']['prenom'] : "" ?></div>
                        <input type="text" id="prenom" name="prenom" value="<?= @$_SESSION['data']['prenom'] ?>" class="rounded-sm border border-slate-400/90 outline-0">
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="email" class="font-medium ">Email</label>
                    <div class="text-red-500/80 font-semibold policeText text-left text-sm"><?=  $message = (isset($_SESSION['error']['email'])) ? $_SESSION['error']['email'] : "" ?></div>
                    <input type="email" id="email" name="email" value="<?= @$_SESSION['data']['email'] ?>" class="rounded-sm border border-slate-400/90 outline-0">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="sujet" class="font-medium">Sujet</label>
                    <div class="text-red-500/80 font-semibold policeText text-left text-sm"><?=  $message = (isset($_SESSION['error']['sujet'])) ? $_SESSION['error']['sujet'] : "" ?></div>
                    <input type="text" id="sujet" name="sujet" value="<?= @$_SESSION['data']['sujet'] ?>" class="rounded-sm border border-slate-400/90 outline-0">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="message" class="font-medium">Message</label>
                    <div class="text-red-500/80 text-left font-semibold policeText text-[14px]"><?=  $message = (isset($_SESSION['error']['message'])) ? $_SESSION['error']['message'] : "" ?></div>
                    <textarea name="message" id="message" class="rounded-sm border border-slate-400/90 outline-0" rows="2" style="resize: vertical;"><?= @$_SESSION['data']['message'] ?></textarea>
                </div>
                <div class="flex items-center justify-end">
                    <input type="submit" value="Envoyez" class="cursor-pointer bg-amber-500 font-bold text-white p-1 w-[100px] h-[40px] rounded-sm hover:bg-amber-600">
                </div>
            </form>
        </section>
    </main>
    <br><br>
    <footer class="pt-4 bg-slate-500">
        <div class="flex flex-row px-2 justify-center items-center gap-2 text-xl font-light">
            <ul class="policeText">
                <li class="text-white mx-2 my-2 pb-1 hover:translate-x-0.5 hover:border-b border-amber-400 hover:text-amber-400 duration-500 active:border-white">
                    <a href="index.php">Accueil</a>
                </li>
                <li class="text-white mx-2 my-2 pb-1 hover:translate-x-0.5 hover:border-b border-amber-400 hover:text-amber-400 duration-500 active:border-white">
                    <a href="#propos">A propos</a>
                </li>
                <li class="text-white mx-2 my-2 pb-1 hover:translate-x-0.5 hover:border-b border-amber-400 hover:text-amber-400 duration-500 active:border-white">
                    <a href="#projets">Projets</a>
                </li>
                <li class="text-white mx-2 my-2 hover:translate-x-0.5 hover:border-b border-amber-400 hover:text-amber-400 duration-500 active:border-white">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <div class="flex px-2 justify-between gap-2">
            <div
                class="rounded-full dd flex justify-center items-center text-white bg-slate-500/20 w-12 h-12 font-medium text-2xl">
                DD
            </div>
            <div class="flex gap-2 items-center justify-center text-3xl text-white">
                <a href="#fac"><i class="ri-facebook-line rounded-full dd"></i></a>
                <a href="#fac"><i class="ri-whatsapp-line rounded-full dd"></i></a>
                <a href="#fac"><i class="ri-instagram-line rounded-full dd"></i></a>
            </div>
        </div>
        <hr class="mt-2 border-b border-slate-700/80 h-0.5 bg-slate-700/80">
        <div class="pb-2 bg-slate-700 pt-4">
            <p class="text-center bottom-0 text-white policeText font-semibold">Copyright 2025 By Wasfade Tonoukoin - Tous droits réservés.</p>
        </div>
    </footer>
    <script>


        let burger=document.getElementById("burger");
        let navM = document.querySelector(".navM");
        let bool = true;
        burger.addEventListener('click', ()=>{
            navM.classList.toggle("-translate-x-100");
            if(bool){
                burger.innerHTML = "&times;";
                bool = !bool;
            }else{
                burger.innerHTML = "&equiv;";
                bool = !bool;
            }
        })


        const swiper = new Swiper('.swiper', {
            speed:1500,
                spaceBetween: 30, 
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false
                },

            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            gradCursor: true,
            breaclpoints:{
                640: {
                    slidesPerView:1
                },
                7680: {
                    slidesPerView:2
                },
                1024: {
                    slidesPerView:3
                },        
            }

            });       
    </script>
</body>
</html>