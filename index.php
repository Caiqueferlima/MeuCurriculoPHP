<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Currículo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php
        $nomeCompleto = "Caíque Fernandes de Lima"; // Substitua pelo seu nome
        $idade = 20; // Substitua pela sua idade
        $fotoPerfil = "imagens/imagem.jpg"; // Caminho para sua foto
        ?>
        <div class="perfil">
            <img src="<?php echo $fotoPerfil; ?>" alt="Foto de Perfil">
            <h1><?php echo $nomeCompleto; ?></h1>
            <p>Idade: <?php echo $idade; ?> anos</p>
        </div>
    </header>
    <section id="experiencia">
        <h2>Experiência Profissional</h2>
        <?php
        $experiencias = [
            [
                "empresa" => "Compass Uol",
                "cargo" => "Estagiário",
                "periodo" => "Jul/24 - Dez/24",
                "descricao" => "Desenvolvimento de projetos reais com diversas tecnologias e métodos ágeis."
            ],
            [
                "empresa" => "Pizzaria Aciole",
                "cargo" => "Atendimento ao Cliente",
                "periodo" => "Jun/20 - Jun/24",
                "descricao" => "Desenvolvimento de habilidades interpessoais, comunicação e resolução de problemas."
            ]
            // Adicione mais experiências conforme necessário
        ];
        ?>
        <?php if (!empty($experiencias)): ?>
            <ul>
                <?php foreach ($experiencias as $experiencia): ?>
                    <li>
                        <h3><?php echo $experiencia['cargo']; ?></h3>
                        <h4><?php echo $experiencia['empresa']; ?></h4>
                        <p class="periodo"><?php echo $experiencia['periodo']; ?></p>
                        <p><?php echo $experiencia['descricao']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Sem experiência profissional para mostrar.</p>
        <?php endif; ?>
    </section>
    <section id="cursos">
        <h2>Cursos e Formações</h2>
        <?php
        $cursos = [
            [
                "nome" => "Bacharelado em Sistemas de Informação",
                "instituicao" => "IFCE",
                "periodo" => "Mar/2023 a Jul/2027"
            ],
            [
                "nome" => "Inteligência Artificial para a Vida Cotidiana",
                "instituicao" => "ENAP",
                "periodo" => "Jul/2023 a Ago/2023"
            ],
            [
                "nome" => "Python iniciante ao avançado",
                "instituicao" => "Fundação Bradesco",
                "periodo" => "Jul/2024 a Out/2024"
            ]
            // Adicione mais cursos conforme necessário
        ];
        ?>
        <?php if (!empty($cursos)): ?>
            <ul>
                <?php foreach ($cursos as $curso): ?>
                    <li>
                        <h3><?php echo $curso['nome']; ?></h3>
                        <h4><?php echo $curso['instituicao']; ?></h4>
                        <p class="periodo"><?php echo $curso['periodo']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nenhum curso ou formação para mostrar.</p>
        <?php endif; ?>
    </section>
    <section id="habilidades">
        <h2>Habilidades</h2>
        <?php
        $idiomas = [
            "Português" => 6, // Avalie sua habilidade de 0 a 6
            "Inglês" => 5,
            "Espanhol" => 5,
            "Alemão" => 2,
            "Francês" => 1
        ];
        $habilidades = [
            "PHP" => 5, // Avalie sua habilidade de 0 a 10
            "HTML" => 8,
            "CSS" => 8,
            "JavaScript" => 5,
            "Banco de Dados" => 6
        ];
        $hobbies = [
            "Ler" => 10,  // Avalie seu nivel de interesse de 0 a 10
            "Praticar esportes" => 10,
            "Tocar música" => 8
        ];
        ?>
        <h3>Habilidades</h3>
        <?php if (!empty($habilidades)): ?>
            <ul>
                <?php foreach ($habilidades as $habilidade => $nivel): ?>
                    <li>
                        <?php echo $habilidade; ?>
                        <div class="barra-nivel">
                            <?php for ($i = 0; $i < $nivel; $i++): ?>
                                <span class="preenchido"></span>
                            <?php endfor; ?>
                            <?php for ($i = $nivel; $i < 10; $i++): ?>
                                <span></span>
                            <?php endfor; ?>
                            (<?php echo $nivel; ?>/10)
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <h3>Hobbies</h3>
        <?php if (!empty($hobbies)): ?>
            <ul>
                <?php foreach ($hobbies as $hobby => $interesse): ?>
                    <li>
                        <?php echo $hobby; ?>
                        <div class="barra-nivel">
                            <?php for ($i = 0; $i < $interesse; $i++): ?>
                                <span class="preenchido hobby"></span>
                            <?php endfor; ?>
                            <?php for ($i = $interesse; $i < 10; $i++): ?>
                                <span></span>
                            <?php endfor; ?>
                            (<?php echo $interesse; ?>/10)
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <h3>Idiomas</h3>
        <?php if (!empty($idiomas)): ?>
            <ul>
                <?php foreach ($idiomas as $idioma => $nivel): ?>
                    <li>
                        <?php echo $idioma; ?>
                        <div class="barra-nivel idioma">
                            <?php for ($i = 0; $i < $nivel; $i++): ?>
                                <span class="preenchido idioma"></span>
                            <?php endfor; ?>
                            <?php for ($i = $nivel; $i < 6; $i++): ?>
                                <span></span>
                            <?php endfor; ?>
                            (<?php echo $nivel; ?>/6)
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

    </section>
    <footer>
        <p> <?php echo date("Y"); ?> Caíque Fernandes</p>
    </footer>
</body>

</html>