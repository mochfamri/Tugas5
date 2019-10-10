<?php
// membuat fungsi
function myTest() {
      // deklarasi x sebagai static
    static $x = 0;
    // mencetak nilai dari variabel x
    echo $x;
     // increment
    $x++;
}
// memanggil fungsi
myTest();
myTest();
myTest();
?>
