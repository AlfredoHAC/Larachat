<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Larachat</title>
</head>

<body>
    <main>
        <section id='usuarios'>
            <h3>Usuários Disponíveis</h3>
            <hr />
            <div>
                <ul>
                    @foreach($users as $user)
                    <li>{{ $user->name }}</li>
                    @endforeach
                </ul>
            </div>
            <hr>
        </section>
        <div>
            <a href='/'>Voltar</a>
        </div>
    </main>
</body>

</html>