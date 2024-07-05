{{ $msg }}
<br><br>
<!-- registreer -->
{{-- action="{{ route('new_account') }}" --}}
<form method="post" >
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
{{-- action='{{ route('verify_account') }}'' --}}
<form method='post'>
    @csrf
    Gebruikersnaam: <div>
        <input type="text" name="name"><br>
    </div>
    Wachtwoord: <div>
        <input type="password" name="password"><br>
    </div>
        <input type="submit" value="Login"><br><br>
</form>
