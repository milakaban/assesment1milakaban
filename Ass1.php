<?php
    $Labtop = array(array('MEREK'=>'Apple',
              'RAM'=>8,
              'HARDDISK'=>512,
              'USB_TIPE_C'=>'TRUE',
              'HARGA'=>20000000),
          array('MEREK'=>'ASUS',
              'RAM'=>16,
              'HARDDISK'=>512,
              'USB_TIPE_C'=>'FALSE',
              'HARGA' =>18000000),
          array('MEREK'=>'LENOVO',
              'RAM'=>8,
              'HARDDISK'=>256,
              'USB_TIPE_C'=>'TRUE',
              'HARGA' =>8000000),
              );
     
    echo "<table border='1' cellpadding='5'>";
    echo "<thead>
          <th colspan='4'><b>LABTOP</b></th>
          </thead>
          <thead>
          <th><b>MEREK</b></th>
          <th><b>RAM</b></th>
          <th><b>HARDDISK</b></th>
          <th><b>USB_TYPE_C</b></th>
          <th><b>HARGA</b></th>
          </thead>";
    
    for($x=0;$x<count($Labtop);$x++){
        echo "<tr>";
        echo "<td>".$Labtop[$x]['MEREK']."</td>";
        echo "<td>".$Labtop[$x]['RAM']."</td>";  
        echo "<td>".$Labtop[$x]['HARDDISK']."</td>";  
        echo "<td>".$Labtop[$x]['USB_TIPE_C']."</td>";
        echo "<td>".$Labtop[$x]['HARGA']."</td>";  
        echo "</tr>";
    }
    
    echo "</table>";
    echo "<table border=0 cellpadding=8>
          <tr><td></td></tr>   
          </table>";
          ?>

