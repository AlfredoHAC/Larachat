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
        </section>
        <section id='chat'>
            <h3>Novo Chat</h3>
            <hr>
            <div>
                <form method="POST" action='/chats'>
                    @csrf
                    <div>
                        <label for='selUser1'>De:</label>
                        <select name="users_1" id="selUser1">
                            @foreach($users as $user)
                            <option value={{ $user->id }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for='selUser2'>Para:</label>
                        <select name="users_2" id="selUser2">
                            @foreach($users as $user)
                            <option value={{ $user->id }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="txtContent">Mensagem:</label><br />
                        <textarea name="txtContent" id="txtContent" cols="72" rows="16"></textarea>
                    </div>
                    <div>
                        <button type="submit">Enviar Mensagem</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>

</html>