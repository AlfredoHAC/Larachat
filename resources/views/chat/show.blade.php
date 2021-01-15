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
        <section id='chat'>
            <span><strong>Usuário 1:</strong> {{ $chat->users[0]->email }}</span>
            <span><strong>Usuário 2:</strong> {{ $chat->users[1]->email }}</span>
        </section>
        <section id='messages'>
            <hr>
            <div>
                @foreach($messages as $message)
                <div>
                    <span><strong>{{ $message->user->name }}:</strong></span>
                    <div>{{ $message->content }}</div>
                </div>
                @endforeach
            </div>
            <hr>
            <div>
                <form method="POST" action="/chats/{{ $chat->id }}">
                    @csrf
                    @method('PATCH')
                    <div>
                        <label for="selSender">Enviar como:</label>
                        <select name="selSender" id="selSender">
                            @foreach($users as $user)
                            <option value={{ $user->id }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="txtContent">Mensagem:</label><br />
                        <textarea name="txtContent" id="txtContent" cols="64" rows="8"></textarea>
                    </div>
                    <div>
                        <button type="submit">Enviar Mensagem</button>
                    </div>

                </form>
            </div>
            <a href="/">Voltar</a>
        </section>
    </main>
</body>

</html>