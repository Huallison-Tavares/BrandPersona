<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php do_action("get_theme_styles_css") ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body onscroll="scrollFunction()" <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header class="header">
        <nav>
            <div class="img">
                <img src="<?= do_action("url_image")?>/secao_1/secao-01-BrandPersona_Marca-03 1.png" alt="Brand Persona">
                <div class="responsive">
                    <img src="<?= do_action("url_image")?>/secao_1/bar.png" alt="bar" id="bar">
                    <img src="<?= do_action("url_image")?>/secao_1/cross-button.png" alt="cross button" id="close-bar" class="none">
                </div>
            </div>
            <ul class="list-header none">
                <li><a href="#secao-01">HOME</a></li>
                <li><a href="#secao-02">POR QUE BRAND PERSONA</a></li>
                <li><a href="#secao-02-influencia">O MERCADO</a></li>
                <li><a href="#secao-03">VANTAGENS</a></li>
                <li><a href="#secao-05">COMO FUNCIONA</a></li>
                <li><a href="#secao-06">O COMBO</a></li>
                <li><a href="#secao-09">CONTATO</a></li>
            </ul>
            
        </nav>
    </header>

    <!-- Seção 1 -->
    <section id="secao-01" class="secao-01 secao">
        <div class="content">
            <div class="box-text">
                <p>leve sua empresa para a nova realidade digital</p>
                <h1>A sua persona virtual com alta performance</h1>
                <p>Para marcas inovadoras: Brand Persona PYXYS + Ilustraria 3D é o primeiro combo do Brasil de construção de avatares 3D, com tecnologia de ponta em computação gráfica, combinada à mais completa Estratégia de Content, Growth e Performance Data-driven</p>
                <button type="button"><a href="#">QUERO SABER MAIS</a></button>
        
                <div class="logos">
                    <p>Um produto:</p>
                    <img src="<?= do_action("url_image")?>/secao_1/secao-01-pyxys.png" alt="Logo da PYXYS">
                    <img src="<?= do_action("url_image")?>/secao_1/secao-01-ilustraria.png" alt="Logo da Ilustraria">
                </div>
            </div>
        </div>
    </section>