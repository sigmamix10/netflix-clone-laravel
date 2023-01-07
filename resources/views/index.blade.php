<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/section-info.css')}}">
    <link rel="stylesheet" href="{{asset('css/section-faq.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Netflix - Projeto Cópia</title>
</head>
<body class="bg-dargray">
    <section class="header-top">
        <header class="header-principal">
            <div class="logo">
                <a href="#"><svg viewBox="0 0 111 30" data-uia="netflix-logo" class="svg-icon svg-icon-netflix-logo" aria-hidden="true" focusable="false"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg></a>
            </div>
            <div class="nav-menu">
                <ul>
                    <li><button>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                               <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                               <circle cx="12" cy="12" r="9"></circle>
                               <line x1="3.6" y1="9" x2="20.4" y2="9"></line>
                               <line x1="3.6" y1="15" x2="20.4" y2="15"></line>
                               <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                               <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                            </svg>
                            <span>Português</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-caret-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                               <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                               <circle cx="12" cy="12" r="9"></circle>
                               <path d="M12 15l-4 -4h8z"></path>
                            </svg>
                        </button></li>
                    <li><a href="{{route('login')}}" class="btn-login">Entrar</a> </li>
                </ul>
            </div>
        </header>
        <section class="header-section">
            <div class="header-section-hero">
                <h1>Filmes, séries e muito</h1>
                <h1>mais. Sem limites.</h1>
                <h3>Assista onde quiser. Cancele quando quiser.</h3>
                <p>Quer assistir? Informe seu email para criar ou reiniciar sua assinatura.</p>
            </div>
            <div class="header-section-form">
                <form action="#">
                    @csrf
                    <input type="email" name="email" class="form-email" placeholder="Email">
                    <button class="btn-email" type="submit">Vamos lá!
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="9 6 15 12 9 18"></polyline>
                        </svg></button>
                </form>
            </div>
        </section>
    </section>
    <section class="info-hero">
        <div class="flex-info">
            <div class="flex-info-text">
                <h1>Aproveite na TV.</h1>
                <p>Assista em Smart TVs, PlayStation, Xbox, Chromecast, Apple TV, aparelhos de Blu-ray e outros dispositivos.</p>
            </div>
            <div class="flex-info-img"><img src="{{asset('images/tv.png')}}" width="500"></div>
        </div>
    </section>
    <section class="info-hero">
        <div class="flex-info">
            <div class="flex-info-img"><img src="{{asset('images/device-pile.png')}}" width="500"></div>
            <div class="flex-info-text">
                <h1>Assista quando quiser.</h1>
                <p>Assista no celular, tablet, Smart TV ou notebook sem pagar a mais por isso.</p>
            </div>
        </div>
    </section>
    <section class="info-hero">
        <div class="flex-info">
            <div class="flex-info-text">
                <h1>Crie perfis para crianças.</h1>
                <p>Deixe as crianças se aventurarem com seus personagens favoritos em um espaço feito só para elas, sem pagar a mais por isso.</p>
            </div>
            <div class="flex-info-img"><img src="{{asset('images/infantil.png')}}" width="500"></div>
        </div>
    </section>
    <section class="info-hero">
        <div class="flex-info">
            <div class="flex-info-img">
                <img src="{{asset('images/mobile-0819.jpg')}}" width="500">
                <div class="card-down">
                    <img src="{{asset('images/boxshot.png')}}" class="card-donw-image">
                    <div class="card-down-text">
                        <h1>Stranger Things</h1>
                        <p>Download em andamento...</p>
                    </div>
                    <div class="card-down-incon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-download" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"></path>
                            <polyline points="7 11 12 16 17 11"></polyline>
                            <line x1="12" y1="4" x2="12" y2="16"></line>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex-info-text">
                <h1>Baixe séries para assistir offline.</h1>
                <p>Disponível em todos os planos, exceto no Básico com anúncios.</p>
            </div>
        </div>
    </section>
    <section class="section-faq">
        <h1 class="section-faq-cap">Perguntas frequentes</h1>
        <div class="faq-question">
            <div class="faq-question-title" onclick="clickAccordion(0)">
                <button class="btn-faq-question-title">
                    <span>O que é a Netflix?</span>
                    <span class="icon-faq">+</span>
                </button>
            </div>
            <div class="hide">
                <div class="faq-question-body ">
                    <p>A Netflix é um serviço de streaming que oferece uma ampla variedade de séries, filmes e documentários premiados em milhares de aparelhos conectados à internet.</p>
                    <p>Você pode assistir a quantos filmes e séries quiser, quando e onde quiser – tudo por um preço mensal acessível. Aqui você sempre encontra novidades. A cada semana, adicionamos novas séries e filmes.</p>
                </div>
            </div>
        </div>

        <div class="faq-question">
            <div class="faq-question-title" onclick="clickAccordion(1)">
                <button class="btn-faq-question-title">
                    <span>Quanto custa a Netflix?</span>
                    <span class="icon-faq">+</span>
                </button>
            </div>
            <div class="hide">
                <div class="faq-question-body ">
                    <p>Assista à Netflix no seu celular, tablet, Smart TV, notebook ou aparelho de streaming por uma taxa mensal única. Os planos variam de R$18,90 a R$55,90 por mês. Sem contrato nem taxas extras.</p>
                </div>
            </div>
        </div>

        <div class="faq-question">
            <div class="faq-question-title" onclick="clickAccordion(2)">
                <button class="btn-faq-question-title">
                    <span>O que muda no plano Básico com anúncios?</span>
                    <span class="icon-faq">+</span>
                </button>
            </div>
            <div class="hide">
                <div class="faq-question-body ">
                    <p>O plano Básico com anúncios é uma excelente maneira de assistir a séries e filmes por um preço mais baixo. Você pode assistir a seus títulos favoritos em qualquer aparelho e com intervalos limitados para anúncios. Este plano não permite downloads nem contém determinados filmes e séries com restrições de licenciamento. Há também algumas restrições de localização e aparelho. <u>Saiba mais.</u></p>
                </div>
            </div>
        </div>

        <div class="faq-question">
            <div class="faq-question-title" onclick="clickAccordion(3)">
                <button class="btn-faq-question-title">
                    <span>Onde posso assistir?</span>
                    <span class="icon-faq">+</span>
                </button>
            </div>
            <div class="hide">
                <div class="faq-question-body ">
                    <p>Assista onde quiser, quando quiser. Faça login com sua conta Netflix em netflix.com para começar a assistir no computador ou em qualquer aparelho conectado à Internet compatível com o aplicativo Netflix, como Smart TVs, smartphones, tablets, aparelhos de streaming e videogames.</p>
                    <p>Você também pode baixar a sua série favorita com o aplicativo Netflix para iOS, Android ou Windows 10. Use downloads para levar a Netflix para onde quiser sem precisar de conexão com a Internet. Leve a Netflix com você para qualquer lugar.</p>
                </div>
            </div>
        </div>

        <div class="faq-question">
            <div class="faq-question-title" onclick="clickAccordion(4)">
                <button class="btn-faq-question-title">
                    <span>Como faço para cancelar?</span>
                    <span class="icon-faq">+</span>
                </button>
            </div>
            <div class="hide">
                <div class="faq-question-body ">
                    <p>A Netflix é flexível. Não há contratos nem compromissos. Você pode cancelar a sua conta na internet com apenas dois cliques. Não há taxa de cancelamento – você pode começar ou encerrar a sua assinatura a qualquer momento.</p>
                </div>
            </div>
        </div>

        <div class="faq-question">
            <div class="faq-question-title" onclick="clickAccordion(5)">
                <button class="btn-faq-question-title">
                    <span>O que eu posso assistir na Netflix?</span>
                    <span class="icon-faq">+</span>
                </button>
            </div>
            <div class="hide">
                <div class="faq-question-body ">
                    <p>A Netflix tem um grande catálogo de filmes, documentários, séries, originais Netflix premiados e muito mais. Assista o quanto quiser, quando quiser.</p>
                </div>
            </div>
        </div>

        <div class="faq-question">
            <div class="faq-question-title" onclick="clickAccordion(6)">
                <button class="btn-faq-question-title">
                    <span>A Netflix é adequada para crianças?</span>
                    <span class="icon-faq">+</span>
                </button>
            </div>
            <div class="hide">
                <div class="faq-question-body ">
                    <p>A experiência infantil da Netflix faz parte da sua assinatura para que as crianças se divirtam em seu próprio espaço com séries e filmes familiares sob a supervisão dos responsáveis.</p>
                    <p>O recurso de controle parental, incluso nos perfis para crianças e protegido por PIN, permite restringir a classificação etária do conteúdo que as crianças podem ver e bloquear títulos específicos que você não quer que elas assistam.</p>
                </div>
            </div>
        </div>

        <div class="faq-footer">
            <p>Quer assistir? Informe seu email para criar ou reiniciar sua assinatura.</p>
            <div class="header-section-form">
                <form action="#">
                    @csrf
                    <input type="email" name="email" class="form-email" placeholder="Email">
                    <button class="btn-email" type="submit">Vamos lá!
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="9 6 15 12 9 18"></polyline>
                        </svg></button>
                </form>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-duvidas">Dúvidas? Ligue <span class="footer-tel">0800 591 8942</span></div>
        <div class="footer-links">
            <div class="footer-links-col">
                <a class="footer-links-col-item">Perguntas frequentes</a>
                <a class="footer-links-col-item">Relações com investidores</a>
                <a class="footer-links-col-item">Formas de assistir</a>
                <a class="footer-links-col-item">Informações corporativas</a>
                <a class="footer-links-col-item">Só na Netflix</a>
            </div>
            <div class="footer-links-col">
                <a class="footer-links-col-item">Central de Ajuda</a>
                <a class="footer-links-col-item">Carreiras</a>
                <a class="footer-links-col-item">Termo de Uso</a>
                <a class="footer-links-col-item">Entre em contato</a>
            </div>
            <div class="footer-links-col">
                <a class="footer-links-col-item">Conta</a>
                <a class="footer-links-col-item">Resgatar cartão pré-pago</a>
                <a class="footer-links-col-item">Privacidade</a>
                <a class="footer-links-col-item">Teste de velocidade</a>
            </div>
            <div class="footer-links-col">
                <a class="footer-links-col-item">Media Center</a>
                <a class="footer-links-col-item">Comprar cartão pré-pago</a>
                <a class="footer-links-col-item">Preferências de cookies</a>
                <a class="footer-links-col-item">Avisos legais</a>
            </div>
        </div>
        <div class="footer-lang">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="9"></circle>
                    <line x1="3.6" y1="9" x2="20.4" y2="9"></line>
                    <line x1="3.6" y1="15" x2="20.4" y2="15"></line>
                    <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                    <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                </svg>
                <span>Português</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-caret-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="9"></circle>
                    <path d="M12 15l-4 -4h8z"></path>
                </svg>
            </button>
        </div>
    </footer>

    <script src="{{asset('js/button-faq-action.js')}}"></script>
</body>
</html>
