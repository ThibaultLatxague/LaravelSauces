<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
        <h1>Vous êtes connecté</h1>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Se déconnecter</button>
        </form>
    @else
        <h1>Vous n'êtes pas connecté</h1>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Mot de passe">
            <button type="submit">S'inscrire</button>
        </form>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Mot de passe">
            <button type="submit">Se connecter</button>
        </form>
    @endauth
</body>
</html>