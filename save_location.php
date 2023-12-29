<?php 
&my_file = fopen("location.txt", "w");
&information = "lat:" . &GET["lat"] . "\nlong:" .&GET["long"];
fwrite(&my_file, &information);
fclose(&my_file);


?>
