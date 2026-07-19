<?php 
    $page_title = "Menú"; 
    include 'includes/header.php'; 
?>

    <header class="page-header">
        <div class="overlay"></div>
        <div class="header-content fade-in-up">
            <h1>NUESTRO <span class="text-gold">MENÚ</span></h1>
            <p>Sabores auténticos creados con pasión</p>
            <p style="font-size: 0.9rem; margin-top: 5px; opacity: 0.7;">En caso de requerir factura se aplicara un cargo del 16% de IVA</p>
        </div>
    </header>

    <section class="section-padding bg-black menu-section">
        <div class="container">

            <!-- Ingredientes y extras para pizzas artesanales -->
            <style>
                .salsas-wrap {
                    background: #111;
                    border-radius: 10px;
                    padding: 16px 12px;
                    font-family: 'Arial Black', Arial, sans-serif;
                }

                .ingredientes-wrap {
                    background: #000;
                    padding: 12px;
                    font-family: 'Arial Black', Arial, sans-serif;
                }

                .tabla-ingredientes {
                    border: 2px double #ffffff;
                    padding: 0;
                    margin: 0;
                    width: 100%;
                    box-sizing: border-box;
                }

                .tabla-ingredientes legend {
                    font-family: 'Arial Black', Impact, sans-serif;
                    font-size: 13px;
                    letter-spacing: 3px;
                    font-weight: 900;
                    text-align: center;
                    padding: 0 10px;
                    color: #fff;
                }

                .grid-layout {
                    display: grid;
                    background-color: #555;
                    gap: 1px;
                }

                .border-bottom {
                    border-bottom: 1px solid #555;
                }

                .ingredientes {
                    grid-template-columns: repeat(3, minmax(0, 1fr));
                }

                .item {
                    background: #000;
                    padding: 10px 4px;
                    text-align: center;
                    font-size: 11px;
                    font-weight: 700;
                    color: #fff;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    letter-spacing: 0.4px;
                    line-height: 1.2;
                }

                .extras {
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                }

                .extra-item {
                    background: #000;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 8px;
                    padding: 10px 8px;
                    font-size: 11px;
                    color: #fff;
                    line-height: 1.1;
                }

                .extra-label {
                    font-size: 10px;
                    color: #999;
                    font-weight: 400;
                    letter-spacing: 0.5px;
                }

                .extra-name {
                    font-size: 13px;
                    font-weight: 900;
                    font-family: 'Arial Black', Impact, sans-serif;
                    color: #fff;
                }

                .precio {
                    border: 1.5px solid #555;
                    border-radius: 50%;
                    width: 36px;
                    height: 36px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 11px;
                    font-weight: 700;
                    color: #fff;
                    flex-shrink: 0;
                }
            </style>

            <!-- ==================== BANNER PUBLICITARIO ==================== -->
            <style>
                /* === Banner Publicitario === */
                .promo-banner-container {
                    max-width: 700px;
                    margin: 0 auto 40px auto;
                    perspective: 1000px;
                }

                .promo-banner {
                    position: relative;
                    border-radius: 16px;
                    overflow: hidden;
                    background: #0a0a0a;
                    border: 2px solid rgba(213, 153, 69, 0.4);
                    box-shadow: 
                        0 0 30px rgba(213, 153, 69, 0.15),
                        0 15px 40px rgba(0, 0, 0, 0.6),
                        inset 0 1px 0 rgba(255, 255, 255, 0.05);
                    transition: transform 0.5s cubic-bezier(0.23, 1, 0.32, 1), 
                                box-shadow 0.5s cubic-bezier(0.23, 1, 0.32, 1),
                                border-color 0.5s ease;
                    animation: borderGlow 3s ease-in-out infinite;
                }

                @keyframes borderGlow {
                    0%, 100% { box-shadow: 0 0 20px rgba(213, 153, 69, 0.1), 0 15px 40px rgba(0,0,0,0.6); }
                    50%      { box-shadow: 0 0 40px rgba(213, 153, 69, 0.25), 0 15px 40px rgba(0,0,0,0.6); }
                }

                .promo-banner:hover {
                    transform: translateY(-4px) scale(1.01);
                    border-color: rgba(213, 153, 69, 0.8);
                    animation: none;
                    box-shadow: 
                        0 0 50px rgba(213, 153, 69, 0.3),
                        0 25px 60px rgba(0, 0, 0, 0.7),
                        inset 0 1px 0 rgba(255, 255, 255, 0.08);
                }

                /* Corner decorations */
                .promo-banner::before,
                .promo-banner::after {
                    content: '';
                    position: absolute;
                    z-index: 3;
                    pointer-events: none;
                }

                .promo-banner::before {
                    top: 8px; left: 8px;
                    width: 30px; height: 30px;
                    border-top: 2px solid #d59945;
                    border-left: 2px solid #d59945;
                    border-radius: 4px 0 0 0;
                    opacity: 0.7;
                    transition: all 0.4s ease;
                }
                .promo-banner::after {
                    bottom: 8px; right: 8px;
                    width: 30px; height: 30px;
                    border-bottom: 2px solid #d59945;
                    border-right: 2px solid #d59945;
                    border-radius: 0 0 4px 0;
                    opacity: 0.7;
                    transition: all 0.4s ease;
                }
                .promo-banner:hover::before,
                .promo-banner:hover::after {
                    width: 40px; height: 40px;
                    opacity: 1;
                }

                /* Inner corner decorations */
                .promo-corners::before,
                .promo-corners::after {
                    content: '';
                    position: absolute;
                    z-index: 3;
                    pointer-events: none;
                }
                .promo-corners::before {
                    top: 8px; right: 8px;
                    width: 30px; height: 30px;
                    border-top: 2px solid #d59945;
                    border-right: 2px solid #d59945;
                    border-radius: 0 4px 0 0;
                    opacity: 0.7;
                    transition: all 0.4s ease;
                }
                .promo-corners::after {
                    bottom: 8px; left: 8px;
                    width: 30px; height: 30px;
                    border-bottom: 2px solid #d59945;
                    border-left: 2px solid #d59945;
                    border-radius: 0 0 0 4px;
                    opacity: 0.7;
                    transition: all 0.4s ease;
                }
                .promo-banner:hover .promo-corners::before,
                .promo-banner:hover .promo-corners::after {
                    width: 40px; height: 40px;
                    opacity: 1;
                }

                /* Image */
                .promo-banner-img {
                    width: 100%;
                    aspect-ratio: auto;
                    object-fit: contain;
                    display: block;
                    transition: transform 0.8s cubic-bezier(0.23, 1, 0.32, 1);
                }
                .promo-banner:hover .promo-banner-img {
                    transform: scale(1.04);
                }

                /* Vignette overlay */
                .promo-vignette {
                    position: absolute;
                    top: 0; left: 0; right: 0; bottom: 0;
                    z-index: 1;
                    pointer-events: none;
                    box-shadow: inset 0 0 80px rgba(0, 0, 0, 0.5);
                    border-radius: 14px;
                }

                /* Bottom separator */
                .promo-separator {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 12px;
                    margin-top: 16px;
                }
                .promo-separator::before,
                .promo-separator::after {
                    content: '';
                    flex: 1;
                    max-width: 120px;
                    height: 1px;
                    background: linear-gradient(90deg, transparent, rgba(213,153,69,0.4), transparent);
                }
                .promo-separator-diamond {
                    width: 8px;
                    height: 8px;
                    background: #d59945;
                    transform: rotate(45deg);
                    opacity: 0.5;
                    flex-shrink: 0;
                }

                /* Shimmer sweep effect */
                .promo-shimmer {
                    position: absolute;
                    top: 0; left: -100%;
                    width: 60%;
                    height: 100%;
                    background: linear-gradient(
                        105deg,
                        transparent 30%,
                        rgba(213, 153, 69, 0.08) 45%,
                        rgba(255, 255, 255, 0.12) 50%,
                        rgba(213, 153, 69, 0.08) 55%,
                        transparent 70%
                    );
                    z-index: 2;
                    pointer-events: none;
                    animation: shimmerSweep 4s ease-in-out infinite;
                }

                @keyframes shimmerSweep {
                    0%   { left: -100%; opacity: 0; }
                    10%  { opacity: 1; }
                    100% { left: 200%; opacity: 0; }
                }

                /* Badge "NUEVO" */
                .promo-badge {
                    position: absolute;
                    top: 16px; left: 16px;
                    z-index: 4;
                    background: linear-gradient(135deg, #d59945, #b88235);
                    color: #000;
                    font-family: 'Oswald', sans-serif;
                    font-weight: 700;
                    font-size: 0.75rem;
                    letter-spacing: 2px;
                    text-transform: uppercase;
                    padding: 6px 16px;
                    border-radius: 4px;
                    box-shadow: 0 4px 15px rgba(213, 153, 69, 0.4);
                    animation: badgePulse 2.5s ease-in-out infinite;
                }

                @keyframes badgePulse {
                    0%, 100% { box-shadow: 0 4px 15px rgba(213, 153, 69, 0.4); }
                    50%      { box-shadow: 0 4px 25px rgba(213, 153, 69, 0.7); }
                }

                /* Bottom caption overlay */
                .promo-caption {
                    position: absolute;
                    bottom: 0; left: 0; right: 0;
                    z-index: 3;
                    padding: 30px 20px 16px;
                    background: linear-gradient(transparent, rgba(0,0,0,0.85));
                    text-align: center;
                    transform: translateY(4px);
                    opacity: 0.9;
                    transition: all 0.4s ease;
                }
                .promo-banner:hover .promo-caption {
                    transform: translateY(0);
                    opacity: 1;
                }

                .promo-caption-title {
                    font-family: 'Oswald', sans-serif;
                    font-size: 1.15rem;
                    font-weight: 700;
                    color: #d59945;
                    letter-spacing: 1.5px;
                    text-transform: uppercase;
                    margin-bottom: 2px;
                }
                .promo-caption-sub {
                    font-family: 'Roboto', sans-serif;
                    font-size: 0.8rem;
                    color: rgba(255,255,255,0.7);
                    font-weight: 300;
                }

                /* Top label "DESTACADO" */
                .promo-top-label {
                    text-align: center;
                    margin-bottom: 12px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 14px;
                }
                .promo-top-label span {
                    font-family: 'Oswald', sans-serif;
                    font-size: 0.8rem;
                    letter-spacing: 4px;
                    text-transform: uppercase;
                    color: #d59945;
                    font-weight: 400;
                }
                .promo-top-label::before,
                .promo-top-label::after {
                    content: '';
                    flex: 1;
                    max-width: 80px;
                    height: 1px;
                    background: linear-gradient(90deg, transparent, #d59945, transparent);
                }

                /* Responsive */
                @media (max-width: 600px) {
                    .promo-banner-container { margin: 0 auto 30px auto; }
                    .promo-caption-title { font-size: 1rem; }
                    .promo-badge { font-size: 0.65rem; padding: 5px 12px; top: 12px; left: 12px; }
                    .promo-banner::before { top: 6px; left: 6px; }
                    .promo-banner::after { bottom: 6px; right: 6px; }
                    .promo-corners::before { top: 6px; right: 6px; }
                    .promo-corners::after { bottom: 6px; left: 6px; }
                }
            </style>

            <div class="promo-banner-container fade-in-up">
                <div class="promo-top-label">
                    <span>✦ Destacado ✦</span>
                </div>
                <div class="promo-banner">
                    <div class="promo-corners"></div>
                    <span class="promo-badge">Nuevo</span>
                    <img class="promo-banner-img" src="imgmenu/pizzasarte/promochida.jpg" alt="Promoción Gabrielos Pizza"
                         loading="lazy">
                    <div class="promo-vignette"></div>
                    <div class="promo-shimmer"></div>
                    
                </div>
                <div class="promo-separator">
                    <span class="promo-separator-diamond"></span>
                </div>
            </div>
            <!-- ==================== FIN BANNER PUBLICITARIO ==================== -->

            <div class="ingredientes-wrap" style="margin-bottom: 30px;">

                <fieldset class="tabla-ingredientes">
                    <legend>INGREDIENTES</legend>

                    <div class="grid-layout ingredientes border-bottom">
                        <div class="item">Pepperoni</div>
                        <div class="item">Champiñón</div>
                        <div class="item">Jalapeño</div>
                        <div class="item">Salchicha Italiana</div>
                        <div class="item">Piña</div>
                        <div class="item">Chile Morrón</div>
                        <div class="item">Jamón de Pavo</div>
                        <div class="item">Aceituna</div>
                        <div class="item">Cebolla</div>
                    </div>

                    <div class="grid-layout extras">
                        <div class="extra-item">
                            <div>
                                <div class="extra-label">Tocino</div>
                                <div class="extra-name">EXTRA</div>
                            </div>
                            <div class="precio">$30</div>
                        </div>
                        <div class="extra-item">
                            <div>
                                <div class="extra-label">Queso</div>
                                <div class="extra-name">EXTRA</div>
                            </div>
                            <div class="precio">$35</div>
                        </div>
                </fieldset>
            </div>

            <!-- BLOQUE DE SALSAS WINGS & BONELESS -->
            <style>
                .salsas-wrap {
                    background: #000000;
                    border-radius: 10px;
                    padding: 16px 12px;
                    font-family: 'Arial Black', Arial, sans-serif;
                }
                .salsas-title {
                    text-align: center;
                    color: #fff;
                    font-size: 13px;
                    letter-spacing: 3px;
                    font-weight: 900;
                    margin: 0 0 14px;
                    position: relative;
                }
                .salsas-title::before, .salsas-title::after {
                    content: '';
                    position: absolute;
                    top: 50%;
                    width: 18%;
                    height: 1px;
                    background: #fff;
                }
                .salsas-title::before { left: 4%; }
                .salsas-title::after { right: 4%; }
                .salsas-grid {
                    display: grid;
                    grid-template-columns: repeat(3, minmax(0, 1fr));
                    border: 1.5px solid #555;
                    border-radius: 6px;
                    overflow: hidden;
                }
                .salsa-item {
                    padding: 10px 6px;
                    color: #fff;
                    font-size: 11px;
                    font-weight: 700;
                    text-align: center;
                    letter-spacing: 0.5px;
                    border-right: 1px solid #555;
                    border-bottom: 1px solid #555;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    gap: 5px;
                    line-height: 1.2;
                }
                .salsa-item:nth-child(3n) { border-right: none; }
                .salsa-item:nth-last-child(-n+3):nth-child(3n+1),
                .salsa-item:nth-last-child(-n+2):nth-child(3n+2),
                .salsa-item:last-child { border-bottom: none; }
                .salsa-label { font-size: 9px; color: #999; font-weight: 400; letter-spacing: 1px; }
                .salsa-name { font-size: 12px; font-weight: 900; }
                .heat-level { font-size: 12px; line-height: 1; color: var(--accent-color); letter-spacing: 2px; }
            </style>

            <div class="salsas-wrap" style="margin-bottom: 30px;">
                <p class="salsas-title">SALSAS</p>
                <div class="salsas-grid">
                    <div class="salsa-item">
                        <span class="salsa-label">Salsa</span>
                        <span class="salsa-name">BBQ</span>
                    </div>
                    <div class="salsa-item">
                        <span class="salsa-label">Salsa</span>
                        <span class="salsa-name">LIMÓN PIMIENTA</span>
                    </div>
                    <div class="salsa-item">
                        <span class="salsa-label">Salsa</span>
                        <span class="salsa-name">BUFFALO</span>
                        <span class="heat-level"><i class="fas fa-fire"></i><i class="fas fa-fire"></i></span>
                    </div>
                    <div class="salsa-item">
                        <span class="salsa-label">Salsa</span>
                        <span class="salsa-name">CHIPOTLE</span>
                        <span class="heat-level"><i class="fas fa-fire"></i><i class="fas fa-fire"></i><i class="fas fa-fire"></i></span>
                    </div>
                    <div class="salsa-item" style="grid-column: span 2; border-right: none;">
                        <span class="salsa-label">Salsa</span>
                        <span class="salsa-name">MANGO HABANERO</span>
                        <span class="heat-level"><i class="fas fa-fire"></i><i class="fas fa-fire"></i><i class="fas fa-fire"></i><i class="fas fa-fire"></i></span>
                    </div>
                </div>
            </div>

            <div class="menu-filters fade-in-up">
                <button class="filter-btn active" data-filter="Pizzas Artesanales">Pizzas Artesanales</button>
                <button class="filter-btn" data-filter="Especialidades">Especialidades</button>
                <button class="filter-btn" data-filter="Pastas">Pastas</button>
                <button class="filter-btn" data-filter="Wings & Boneless">Wings & Boneless</button>
                <button class="filter-btn" data-filter="Spaghettis">Spaghettis</button>
                <button class="filter-btn" data-filter="Complementos">Complementos</button>
                <button class="filter-btn" data-filter="Ensaladas">Ensaladas</button>
                <button class="filter-btn" data-filter="Postres">Postres</button>
                <button class="filter-btn" data-filter="Bebidas sin alcohol">Bebidas sin alcohol</button>
                <button class="filter-btn" data-filter="Cervezas">Cervezas</button>
                <button class="filter-btn" data-filter="Vinos">Vinos</button>

            </div>


            <!-- MENU PRINCIPAL -->

            <div class="menu-grid">
                
            <div class="menu-grid">
                    <div class="menu-item fade-in-up" data-category="Pizzas Artesanales">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/pepperoniclasisca.jpg" alt="Clásica de Pepperoni">
                            <span class="price">$199</span>
                        </div>
                        <div class="menu-info">
                            <h3>CLÁSICA DE PEPPERONI</h3>
                            <p>Queso mozzarella, salsa de la casa y pepperoni.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pizzas Artesanales">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/mozzarella.jpeg" alt="Pizza Mozzarella">
                            <span class="price">$199</span>
                        </div>
                        <div class="menu-info">
                            <h3>PIZZA MOZZARELLA</h3>
                            <p>Queso mozzarella y salsa de la casa.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pizzas Artesanales">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/pepperoniclasisca.jpg" alt="Pizza 1 Ingrediente">
                            <span class="price">$199</span>
                        </div>
                        <div class="menu-info">
                            <h3>PIZZA 1 INGREDIENTE</h3>
                            <p>Queso mozzarella, salsa de la casa y un ingrediente a elegir.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pizzas Artesanales">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/2ing.jpeg" alt="Pizza 2 Ingredientes">
                            <span class="price">$225</span>
                        </div>
                        <div class="menu-info">
                            <h3>PIZZA 2 INGREDIENTES</h3>
                            <p>Queso mozzarella, salsa de la casa y dos ingredientes a elegir.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pizzas Artesanales">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/lovers.jpeg" alt="Pepperoni Lovers">
                            <span class="price">$255</span>
                        </div>
                        <div class="menu-info">
                            <h3>PEPPERONI LOVERS</h3>
                            <p>Con queso y MUCHO MUCHO PEPPERONI.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pizzas Artesanales">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/gabrielos.jpeg" alt="Gabrielos Pizza">
                            <span class="price">$225</span>
                        </div>
                        <div class="menu-info">
                            <h3>GABRIELOS PIZZA</h3>
                            <p>Champiñones frescos y pepperoni.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pizzas Artesanales">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/meat.jpeg" alt="Meat Lovers">
                            <span class="price">$239</span>
                        </div>
                        <div class="menu-info">
                            <h3>MEAT LOVERS</h3>
                            <p>Salchica italiana, pepperoni y tocino.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pizzas Artesanales">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/americana.jpeg" alt="Americana">
                            <span class="price">$225</span>
                        </div>
                        <div class="menu-info">
                            <h3>AMERICANA</h3>
                            <p>Pepperoni y tocino.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pizzas Artesanales">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/chorizo.jpeg" alt="Pizza con Chorizo">
                            <span class="price">$255</span>
                        </div>
                        <div class="menu-info">
                            <h3>PIZZA CON CHORIZO</h3>
                            <p>Chorizo con hasta dos ingredientes a elegir.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pizzas Artesanales">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/hawai.jpeg" alt="Hawaiana">
                            <span class="price">$225</span>
                        </div>
                        <div class="menu-info">
                            <h3>HAWAIANA</h3>
                            <p>Jamón de pavo y piña.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pizzas Artesanales">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/suprema.jpeg" alt="Suprema">
                            <span class="price">$245</span>
                        </div>
                        <div class="menu-info">
                            <h3>SUPREMA</h3>
                            <p>Pepperoni, salchicha, champiñon, chile morron, cebolla y aceituna.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pizzas Artesanales">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/conpollo.jpeg" alt="Pizza con Pollo">
                            <span class="price">$255</span>
                        </div>
                        <div class="menu-info">
                            <h3>PIZZA CON POLLO</h3>
                            <p>Pollo a la plancha, tocino y champiñon.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pizzas Artesanales">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/pizzaboneless.jpeg" alt="Pizza Boneless">
                            <span class="price">$255</span>
                        </div>
                        <div class="menu-info">
                            <h3>PIZZA BONELESS</h3>
                            <p>Delicia combinación de pizza y boneless bañados en salsa buffalo.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pizzas Artesanales">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/pizzaalfredo.jpeg" alt="Pizza Alfredo">
                            <span class="price">$265</span>
                        </div>
                        <div class="menu-info">
                            <h3>PIZZA ALFREDO</h3>
                            <p>Rica pizza con nuestra cremosa salsa alfredo con hasta dos ingredientes a elegir.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pizzas Artesanales">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/alpastor.jpeg" alt="Pizza al Pastor">
                            <span class="price">$255</span>
                        </div>
                        <div class="menu-info">
                            <h3>PIZZA AL PASTOR</h3>
                            <p>Carne de trompo con hasta dos ingredientes a elegir.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pizzas Artesanales">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/ramos.jpeg" alt="Pizza Chicharrón de la Ramos">
                            <span class="price">$255</span>
                        </div>
                        <div class="menu-info">
                            <h3>PIZZA CHICHARRÓN DE LA RAMOS</h3>
                            <p>Chicharrón de la ramos con hasta dos ingredientes a elegir.</p>
                        </div>
                    </div>



                    <div class="menu-item fade-in-up" data-category="Especialidades">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/norteña.jpeg" alt="Piña Norteña">
                            <span class="price">$299</span>
                        </div>
                        <div class="menu-info">
                            <h3>PIZZA NORTEÑA</h3>
                            <p>Chicharrón de la ramos, pastor y tocino.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Especialidades">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/chicago.jpeg" alt="Chicago">
                            <span class="price">$495</span>
                        </div>
                        <div class="menu-info">
                            <h3>CHICAGO</h3>
                            <p>La especialidad de la casa con hasta 3 ingredientes a elegir.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Especialidades">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/chicagolovers.jpeg" alt="Chicago Pepperoni Lovers">
                            <span class="price">$495</span>
                        </div>
                        <div class="menu-info">
                            <h3>CHICAGO PEPPERONI LOVERS</h3>
                            <p>La especialidad de la casa con MUCHO MUCHO pepperoni</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Especialidades">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/rellena.jpeg" alt="Pizza Rellena">
                            <span class="price">$395</span>
                        </div>
                        <div class="menu-info">
                            <h3>PIZZA RELLENA</h3>
                            <p>Pizza rellena con hasta 3 ingredientes a elegir (ahora con más queso).</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Especialidades">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/rellnasintapa.jpeg" alt="Pizza Rellena Pepperoni Lovers">
                            <span class="price">$395</span>
                        </div>
                        <div class="menu-info">
                            <h3>PIZZA RELLENA (SIN TAPA)</h3>
                            <p>Pizza rellena con menos pan, mismo sabor diferente presentación.</p>
                        </div>
                    </div>


                    <div class="menu-item fade-in-up" data-category="Especialidades">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/lasg.jpeg" alt="LASAGNA">
                            <span class="price">$270</span>
                        </div>
                        <div class="menu-info">
                            <h3>LASAGNA (350g)</h3>
                            <p>Combinación de capas de pasta con queso rricota, queso mozzarella, carne a la bolognesa, parmesano y salsa pomodoro, acompañada con pan de ajo.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Especialidades">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/calzone.jpeg" alt="Calzone">
                            <span class="price">$99</span>
                        </div>
                        <div class="menu-info">
                            <h3>CALZONE</h3>
                            <p>Tamaño individual con hasta 3 ingredientes a elegir.</p>
                        </div>
                    </div>


                    <div class="menu-item fade-in-up" data-category="Especialidades">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/phi1.jpeg" alt="PIZZA PHILADELPHIA 1">
                            <span class="price">$259</span>
                        </div>
                        <div class="menu-info">
                            <h3>PIZZA PHILADELPHIA 1</h3>
                            <p>(190g) De queso Philadelphia, queso mozzarella, bañada en nuestra salsa de tomate.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Especialidades">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/phi2.jpeg" alt="PIZZA PHILADELPHIA 2">
                            <span class="price">$279</span>
                        </div>
                        <div class="menu-info">
                            <h3>PIZZA PHILADELPHIA 2</h3>
                            <p>(190g) De queso Philadelphia, queso mozzarella, bañada en nuestra salsa de tomate.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Especialidades">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/phibon.jpeg" alt="PIZZA PHILADELPHIA PEPPERONI LOVERS">
                            <span class="price">$319</span>
                        </div>
                        <div class="menu-info">
                            <h3>PIZZA PHILADELPHIA PEPPERONI LOVERS</h3>
                            <p>(190g) De queso Philadelphia, queso mozzarella, bañada en nuestra salsa de tomate.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Especialidades">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/phibon.jpeg" alt="PIZZA PHILADELPHIA PEPPERONI LOVERS">
                            <span class="price">$319</span>
                        </div>
                        <div class="menu-info">
                            <h3>PIZZA PHILADELPHIA BONELESS</h3>
                            <p>(190g) De queso Philadelphia, queso mozzarella, bañada en nuestra salsa de tomate.</p>
                        </div>
                    </div>


                    <div class="menu-item fade-in-up" data-category="Pastas">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/pastasne.jpeg" alt="Pasta Alfredo Sencilla">
                            <span class="price">$159</span>
                        </div>
                        <div class="menu-info">
                            <h3>PASTA ALFREDO SENCILLA</h3>
                            <p>Deliciosa fettuccini bañado con cremosa salsa de queso parmesano y ajo.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pastas">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/pastapollo.jpeg" alt="Pasta Alfredo con Pollo">
                            <span class="price">$209</span>
                        </div>
                        <div class="menu-info">
                            <h3>PASTA ALFREDO CON POLLO</h3>
                            <p>Deliciosa fettuccini bañado con cremosa salsa de queso parmesano y ajo.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pastas">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/pastasne.jpeg" alt="Pasta Alfredo con Bolognesa">
                            <span class="price">$199</span>
                        </div>
                        <div class="menu-info">
                            <h3>PASTA ALFREDO CON BOLOGNESA</h3>
                            <p>Deliciosa fettuccini bañado con cremosa salsa de queso parmesano y ajo.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pastas">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/pastachamp.jpeg" alt="Pasta Alfredo con Champiñones">
                            <span class="price">$180</span>
                        </div>
                        <div class="menu-info">
                            <h3>PASTA ALFREDO CON CHAMPIÑONES</h3>
                            <p>Deliciosa fettuccini bañado con cremosa salsa de queso parmesano y ajo.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pastas">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/pastacamarones.jpeg" alt="Pasta Alfredo con Camarones">
                            <span class="price">$230</span>
                        </div>
                        <div class="menu-info">
                            <h3>PASTA ALFREDO CON CAMARONES</h3>
                            <p>Deliciosa fettuccini bañado con cremosa salsa de queso parmesano y ajo.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pastas">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/rosasen.jpeg" alt="Pasta Mama Rosa Sencilla">
                            <span class="price">$159</span>
                        </div>
                        <div class="menu-info">
                            <h3>PASTA MAMA ROSA SENCILLA</h3>
                            <p>Combinación de salsa pomodoro y crema alfredo sobre fettuccini.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pastas">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/rosasen.jpeg" alt="Pasta Mama Rosa con Pollo">
                            <span class="price">$209</span>
                        </div>
                        <div class="menu-info">
                            <h3>PASTA MAMA ROSA CON POLLO</h3>
                            <p>Combinación de salsa pomodoro y crema alfredo sobre fettuccini.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pastas">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/rosasen.jpeg" alt="Pasta Mama Rosa con Bolognesa">
                            <span class="price">$199</span>
                        </div>
                        <div class="menu-info">
                            <h3>PASTA MAMA ROSA CON BOLOGNESA</h3>
                            <p>Combinación de salsa pomodoro y crema alfredo sobre fettuccini.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pastas">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/mamachamp.jpeg" alt="Pasta Mama Rosa con Champiñones">
                            <span class="price">$180</span>
                        </div>
                        <div class="menu-info">
                            <h3>PASTA MAMA ROSA CON CHAMPIÑONES</h3>
                            <p>Combinación de salsa pomodoro y crema alfredo sobre fettuccini.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pastas">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/rosasen.jpeg" alt="Pasta Mama Rosa con Camarones">
                            <span class="price">$230</span>
                        </div>
                        <div class="menu-info">
                            <h3>PASTA MAMA ROSA CON CAMARONES</h3>
                            <p>Combinación de salsa pomodoro y crema alfredo sobre fettuccini.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pastas">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/ajo.jpeg" alt="Pan de Ajo (1 pz)">
                            <span class="price">$15</span>
                        </div>
                        <div class="menu-info">
                            <h3>PAN DE AJO (1 PZ)</h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Pastas">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/ajo.jpeg" alt="Pan de Ajo con Pasta (1 pz)">
                            <span class="price">$10</span>
                        </div>
                        <div class="menu-info">
                            <h3>PAN DE AJO CON PASTA (1 PZ)</h3>
                            <p>En la compra de una pasta o spaghetti llevate la pieza de pan en $10</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Wings & Boneless">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/ali5.jpeg" alt="Alitas 570g">
                            <span class="price">$259</span>
                        </div>
                        <div class="menu-info">
                            <h3>ALITAS 570G</h3>
                            <p>Alitas bañadas en la salsa de tu elección con zanahoria, apio y papas a la francesa (150g).</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Wings & Boneless">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/ali8.jpeg" alt="Alitas 810g">
                            <span class="price">$299</span>
                        </div>
                        <div class="menu-info">
                            <h3>ALITAS 810G</h3>
                            <p>Alitas bañadas en la salsa de tu elección con zanahoria, apio y papas a la francesa (150g).</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Wings & Boneless">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/ali1k.jpeg" alt="Alitas 1,040g">
                            <span class="price">$370</span>
                        </div>
                        <div class="menu-info">
                            <h3>ALITAS 1,040G</h3>
                            <p>Alitas bañadas en la salsa de tu elección con zanahoria, apio y papas a la francesa (150g).</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Wings & Boneless">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/bon280.jpeg" alt="Boneless 280g">
                            <span class="price">$209</span>
                        </div>
                        <div class="menu-info">
                            <h3>BONELESS 280G</h3>
                            <p>Boneless bañadas en la salsa de tu elección con zanahoria, apio y papas a la francesa (150g).</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Wings & Boneless">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/bon4.jpeg" alt="Boneless 450g">
                            <span class="price">$269</span>
                        </div>
                        <div class="menu-info">
                            <h3>BONELESS 450G</h3>
                            <p>Boneless bañadas en la salsa de tu elección con zanahoria, apio y papas a la francesa (150g).</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Wings & Boneless">
                        <div class="menu-img">
                            <img loading="lazy" src="" alt="Tenders">
                            <span class="price">$129</span>
                        </div>
                        <div class="menu-info">
                            <h3>TENDERS (3pz)</h3>
                            <p>Tenders acompañados con papas a la francesa.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Wings & Boneless">
                        <div class="menu-img">
                            <img loading="lazy" src="" alt="Tenders">
                            <span class="price">$189</span>
                        </div>
                        <div class="menu-info">
                            <h3>TENDERS (5pz)</h3>
                            <p>Tenders acompañador con papas a la francesa.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Spaghettis">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/spa.jpeg" alt="Spaghetti con Salsa de Tomate">
                            <span class="price">$95</span>
                        </div>
                        <div class="menu-info">
                            <h3>SPAGHETTI CON SALSA DE TOMATE</h3>
                            <p>Orden de medio litro de spaghetti con salsa pomodoro.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Spaghettis">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/spamoz.jpeg" alt="Spaghetti Mozzarella">
                            <span class="price">$105</span>
                        </div>
                        <div class="menu-info">
                            <h3>SPAGHETTI MOZZARELLA</h3>
                            <p>Orden de medio litro de spaghetti con salsa pomodoro.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Spaghettis">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/spabog.jpeg" alt="Spaghetti Bolognesa">
                            <span class="price">$109</span>
                        </div>
                        <div class="menu-info">
                            <h3>SPAGHETTI BOLOGNESA</h3>
                            <p>Orden de medio litro de spaghetti con salsa pomodoro.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Spaghettis">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/spamozbo.jpeg" alt="Spaghetti Bolognesa y Mozzarella">
                            <span class="price">$125</span>
                        </div>
                        <div class="menu-info">
                            <h3>SPAGHETTI BOLOGNESA Y MOZZARELLA</h3>
                            <p>Orden de medio litro de spaghetti con salsa pomodoro.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Spaghettis">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/spamozbo.jpeg" alt="Spaghetti Champiñones y Mozzarella">
                            <span class="price">$125</span>
                        </div>
                        <div class="menu-info">
                            <h3>SPAGHETTI CHAMPIÑONES Y MOZZARELLA</h3>
                            <p>Orden de medio litro de spaghetti con salsa pomodoro.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Spaghettis">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/ajo.jpeg" alt="Pan de Ajo (1 pz)">
                            <span class="price">$15</span>
                        </div>
                        <div class="menu-info">
                            <h3>PAN DE AJO (1 PZ)</h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Spaghettis">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/ajo.jpeg" alt="Pan de Ajo con Spaghetti (1 pz)">
                            <span class="price">$10</span>
                        </div>
                        <div class="menu-info">
                            <h3>PAN DE AJO CON SPAGHETTI (1 PZ)</h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Complementos">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/papasen.jpeg" alt="Papas a la Francesa">
                            <span class="price">$75</span>
                        </div>
                        <div class="menu-info">
                            <h3>PAPAS A LA FRANCESA</h3>
                            <p>Orden de papas a la francesa</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Complementos">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/papasen.jpeg" alt="Papas Limón Pimienta">
                            <span class="price">$85</span>
                        </div>
                        <div class="menu-info">
                            <h3>PAPAS LIMÓN PIMIENTA</h3>
                            <p>Orden de papas sazonadas con limón y pimienta</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Complementos">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/papasqueso.jpeg" alt="Papas con Queso Amarillo">
                            <span class="price">$89</span>
                        </div>
                        <div class="menu-info">
                            <h3>PAPAS CON QUESO AMARILLO</h3>
                            <p>Orden de papas bañadas en queso amarillo</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Complementos">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/papasgab.jpeg" alt="Papas Gabrielos">
                            <span class="price">$115</span>
                        </div>
                        <div class="menu-info">
                            <h3>PAPAS GABRIELOS</h3>
                            <p>(280g) Orden de papas a la francesa, bañadas en queso amarillo, salsa buffalo y crujiente tocino</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Complementos">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/papasbon.jpeg" alt="Papas Boneless">
                            <span class="price">$185</span>
                        </div>
                        <div class="menu-info">
                            <h3>PAPAS BONELESS</h3>
                            <p>(280g) Orden de papas a la francesa, bañadas en queso amarillo, salsa buffalo, crujiente tocino, aderezo ranch y salsa de tu elección, acompañado de boneless(280g)</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Complementos">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/dedos.jpeg" alt="Dedos de Queso">
                            <span class="price">$99</span>
                        </div>
                        <div class="menu-info">
                            <h3>DEDOS DE QUESO</h3>
                            <p>Crujientes dedos de queso mozzarella acompañados con irresistible salsa de casa.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Ensaladas">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/enspla.jpeg" alt="Ensalada Gabrielos">
                            <span class="price">$159</span>
                        </div>
                        <div class="menu-info">
                            <h3>ENSALADA GABRIELOS</h3>
                            <p>Lechuga italiana, tomate, pepino, zanahoria y aguacate, cubierto con queso mozzarella, incluye un aderezo de vinagreta por separado.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Ensaladas">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/enspla.jpeg" alt="Ensalada Pollo a la Plancha">
                            <span class="price">$180</span>
                        </div>
                        <div class="menu-info">
                            <h3>ENSALADA POLLO A LA PLANCHA</h3>
                            <p>Pollo a la plancha servido sobre una cama de lechuga italiana, tomate, pepino, zanahoria y aguacate, cubierto con queso mozzarella, incluye un aderezo de vinagreta por separado.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Ensaladas">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/enscruj.jpeg" alt="Ensalada Pollo a la Plancha">
                            <span class="price">$199</span>
                        </div>
                        <div class="menu-info">
                            <h3>ENSALADA DE POLLO CRUJIENTE</h3>
                            <p>Pollo crujiente servido sobre una cama de lechuga italiana, tomate, pepino, zanahoria y aguacate, cubierto con queso mozzarella, incluye un aderezo de vinagreta por separado.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Postres">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/tortu.jpeg" alt="Cheesecake Tortuga">
                            <span class="price">$95</span>
                        </div>
                        <div class="menu-info">
                            <h3>CHEESECAKE TORTUGA</h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Postres">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/pay.jpeg" alt="Cheesecake Tortuga">
                            <span class="price">$89</span>
                        </div>
                        <div class="menu-info">
                            <h3>PAY DE LIMÓN</h3>
                            <p></p>
                        </div>
                    </div>


                    <div class="menu-item fade-in-up" data-category="Postres">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/nievefresa.jpeg" alt="Pastel de Nieve Fresa">
                            <span class="price">$119</span>
                        </div>
                        <div class="menu-info">
                            <h3>PASTEL DE NIEVE FRESA</h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Postres">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/milky.jpeg" alt="Pastel de Nieve Milky Way">
                            <span class="price">$119</span>
                        </div>
                        <div class="menu-info">
                            <h3>PASTEL DE NIEVE MILKY WAY</h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Postres">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/oreo.jpg" alt="Pastel de Nieve Oreo">
                            <span class="price">$119</span>
                        </div>
                        <div class="menu-info">
                            <h3>PASTEL DE NIEVE OREO</h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Postres">
                        <div class="menu-img">
                            <img loading="lazy" src="" alt="Galleta">
                            <span class="price">$20</span>
                        </div>
                        <div class="menu-info">
                            <h3>GALLETA</h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Postres">
                        <div class="menu-img">
                            <img loading="lazy" src="" alt="Galleta 3x">
                            <span class="price">$55</span>
                        </div>
                        <div class="menu-info">
                            <h3>GALLETA 3X</h3>
                            <p>Paquete de 3 galletas.</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Bebidas sin alcohol">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/frutosrojos.jpeg" alt="Frutos Rojos">
                            <span class="price">$80</span>
                        </div>
                        <div class="menu-info">
                            <h3>FRUTOS ROJOS (500ml)</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="menu-item fade-in-up" data-category="Bebidas sin alcohol">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/limonadafrutosrojos.jpeg" alt="Limonada de Frutos Rojos">
                            <span class="price">$55</span>
                        </div>
                        <div class="menu-info">
                            <h3>LIMONADA DE FRUTOS ROJOS (500ml)</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="menu-item fade-in-up" data-category="Bebidas sin alcohol">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/sandia.jpeg" alt="Agua de Sandía">
                            <span class="price">$40</span>
                        </div>
                        <div class="menu-info">
                            <h3>AGUA DE SANDÍA (500ml)</h3>
                            <p></p>
                        </div>
                    </div>
                    <!-- ========== TABLAS BEBIDAS SIN ALCOHOL ========== -->

                    <!-- AGUAS DE FRESA -->
                    <div class="menu-item fade-in-up cerveza-card bebida-card" data-category="Bebidas sin alcohol">
                        <div class="cerveza-header bebida-header">
                            <i class="fas fa-glass-whiskey"></i>
                            <h3>AGUAS DE FRESA <span class="cerveza-ml">(500ml)</span></h3>
                        </div>
                        <div class="cerveza-list">
                            <div class="cerveza-row"><span class="cerveza-name">Agua de Fresa</span><span class="cerveza-price">$40</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Agua de Fresa con Limón</span><span class="cerveza-price">$40</span></div>
                            
                            <div class="cerveza-row jarra-row"><span class="cerveza-name">Jarra </span><span class="cerveza-price">$179</span></div>
                        </div>
                    </div>

                    <!-- AGUAS DE LIMÓN -->
                    <div class="menu-item fade-in-up cerveza-card bebida-card" data-category="Bebidas sin alcohol">
                        <div class="cerveza-header bebida-header">
                            <i class="fas fa-lemon"></i>
                            <h3>AGUAS DE LIMÓN <span class="cerveza-ml">(500ml)</span></h3>
                        </div>
                        <div class="cerveza-list">
                            <div class="cerveza-row"><span class="cerveza-name">Agua de Limón</span><span class="cerveza-price">$40</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Agua de Pepino Limón</span><span class="cerveza-price">$40</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Limonada Mineral</span><span class="cerveza-price">$55</span></div>
                            <div class="cerveza-row jarra-row"><span class="cerveza-name">Jarra </span><span class="cerveza-price">$179</span></div>
                        </div>
                    </div>

                    <!-- AGUAS DE PIÑA -->
                    <div class="menu-item fade-in-up cerveza-card bebida-card" data-category="Bebidas sin alcohol">
                        <div class="cerveza-header bebida-header">
                            <i class="fas fa-glass-whiskey"></i>
                            <h3>AGUAS DE PIÑA <span class="cerveza-ml">(500ml)</span></h3>
                        </div>
                        <div class="cerveza-list">
                            
                            <div class="cerveza-row"><span class="cerveza-name">Agua de Piña con Mango</span><span class="cerveza-price">$40</span></div>
                            <div class="cerveza-row jarra-row"><span class="cerveza-name">Jarra </span><span class="cerveza-price">$179</span></div>
                        </div>
                    </div>

                    <!-- AGUAS DE MANGO -->
                    <div class="menu-item fade-in-up cerveza-card bebida-card" data-category="Bebidas sin alcohol">
                        <div class="cerveza-header bebida-header">
                            <i class="fas fa-glass-whiskey"></i>
                            <h3>AGUAS DE MANGO <span class="cerveza-ml">(500ml)</span></h3>
                        </div>
                        <div class="cerveza-list">
                            <div class="cerveza-row"><span class="cerveza-name">Agua de Mango</span><span class="cerveza-price">$40</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Agua de Mango Fresa</span><span class="cerveza-price">$40</span></div>
                            
                            <div class="cerveza-row jarra-row"><span class="cerveza-name">Jarra </span><span class="cerveza-price">$179</span></div>
                        </div>
                    </div>

                    <!-- AGUAS DE JAMAICA -->
                    <div class="menu-item fade-in-up cerveza-card bebida-card" data-category="Bebidas sin alcohol">
                        <div class="cerveza-header bebida-header">
                            <i class="fas fa-glass-whiskey"></i>
                            <h3>AGUAS DE JAMAICA <span class="cerveza-ml">(500ml)</span></h3>
                        </div>
                        <div class="cerveza-list">
                            <div class="cerveza-row"><span class="cerveza-name">Agua de Jamaica</span><span class="cerveza-price">$40</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Agua de Jamaica con Limón</span><span class="cerveza-price">$40</span></div>
                            <div class="cerveza-row jarra-row"><span class="cerveza-name">Jarra </span><span class="cerveza-price">$179</span></div>
                        </div>
                    </div>

                    <!-- AGUAS DE FRUTOS ROJOS -->
                    <div class="menu-item fade-in-up cerveza-card bebida-card" data-category="Bebidas sin alcohol">
                        <div class="cerveza-header bebida-header">
                            <i class="fas fa-wine-glass-alt"></i>
                            <h3>AGUAS DE FRUTOS ROJOS</h3>
                        </div>
                        <div class="cerveza-list">
                            <div class="cerveza-row"><span class="cerveza-name">Frutos Rojos <span class="cerveza-ml">(500ml)</span></span><span class="cerveza-price">$80</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Limonada de Frutos Rojos <span class="cerveza-ml">(500ml)</span></span><span class="cerveza-price">$55</span></div>
                            <div class="cerveza-row jarra-row"><span class="cerveza-name">Jarra de Frutos Rojos </span><span class="cerveza-price">$320</span></div>
                            <div class="cerveza-row jarra-row"><span class="cerveza-name">Jarra de Limonada de Frutos Rojos </span><span class="cerveza-price">$220</span></div>
                        </div>
                    </div>

                    <!-- JUGOS Y VARIEDAD -->
                    <div class="menu-item fade-in-up cerveza-card bebida-card" data-category="Bebidas sin alcohol">
                        <div class="cerveza-header bebida-header">
                            <i class="fas fa-blender"></i>
                            <h3>JUGOS Y VARIEDAD</h3>
                        </div>
                        <div class="cerveza-list">
                            <div class="cerveza-row"><span class="cerveza-name">Jugo de Manzana <span class="cerveza-ml">(500ml)</span></span><span class="cerveza-price">$35</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Jugo de Mango <span class="cerveza-ml">(500ml)</span></span><span class="cerveza-price">$35</span></div>
                            
                            <div class="cerveza-row"><span class="cerveza-name">Jugo de Durazno <span class="cerveza-ml">(500ml)</span></span><span class="cerveza-price">$35</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Jugo de Naranja <span class="cerveza-ml">(500ml)</span></span><span class="cerveza-price">$35</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Fuzetea Limón <span class="cerveza-ml">(355ml)</span></span><span class="cerveza-price">$35</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Fuzetea Durazno <span class="cerveza-ml">(355ml)</span></span><span class="cerveza-price">$35</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Agua Embotellada <span class="cerveza-ml">(500ml)</span></span><span class="cerveza-price">$25</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Café Frío</span><span class="cerveza-price">$65</span></div>
                        </div>
                    </div>

                    <!-- REFRESCOS Y VARIEDAD -->
                    <div class="menu-item fade-in-up cerveza-card bebida-card" data-category="Bebidas sin alcohol">
                        <div class="cerveza-header bebida-header">
                            <i class="fas fa-glass-whiskey"></i>
                            <h3>REFRESCOS Y VARIEDAD</h3>
                        </div>
                        <div class="cerveza-list">
                            <div class="cerveza-row"><span class="cerveza-name">Coca-Cola <span class="cerveza-ml">(500ml)</span></span><span class="cerveza-price">$40</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Coca-Cola Light <span class="cerveza-ml">(500ml)</span></span><span class="cerveza-price">$40</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Coca-Cola Sin Azúcar <span class="cerveza-ml">(500ml)</span></span><span class="cerveza-price">$40</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Topochico <span class="cerveza-ml">(355ml)</span></span><span class="cerveza-price">$35</span></div>
                        </div>
                    </div>


                    <!-- ==================== CERVEZAS ==================== -->

                    <div class="menu-item fade-in-up cerveza-card mix-card" data-category="Cervezas">
                        <div class="cerveza-header mix-header">
                            <i class="fas fa-cocktail"></i>
                            <h3>MIX DE SABORES</h3>
                        </div>
                        <div class="cerveza-list">
                            <div class="mix-row">
                                <div class="mix-info">
                                    <span class="cerveza-name">Tarro Michelado</span>
                                    <span class="mix-desc">Limón, sal y salsas en tarro escarchado.</span>
                                </div>
                                <span class="cerveza-price">$45</span>
                            </div>
                            <div class="mix-row">
                                <div class="mix-info">
                                    <span class="cerveza-name">Clamato Preparado</span>
                                    <span class="mix-desc">Clamato con limón, salsas y especias.</span>
                                </div>
                                <span class="cerveza-price">$55</span>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up cerveza-card" data-category="Cervezas">
                        <div class="cerveza-header">
                            <i class="fas fa-beer"></i>
                            <h3>CERVEZAS CLARAS / LAGER CLARAS <span class="cerveza-ml">(355ml)</span></h3>
                        </div>
                        <div class="cerveza-list">
                            <div class="cerveza-row"><span class="cerveza-name">Indio</span><span class="cerveza-price">$45</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Tecate Ligth</span><span class="cerveza-price">$45</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Tecate Roja</span><span class="cerveza-price">$50</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Carta Blanca</span><span class="cerveza-price">$45</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">XX Lager</span><span class="cerveza-price">$50</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Bohemia Clara</span><span class="cerveza-price">$55</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Bohemia Cristal</span><span class="cerveza-price">$55</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Modelo Especial</span><span class="cerveza-price">$55</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Stella Artois</span><span class="cerveza-price">$59</span></div>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up cerveza-card" data-category="Cervezas">
                        <div class="cerveza-header">
                            <i class="fas fa-beer"></i>
                            <h3>CERVEZAS ÁMBAR / OSCURAS <span class="cerveza-ml">(355ml)</span></h3>
                        </div>
                        <div class="cerveza-list">
                            <div class="cerveza-row"><span class="cerveza-name">XX Ámbar</span><span class="cerveza-price">$50</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Bohemia Oscura</span><span class="cerveza-price">$55</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Modelo Negra</span><span class="cerveza-price">$55</span></div>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up cerveza-card" data-category="Cervezas">
                        <div class="cerveza-header">
                            <i class="fas fa-beer"></i>
                            <h3>CERVEZA LIGHT / ULTRA <span class="cerveza-ml">(355ml)</span></h3>
                        </div>
                        <div class="cerveza-list">
                            <div class="cerveza-row"><span class="cerveza-name">Amstel Ultra</span><span class="cerveza-price">$50</span></div>
                            <div class="cerveza-row"><span class="cerveza-name">Michelob Ultra</span><span class="cerveza-price">$50</span></div>
                        </div>
                    </div>


                    <!-- ==================== VINOS ==================== -->

                    <div class="menu-item fade-in-up" data-category="Vinos">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/vinotinto.jpeg" alt="Casa Madero 3V Tinto">
                            <span class="price">$139</span>
                        </div>
                        <div class="menu-info">
                            <span class="vino-tipo">Vino Tinto</span>
                            <h3>CASA MADERO 3V</h3>
                            <p>México, Valle de Parras | Cabernet Sauvignon + Merlot + Tempranillo. (150ml)</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Vinos">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/vinorosa.jpeg" alt="Casa Madero V Rosado">
                            <span class="price">$119</span>
                        </div>
                        <div class="menu-info">
                            <span class="vino-tipo">Vino Rosado</span>
                            <h3>CASA MADERO V</h3>
                            <p>México, Valle de Parras | Syrah. (150ml)</p>
                        </div>
                    </div>

                    <div class="menu-item fade-in-up" data-category="Vinos">
                        <div class="menu-img">
                            <img loading="lazy" src="imgmenu/pizzasarte/vinoblanco.jpeg" alt="Casa Madero 2V Blanco">
                            <span class="price">$119</span>
                        </div>
                        <div class="menu-info">
                            <span class="vino-tipo">Vino Blanco</span>
                            <h3>CASA MADERO 2V</h3>
                            <p>México, Valle de Parras | Chardonnay + Chenin Blanc. (150ml)</p>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>