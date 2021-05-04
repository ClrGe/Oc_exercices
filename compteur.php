
<?php
    include("getArticle.php");
    mysql_query("UPDATE vues SET vues = vues + 1");
    $count = mysql_fetch_row(mysql_query("SELECT vues FROM vues"));
    print "$count[0]"; 
?>


 
