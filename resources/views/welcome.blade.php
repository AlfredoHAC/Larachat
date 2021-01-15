<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Larachat</title>
</head>

<body>
    <main>
        <header>
            <h1>Larachat</h1>
        </header>
        <section id='usuarios'>
            <h4><a href='/users'>Ver Usuários Disponíveis</a></h4>
        </section>
        <section id='chats'>
            <h3>Chats - <a href="/chats/create">Novo Chat</a></h3>
            <hr>
            <div>
                <ul>
                    @foreach($chats as $chat)
                    <li>
                        <span><strong>Iniciado em:</strong> {{ $chat->created_at }}</span>
                        <span><strong>Usuário 1:</strong> {{ $chat->users[0]->name }}</span>
                        <span><strong>Usuário 2:</strong> {{ $chat->users[1]->name }}</span>

                        <a href='/chats/{{ $chat->id }}'>Abrir chat</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <hr>
        </section>
    </main>
</body>

</html>