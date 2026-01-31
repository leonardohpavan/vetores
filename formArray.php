<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #383838;
            color: #FFFFFF;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Formulário Exemplo</h1>
        </div>
    </div>
    <div class="row">
        <form action="respform.php" method="post">
            <div class="mb-3">
                <label for="inputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputNome" name="nome">
            </div>
            <div class="mb-3">
                <label for="InputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="InputEmail1" name="email">
            </div>
            <select class="form-select" aria-label="Default select example" name="periodo">
                <option selected>Período</option>
                <option value="Manhã">Manhã</option>
                <option value="Tarde">Tarde</option>
                <option value="Noite">Noite</option>
            </select>
            <div class="mb-3 form-check">
                <h3>Cursos de Interesse</h3>
                <input type="checkbox" class="form-check-input" id="checkTI" name="cursos[]" value="Técnico em Informática">
                <label class="form-check-label" for="checkTI">Técnico em Informática</label><br>
                <input type="checkbox" class="form-check-input" id="checkTecWeb" name="cursos[]" value="Técnico em Informática para Internet">
                <label class="form-check-label" for="checkTecWeb">Técnico em Informática para Internet</label><br>
                <input type="checkbox" class="form-check-input" id="checkTCG" name="cursos[]" value="Técnico em Computação Gráfica">
                <label class="form-check-label" for="checkTCG">Técnico em Computação Gráfica</label><br>
                <input type="checkbox" class="form-check-input" id="checkDesign" name="cursos[]" value="Técnico em Design Gráfico">
                <label class="form-check-label" for="checkDesign">Técnico em Design Gráfico</label><br>
                <input type="checkbox" class="form-check-input" id="checkMulti" name="cursos[]" value="Técnico em Multimedia">
                <label class="form-check-label" for="checkMulti">Técnico em Multimedia</label><br>

            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>