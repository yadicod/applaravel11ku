<?php 
$ns1 = ['id'=>1,'prodi'=>'SI','jumlah'=>1020];
$ns2 = ['id'=>1,'prodi'=>'TI','jumlah'=>1215];
$ns3 = ['id'=>1,'prodi'=>'BD','jumlah'=>62];

$data_mhs = [$ns1, $ns2 , $ns3,];
?>

<h2 align="center">Laporan Program Studi<br>Tahun 2024</h2>
 <table align="center" border="1" width="30%">
 <thead>
 <tr>
 <th>No</th><th>Prodi</th><th>Jumlah</th>
 </tr> 
 </thead>
 <tbody>

<?php
$nomor = 1; 
foreach($data_mhs as $ns){
echo '<tr><td>'.$nomor.'</td>';
echo '<td>'.$ns['prodi'].'</td>';
echo '<td>'.$ns['jumlah'].'</td>';
echo '<tr/>';
$nomor++;
}
?>

 </tbody> 
 </table>
