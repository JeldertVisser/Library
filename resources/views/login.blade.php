{{ $msg }}
<br><br>
<!-- registreer -->
<form method="post" action="{{ route('create_account') }}">
    @csrf
    Gebruikersnaam: <div>
        <input type="text" name="name"><br>
    </div>
    Wachtwoord: <div>
        <input type="password" name="password"><br>
    </div>
    E-mail adres: <div>
        <input type="text" name="email"><br>
    </div>
    <input type="submit" value="Registreer"><br><br>
</form>

<!-- login -->
<form method='post' action='{{ route('verify_account') }}'>
    @csrf
    Gebruikersnaam: <div>
        <input type="text" name="name"><br>
    </div>
    Wachtwoord: <div>
        <input type="password" name="password"><br>
    </div>
        <input type="submit" value="Login"><br><br>
</form>
