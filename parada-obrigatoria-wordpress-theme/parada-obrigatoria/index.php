<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Parada Obrigatória Bar e Petiscaria — cerveja gelada, petiscos, caipirinha, caipiroska e som ao vivo.">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="header">
        <div class="container nav-container">
            <a href="#inicio" class="brand" aria-label="Parada Obrigatória">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/logo.png')); ?>" alt="Parada Obrigatória Bar e Petiscaria">
            </a>

            <nav class="nav" aria-label="Menu principal">
                <a href="#inicio">Início</a>
                <a href="#cardapio">Cardápio</a>
                <a href="#inauguracao">Inauguração</a>
                <a href="#localizacao">Localização</a>
            </nav>
        </div>
    </header>

    <main>
        <section id="inicio" class="hero">
            <div class="hero-overlay"></div>

            <div class="container hero-content">
                <p class="eyebrow">BAR &amp; PETISCARIA</p>

                <h1>
                    Sua <span>Parada</span><br>
                    é <span>Obrigatória!</span>
                </h1>

                <p class="hero-text">
                    Cerveja gelada, petiscos, drinks e aquele clima perfeito
                    para reunir a galera.
                </p>

                <div class="hero-buttons">
                    <a href="#cardapio" class="btn btn-primary">Ver cardápio</a>
                    <a href="#localizacao" class="btn btn-outline">Como chegar</a>
                </div>
            </div>
        </section>

        <section class="highlights">
            <div class="container highlight-grid">
                <article class="highlight-card">
                    <span class="icon">🍺</span>
                    <h3>Cerveja gelada</h3>
                    <p>Para brindar com os amigos e aproveitar a noite.</p>
                </article>

                <article class="highlight-card">
                    <span class="icon">🍢</span>
                    <h3>Petiscos</h3>
                    <p>Porções para compartilhar ou matar a fome sozinho.</p>
                </article>

                <article class="highlight-card">
                    <span class="icon">🍹</span>
                    <h3>Drinks</h3>
                    <p>Caipirinha, caipiroska e outras opções para sua noite.</p>
                </article>

                <article class="highlight-card">
                    <span class="icon">🎵</span>
                    <h3>Som ao vivo</h3>
                    <p>Música para deixar a experiência ainda mais especial.</p>
                </article>
            </div>
        </section>

        <!-- ==================== CARDÁPIO ==================== -->
        <!-- ==================== CARDÁPIO ==================== -->
        <!-- ==================== CARDÁPIO ==================== -->
        <section id="cardapio" class="section section-dark">
            <div class="container">

                <div class="section-title">
                    <span>🍽️</span>
                    <p>Confira nossas opções</p>
                    <h2>Nosso <strong>Cardápio</strong></h2>
                </div>

                <div class="menu-intro">
                    <p>
                        Escolha sua comida, petisco, bebida ou drink e venha curtir a
                        <strong>Parada Obrigatória</strong>.
                    </p>
                    <nav class="menu-jump" aria-label="Partes do cardápio">
                        <a href="#cardapio-comidas">🍲 Comidas</a>
                        <a href="#cardapio-bebidas">🍺 Bebidas</a>
                    </nav>
                </div>

                <h3 id="cardapio-comidas" class="menu-group-title">Comidas</h3>
                <div class="menu-board">
                    <article class="menu-card">
                        <header class="menu-card-header">
                            <span class="menu-card-icon" aria-hidden="true">🍲</span>
                            <h4>Comidas</h4>
                            <small>Pratos servidos para 2 ou 4 pessoas</small>
                        </header>
                        <ul class="menu-items">
                            <li>
                                <span class="menu-item-name">Feijoada</span>
                                <small class="menu-item-desc">Arroz • salada • farofa</small>
                                <div class="menu-item-line menu-item-variant"><span>2 pessoas</span><span class="menu-item-price">R$ 40,00</span></div>
                                <div class="menu-item-line menu-item-variant"><span>4 pessoas</span><span class="menu-item-price">R$ 60,00</span></div>
                            </li>
                            <li>
                                <span class="menu-item-name">Dobradinha</span>
                                <small class="menu-item-desc">Arroz • pirão • salada</small>
                                <div class="menu-item-line menu-item-variant"><span>2 pessoas</span><span class="menu-item-price">R$ 40,00</span></div>
                                <div class="menu-item-line menu-item-variant"><span>4 pessoas</span><span class="menu-item-price">R$ 60,00</span></div>
                            </li>
                            <li>
                                <span class="menu-item-name">Mocofato</span>
                                <small class="menu-item-desc">Arroz • pirão • salada</small>
                                <div class="menu-item-line menu-item-variant"><span>2 pessoas</span><span class="menu-item-price">R$ 40,00</span></div>
                                <div class="menu-item-line menu-item-variant"><span>4 pessoas</span><span class="menu-item-price">R$ 60,00</span></div>
                            </li>
                            <li>
                                <span class="menu-item-name">Carne de panela com verduras</span>
                                <small class="menu-item-desc">Arroz • pirão • salada</small>
                                <div class="menu-item-line menu-item-variant"><span>2 pessoas</span><span class="menu-item-price">R$ 40,00</span></div>
                                <div class="menu-item-line menu-item-variant"><span>4 pessoas</span><span class="menu-item-price">R$ 60,00</span></div>
                            </li>
                            <li>
                                <span class="menu-item-name">Rabada</span>
                                <small class="menu-item-desc">Arroz • pirão • salada</small>
                                <div class="menu-item-line menu-item-variant"><span>2 pessoas</span><span class="menu-item-price">R$ 40,00</span></div>
                                <div class="menu-item-line menu-item-variant"><span>4 pessoas</span><span class="menu-item-price">R$ 60,00</span></div>
                            </li>
                            <li>
                                <span class="menu-item-name">Frango cozido com verduras</span>
                                <small class="menu-item-desc">Arroz • feijão • salada</small>
                                <div class="menu-item-line menu-item-variant"><span>2 pessoas</span><span class="menu-item-price">R$ 30,00</span></div>
                                <div class="menu-item-line menu-item-variant"><span>4 pessoas</span><span class="menu-item-price">R$ 50,00</span></div>
                            </li>
                        </ul>
                    </article>
                    <article class="menu-card">
                        <header class="menu-card-header">
                            <span class="menu-card-icon" aria-hidden="true">🥣</span>
                            <h4>Caldos</h4>
                        </header>
                        <ul class="menu-items">
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Camarão</span><span class="menu-item-price">R$ 25,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Vaca atolada</span><span class="menu-item-price">R$ 20,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Sururu</span><span class="menu-item-price">R$ 25,00</span></div>
                            </li>
                        </ul>
                    </article>
                    <article class="menu-card">
                        <header class="menu-card-header">
                            <span class="menu-card-icon" aria-hidden="true">🥖</span>
                            <h4>Pão de Alho</h4>
                        </header>
                        <ul class="menu-items">
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Tradicional</span><span class="menu-item-price">R$ 10,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Queijo</span><span class="menu-item-price">R$ 14,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Calabresa</span><span class="menu-item-price">R$ 18,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Carne seca com banana</span><span class="menu-item-price">R$ 18,00</span></div>
                            </li>
                        </ul>
                    </article>
                    <article class="menu-card">
                        <header class="menu-card-header">
                            <span class="menu-card-icon" aria-hidden="true">🍟</span>
                            <h4>Porções e Petiscos</h4>
                        </header>
                        <ul class="menu-items">
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Feijão tropeiro</span><span class="menu-item-price">R$ 12,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Arroz</span><span class="menu-item-price">R$ 8,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Vinagrete</span><span class="menu-item-price">R$ 10,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Farofa</span><span class="menu-item-price">R$ 8,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Batata frita</span><span class="menu-item-price">R$ 20,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Batata frita com queijo e bacon</span><span class="menu-item-price">R$ 30,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Coxinha</span><span class="menu-item-price">R$ 8,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Quibe</span><span class="menu-item-price">R$ 8,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Pastel frango</span><span class="menu-item-price">R$ 8,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Pastel carne</span><span class="menu-item-price">R$ 8,00</span></div>
                            </li>
                        </ul>
                    </article>
                    <article class="menu-card">
                        <header class="menu-card-header">
                            <span class="menu-card-icon" aria-hidden="true">🍢</span>
                            <h4>Espetinhos</h4>
                        </header>
                        <ul class="menu-items">
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Contra filé</span><span class="menu-item-price">R$ 12,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Alcatra</span><span class="menu-item-price">R$ 12,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Carne do Sol</span><span class="menu-item-price">R$ 12,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Fraldinha</span><span class="menu-item-price">R$ 10,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Cupim</span><span class="menu-item-price">R$ 12,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Medalhão</span><span class="menu-item-price">R$ 12,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Coração</span><span class="menu-item-price">R$ 10,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Queijo</span><span class="menu-item-price">R$ 12,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Tulipa</span><span class="menu-item-price">R$ 10,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Frango</span><span class="menu-item-price">R$ 10,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Toscana</span><span class="menu-item-price">R$ 10,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Apimentada</span><span class="menu-item-price">R$ 10,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Kafta</span><span class="menu-item-price">R$ 12,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Picanha suína</span><span class="menu-item-price">R$ 12,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Lombo suíno</span><span class="menu-item-price">R$ 12,00</span></div>
                            </li>
                        </ul>
                    </article>
                </div>

                <h3 id="cardapio-bebidas" class="menu-group-title">Bebidas</h3>
                <div class="menu-board">
                    <article class="menu-card">
                        <header class="menu-card-header">
                            <span class="menu-card-icon" aria-hidden="true">🍺</span>
                            <h4>Cervejas 600 ml</h4>
                        </header>
                        <ul class="menu-items">
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Skol</span><span class="menu-item-price">R$ 10,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Amstel</span><span class="menu-item-price">R$ 14,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Brahma</span><span class="menu-item-price">R$ 10,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Antártica original</span><span class="menu-item-price">R$ 14,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Stella Gold</span><span class="menu-item-price">R$ 18,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Heineken</span><span class="menu-item-price">R$ 18,00</span></div>
                            </li>
                        </ul>
                    </article>
                    <article class="menu-card">
                        <header class="menu-card-header">
                            <span class="menu-card-icon" aria-hidden="true">🍾</span>
                            <h4>Long Neck</h4>
                        </header>
                        <ul class="menu-items">
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Heineken</span><span class="menu-item-price">R$ 12,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Corona</span><span class="menu-item-price">R$ 12,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Stella Gold</span><span class="menu-item-price">R$ 12,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Amstel ultra</span><span class="menu-item-price">R$ 10,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Corona zero</span><span class="menu-item-price">R$ 12,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Ice Cabaré</span><span class="menu-item-price">R$ 10,00</span></div>
                            </li>
                        </ul>
                    </article>
                    <article class="menu-card">
                        <header class="menu-card-header">
                            <span class="menu-card-icon" aria-hidden="true">🥃</span>
                            <h4>Destilados</h4>
                        </header>
                        <ul class="menu-items">
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Whisky Red label</span><span class="menu-item-price">R$ 15,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Whisky Old parr</span><span class="menu-item-price">R$ 18,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Whisky Ballantines</span><span class="menu-item-price">R$ 15,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Whisky cavalo branco</span><span class="menu-item-price">R$ 15,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Campari</span><span class="menu-item-price">R$ 8,00</span></div>
                            </li>
                        </ul>
                    </article>
                    <article class="menu-card">
                        <header class="menu-card-header">
                            <span class="menu-card-icon" aria-hidden="true">🍹</span>
                            <h4>Caipirinhas e Drinks</h4>
                        </header>
                        <ul class="menu-items">
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Caipirinha</span><span class="menu-item-price">R$ 18,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Caipirosca</span><span class="menu-item-price">R$ 22,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Morangorosca</span><span class="menu-item-price">R$ 22,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Coquetel de frutas</span><span class="menu-item-price">R$ 20,00</span></div>
                            </li>
                        </ul>
                    </article>
                    <article class="menu-card">
                        <header class="menu-card-header">
                            <span class="menu-card-icon" aria-hidden="true">🥤</span>
                            <h4>Refrigerantes e Sem Álcool</h4>
                        </header>
                        <ul class="menu-items">
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Água mineral (sem gás)</span><span class="menu-item-price">R$ 3,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Água com gás</span><span class="menu-item-price">R$ 5,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">H<sub>2</sub>O</span><span class="menu-item-price">R$ 8,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Coca-cola lata zero</span><span class="menu-item-price">R$ 7,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Coca-cola lata</span><span class="menu-item-price">R$ 7,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Fanta laranja</span><span class="menu-item-price">R$ 7,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Guaraná lata</span><span class="menu-item-price">R$ 7,00</span></div>
                            </li>
                        </ul>
                    </article>
                    <article class="menu-card">
                        <header class="menu-card-header">
                            <span class="menu-card-icon" aria-hidden="true">🧃</span>
                            <h4>Refrigerante 1L</h4>
                        </header>
                        <ul class="menu-items">
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Coca zero</span><span class="menu-item-price">R$ 10,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Coca</span><span class="menu-item-price">R$ 10,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Guaraná</span><span class="menu-item-price">R$ 10,00</span></div>
                            </li>
                        </ul>
                    </article>
                    <article class="menu-card">
                        <header class="menu-card-header">
                            <span class="menu-card-icon" aria-hidden="true">⚡</span>
                            <h4>Energéticos</h4>
                        </header>
                        <ul class="menu-items">
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">RedBull</span><span class="menu-item-price">R$ 15,00</span></div>
                            </li>
                            <li>
                                <div class="menu-item-line"><span class="menu-item-name">Monster</span><span class="menu-item-price">R$ 15,00</span></div>
                            </li>
                        </ul>
                    </article>
                </div>

                <div class="menu-downloads">
                    <p>Prefere ver o cardápio original?</p>
                    <div class="menu-downloads-buttons">
                        <a class="btn btn-outline" href="<?php echo esc_url(get_theme_file_uri('/assets/cardapio/cardapio-comidas.jpg')); ?>" target="_blank" rel="noopener">📄 Cardápio de comidas</a>
                        <a class="btn btn-outline" href="<?php echo esc_url(get_theme_file_uri('/assets/cardapio/cardapio-bebidas.jpg')); ?>" target="_blank" rel="noopener">📄 Cardápio de bebidas</a>
                    </div>
                </div>

            </div>
        </section>

        <section id="inauguracao" class="section inauguration">
            <div class="container inauguration-grid">
                <div class="inauguration-text">
                    <p class="section-label">É hora de comemorar!</p>

                    <h2>
                        <span>INAUGURAÇÃO</span><br>
                        Parada Obrigatória
                    </h2>

                    <p>
                        Prepare-se para uma noite especial com música,
                        bebidas e muita resenha.
                    </p>

                    <div class="event-info">
                        <div>
                            <strong>📅 02 de outubro</strong>
                            <span>Data da inauguração</span>
                        </div>

                        <div>
                            <strong>🎵 Som ao vivo</strong>
                            <span>Para animar a noite</span>
                        </div>

                        <div>
                            <strong>🍹 Caipirinha e caipiroska em dobro</strong>
                            <span>Até meia-noite</span>
                        </div>
                    </div>

                    <a href="#localizacao" class="btn btn-primary">Quero conhecer</a>
                </div>

                <div class="inauguration-image">
                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/card-inauguracao.jpg')); ?>" alt="Card da inauguração do Parada Obrigatória Bar e Petiscaria">
                </div>
            </div>
        </section>

        <section id="localizacao" class="section location">
            <div class="container">
                <div class="section-title">
                    <span>📍</span>
                    <p>Venha nos visitar</p>
                    <h2>Como <strong>chegar</strong></h2>
                </div>

                <div class="location-card">
                    <div class="location-info">
                        <div class="location-icon">📍</div>

                        <div>
                            <h3>Parada Obrigatória</h3>
                            <p>Bar e Petiscaria</p>

                            <p class="address">
                                <strong>Endereço:</strong><br>
                                2ª Trav Manoel Souza Chaves, 2359<br>
                                São Caetano
                            </p>

                            <a class="btn btn-primary" href="https://www.google.com/maps/search/?api=1&query=2%C2%AA+Travessa+Manoel+Souza+Chaves+2359+S%C3%A3o+Caetano+Itabuna+BA" target="_blank" rel="noopener noreferrer">
                                📍 Abrir no Google Maps
                            </a>
                        </div>
                    </div>

                    <div class="map-placeholder">
                        <span>📍</span>
                        <p>Seu mapa aparecerá aqui</p>
                        <small>
                            Se quiser, depois podemos colocar o mapa
                            interativo do Google Maps nesta área.
                        </small>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container footer-content">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/logo.png')); ?>" alt="Parada Obrigatória" class="footer-logo">

            <p>Parada Obrigatória — Bar e Petiscaria</p>

            <p class="copyright">
                © <?php echo date('Y'); ?> Parada Obrigatória. Todos os direitos reservados.
            </p>
        </div>
    </footer>

    <a href="https://wa.me/5571999999999?text=Ol%C3%A1!%20Vim%20pelo%20site%20do%20Parada%20Obrigat%C3%B3ria." class="whatsapp" target="_blank" rel="noopener noreferrer" aria-label="Falar no WhatsApp">💬</a>

    <?php wp_footer(); ?>
</body>
</html>
