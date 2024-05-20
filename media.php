<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Dos Alunos</title>
</head>
<body>
    <h1> Média Dos Alunos 3A Sesi Moreno </h1>
    <?php
        $media;
            $nota1 = 5;
            $nota2 = 5;
            $nota3 = 5;

        $media = ($nota1 + $nota2  + $nota3) / 3;

        echo "SUA MEDIA FOI $media";

        if($media > 8){
        echo "aprovado"
        };
        else($media < 8){
            echo "reprovado"
        };
    ?>
</body>
</html>