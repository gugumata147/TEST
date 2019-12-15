<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("css/container-box.css")}}" type="text/css">
    <link rel="icon" type="imagem/png" href="{{asset("images/logo-atak-sistemas.png")}}" />
    <title>Atak Sistemas Teste</title>
</head>
<body>
    <div class="mt-4 d-flex justify-content-center">
        <div class="form-group row col-sm-6">
            <div class="col-sm-10 pl-0">
                <input type="text" name="search" id="searchGoogleInput" class="form-control" placeholder="Pesquisar">
            </div>
            <button type="button" id="searchGoogle" class="col-sm-2 btn btn-danger">Buscar</button>
        </div>
    </div>
    <div class="mt-3 ml-2 d-flex justify-content-center border-danger border-top">
        <div class="col-md-10 resultDiv container-box ">
            <div class="show mb-3 mt-2 justify-content-center">
                <div class="title"></div>
                <div class="link">
                    <a href="" class="url text-danger" target="_blank"></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="{{asset("js/search.js")}}"></script>
<script>
    const baseUrl = '{{route("search", "")}}';
</script>
