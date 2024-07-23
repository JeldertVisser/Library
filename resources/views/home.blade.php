<?php
use Illuminate\Support\Facades\DB;

?>
@auth
    {{ $msg }}
    <br><br>
    <a href='{{ route('logout') }}'>
        Uitloggen
    </a>
    <br><br>
    <?php
    $books = DB::table('books')->get();

    foreach ($books as $book){
        echo "Titel: ".$book->title.", ";
        echo "by ".$book->author.'<br>';
    }


    ?>
@endauth

@guest
    niet ingelogd...
@endguest