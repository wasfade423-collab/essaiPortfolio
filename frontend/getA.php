<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/sortie.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

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
            background-image: url("assets/hommeNoir.jpg");
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
    </style>
</head>
<body>
    <header 
        class="z-100 bg-white h-[10vh] flex border-b border-b-slate-500/80 sticky top-0">
        <nav 
        class="px-4 flex items-center justify-between w-full">
            <div
            class="rounded-full dd flex justify-center items-center text-amber-600 bg-slate-500/20 w-12 h-12 font-semibold text-2xl">
                DD
            </div>
            <div>                
                <ul
                    class="hidden">
                    <li>Accueil</li>
                    <li>A propos</li>
                    <li>Projets</li>
                    <li>Contact</li>
                </ul>
                <button id="burger"
                class="flex items-left text-3xl font-bold text-slate-700">&equiv;</button>
            </div>
        </nav>
        <div class="absolute z-1000 -translate-x-100 duration-500 navM bg-slate-500 h-[750px] items-center justify-center pl-4 py-2 w-[300px]">
            <ul
                class="font-medium flex text-2xl flex-col gap-1 text-white">
                    <li class="px-2 py-2 hover:translate-x-0.5 hover:text-amber-400 duration-500 active:border-white">Accueil</li>
                    <li class="px-2 py-2 hover:translate-x-0.5 hover:text-amber-400 duration-500 active:border-white">A propos</li>
                    <li class="px-2 py-2 hover:translate-x-0.5 hover:text-amber-400 duration-500 active:border-white">Projets</li>
                    <li class="px-2 py-2 hover:translate-x-0.5 hover:text-amber-400 duration-500 active:border-white">Contact</li>
            </ul>            
        </div>
    </header>
    <main class="my-4 px-1">
        <!-- Hero -->
        <section
            class="hidden h-[87vh] mx-2 flex justify-center items-center">
            <div id="hero" class="h-4/5 rounded-3xl">
                <div class="text-slate-700 text-left flex px-2 flex-row justify-center items-end h-full bg-linear-to-t from-white from-0% to-transparent to-60%">
                    <div class="policeText font-medium text-lg mb-2">
                        Je suis <span class="font-bold text-white  policeTitre bg-orange-400/80 px-1">Wasfade Tonoukoin</span>Etudiant en Informatique et Télécommunications. <br>Je vous présente ici mon <b>parcours</b> et mes <b>ambitions</b>.
                    </div>
                </div>
            </div>
        </section>
        <!-- Biography -->
        <section
            class="hidden orange h-[60vh] rounded-3xl bg-amber-200/20 p-3" style="line-height:30px;">
            <h2
            class="font-bold text-2xl policeTitre"> <i>Icon</i> Ma Bio: 
            </h2>
            <caption
                class="text-xs font-light">   Qui est Wasfade Tonoukoin ? 
            </caption>
            <div class="policeText flex h-[85%] justify-center items-center">
                <div>
                    <span class="policeTitre font-semibold">Wasfade Tonoukoin</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tempora molestiae dolore, debitis maiores deleniti expedita? Animi quo at dolor laboriosam officiis accusamus incidunt aut rem eius, distinctio consectetur in!
                </div>
            </div>
        </section>
        <br><br><br>
        <!-- Diplômes -->
        <section 
            class="hidden h-[60vh] rounded-3xl bg-slate-500/20 p-3" style="line-height:30px;">
            <h2
                class="font-bold text-2xl policeTitre">
                <i>Icon</i>
                Volet Education: 
            </h2>
            <caption class="text-xs font-light">Quels sont mes diplômes ?</caption>
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
                            <td>Licence Professionnelle en BTP </td>
                            <td class="text-center">2025</td>
                        </tr>
                        <tr>
                            <td>Certificat de Trading</td>
                            <td class="text-center">2024</td>
                        </tr>
                        <tr>
                            <td>Baccalauréat F4</td>
                            <td class="text-center">2022</td>
                        </tr>
                        <tr>
                            <td>BEPC Modèle Long</td>
                            <td class="text-center">2019</td>
                        </tr>
                        <tr>
                            <td>CEP</td>
                            <td class="text-center">2015</td>
                        </tr>
                    </tbody>
                    <tfoot class="border-t-2 border-slate-500/80 pt-3">
                        <tr>
                            <td colspan="2" class="text-center">
                                <p>Pour consulter avec plus de détails vous pouvez télécharger le <a href="CV.pdf">CV...</a></p>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>
        <br><br><br>
        <!-- Profetionnel -->
        <section
            class="orange h-[60vh] rounded-3xl bg-amber-200/20 p-3" style="line-height:25px;">
            <h2 class="font-bold text-2xl policeTitre">
                <i>Icon</i>
                Volet Professionnel:
            </h2>
            <caption class="text-xs font-light">Quels sont mes domaines d'expertise ?</caption>
            
            <!-- Informatique -->
            <div class="h-[90%] flex gap-4 flex-col justify-center items-center">
                <div class="flex gap-2 w-full justify-center items-center">
                        <div class="1/3">
                            
                        </div>
                        <div class="w-2/3">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.
                        </div>
                </div>   

                <div class="flex gap-2 w-full justify-center items-center">
                        <div class="1/3">
                            
                        </div>
                        <div class="w-2/3">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.
                        </div>
                </div>
            
                <div class="flex gap-2 w-full justify-center items-center">
                        <div class="1/3">
                            
                        </div>
                        <div class="w-2/3">
                            Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.
                        </div>
                </div>        
            </div>    
        </section>
        <br><br><br>
        <!-- Projets -->
        <section class="orange h-[50vh] rounded-3xl bg-amber-200/20 p-3" style="line-height:30px;">
            <h2 class="font-bold text-2xl policeTitre">
                <i>Icon</i>    
                Mes Projets: 
            </h2>
            <caption class="text-xs font-light">J'ai laissé les extraits de quelques de mes projets ici</caption> 
            <div class="policeText flex h-[85%] justify-center items-center">
                <swiper>
                    <swiper-wrapper>
                        <swiper-slide></swiper-slide>
                    </swiper-wrapper>
                </swiper>
            </div>
        </section>
        <br><br><br>
      
        <!-- Témoignages -->
        <section class="h-[50vh] rounded-3xl bg-slate-500/20 p-3" style="line-height:30px;">
            <h2 class="font-bold text-2xl policeTitre">Témoignages</h2>
            <div class="policeText flex h-[85%] justify-center items-center">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="flex flex-row justify-center items-center swiper-slide border">
                                
                        </div>
                        <div class="flex justify-center items-center swiper-slide">

                        </div>
                        <div class="flex justify-center items-center swiper-slide">
                            
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>            
        </section>
        <br><br><br>
        <!-- Contact -->
        <section class="hidden header h-[55vh] rounded-3xl bg-white pt-3 px-3" style="line-height:30px;">
            <h2 class="text-center font-bold policeTitre">
                <i>Icon</i>
                Me Contactez
            </h2>
            <form action="" method="post" class="flex flex-col gap-2">
                <div class="flex gap-1 justify-center items-center">
                    <div class="flex flex-col gap-1 w-1/2">
                        <label for="nom" class="font-semibold policeText">Nom</label>
                        <input type="text" id="nom" name="nom" class="rounded-sm border border-slate-400/90 outline-0">
                    </div>
                    <div class="flex flex-col gap-1 w-1/2">
                        <label for="prenom" class="font-semibold policeText">Prenom</label>
                        <input type="text" id="prenom" name="prenom" class="rounded-sm border border-slate-400/90 outline-0">
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="email" class="font-semibold policeText">Email</label>
                    <input type="email" id="email" name="email" class="rounded-sm border border-slate-400/90 outline-0">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="sujet" class="font-semibold policeText">Sujet</label>
                    <input type="text" id="sujet" name="sujet" class="rounded-sm border border-slate-400/90 outline-0">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="message" class="font-semibold policeText">Message</label>
                    <textarea name="message" id="message" class="rounded-sm border border-slate-400/90 outline-0" rows="2" style="resize: vertical;"></textarea>
                </div>
                <div class="flex items-center justify-end">
                    <input type="submit" value="Envoyez" class="bg-amber-500 font-bold text-white p-1 w-[100px] h-[40px] rounded-sm">
                </div>
            </form>
        </section>
    </main>
    <br><br>
    <footer class="hidden pt-4 bg-slate-500">
        <div class="flex flex-col px-2 justify-center items-center gap-2 text-xl font-light capitalize">
            <ul>
                <li class="text-white px-2 py-2 hover:translate-x-0.5 hover:text-amber-400 duration-500 active:border-white">
                    <a href="#">Accueil</a>
                </li>
                <li class="text-white px-2 py-2 hover:translate-x-0.5 hover:text-amber-400 duration-500 active:border-white">
                    <a href="">A propos</a>
                </li>
                <li class="text-white px-2 py-2 hover:translate-x-0.5 hover:text-amber-400 duration-500 active:border-white">
                    <a href="Prjets">Projets</a>
                </li>
                <li class="text-white px-2 py-2 hover:translate-x-0.5 hover:text-amber-400 duration-500 active:border-white">
                    <a href="">Contact</a>
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
        <div class="bg-slate-700">
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