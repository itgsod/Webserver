

<?php
class DB extends SQLite3
{
        function __construct( $file )
        {
            $this->open( $file );
        }
}

$db = new DB('sampleDB.sqlite' );



    if ($db = sqlite_open('sampleDB', 0666, $sqliteerror) ) { 
        $result = sqlite_query($db, 'select bar from foo');
        var_dump(sqlite_fetch_array($result) ); 
    } else {
        die($sqliteerror);
    }
?>
