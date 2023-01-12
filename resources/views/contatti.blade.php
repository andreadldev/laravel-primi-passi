<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti</title>
    @include('components/cdn')
</head>
<body>
<body class="vh-100">
    @include ('components/nav')
    <div class="d-flex flex-column h-100 justify-content-center align-items-center">
        <h2>Contatti</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="textarea" class="form-label">Messaggio</label>
                <textarea class="form-control" id="textarea" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
</body>
</html>