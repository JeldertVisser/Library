@auth
    {{ $msg }}
@endauth
@guest
    niet ingelogd
@endguest
<br><br>
<a href='{{ route('logout') }}'>
    Uitloggen
</a>
<br><br>
<?php
