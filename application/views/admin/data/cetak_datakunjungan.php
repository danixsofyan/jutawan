<?php 

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<style>
.JUDUL
{
  color:#000000;
  font-weight:bold;
  height: 30px;
  text-align:center;
  vertical-align:middle !important;
  margin:0;
  border:none;font-family: Arial Narrow,Arial,sans-serif;font-size:18px;
}
.GridKepalaRow
{
    background-color:#c4d79b;*/
    color: black;
    font-weight:bold;
    /*font-size:14px;*/
    height: 42px;
    text-align:center;
  vertical-align:middle !important;
  font-family: Calibri,sans-serif;
}
/*col {mso-width-source:auto;}*/
.Gridno
{
    background-color:#c4d79b;*/
    color: black;
    font-weight:bold;
    font-size:10px;
    height: 20px;
    text-align:center;
  vertical-align:middle !important;
  font-family: Calibri,sans-serif;
}
.Tingkat1
{
    /*background-color: #ffff99;*/ font-size:13px; height: 30px;font-weight:bold;
  vertical-align:middle !important;
}
.Tingkat_total
{
    background-color:#fff; font-size:15px;font-weight:bold;
  vertical-align:middle !important;
}


</style>


<table width="100%" border="0px" cellspacing="0px" cellpadding="0px" style="border:none;">
  <tr>
    <td colspan='5' class="JUDUL">
      <p>REKAP KUNJUNGAN WISATAWAN </p>
  </td>
  </tr>
  <tr>
  </tr>
</table>

<table width="100%" border="1" cellpadding="2" cellspacing="0">
  <thead>
  <tr class="GridKepalaRow">
    <td rowspan="2">No</td>
    <td rowspan="1">Nama Lokasi</td>
    <td rowspan="1">Tahun</td>
    <td rowspan="1">Bulan</td>
    <td rowspan="1">Jumlah Pengunjung</td>
  </tr>
  <tr class="Gridno">
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
  </tr>
</thead>


<tbody>
  <?php $i=1; foreach($pengunjung as $p) { ?>
    <tr class="Tingkat1">
      <th scope="row"><?= $i; ?></th>
       <td align="left"> <?= $p['nama_lks']; ?></td>
        <td align="left"> <?= $p['y']; ?></td>
       <td align="left">
         <?php 
                switch (true) {
                    case $p['m'] == 1:
                        print "Januari";
                    break;
                    case $p['m'] == 2:
                        print "Februari";
                    break;
                    case $p['m'] == 1:
                        print "Januari";
                    break;
                    case $p['m'] == 3:
                        print "Maret";
                    break;
                    case $p['m'] == 4:
                        print "April";
                    break;
                    case $p['m'] == 5:
                        print "Mei";
                    break;
                    case $p['m'] == 6:
                        print "Juni";
                    break;
                    case $p['m'] == 7:
                        print "Juli";
                    break;
                    case $p['m'] == 8:
                        print "Agustus";
                    break;
                    case $p['m'] == 9:
                        print "September";
                    break;
                    case $p['m'] == 10:
                        print "Oktober";
                    break;
                    case $p['m'] == 11:
                        print "November";
                    break;
                    case $p['m'] == 12:
                        print "Desember";
                    break;
                };
            ?>         
       </td>
       <td align="right"><?= number_format($p['jumlah'], 0, ".", "."); ?></td>
    </tr>
  <?php $i++; } ?>


    <tr class="Tingkat_total">
    <td align="left" colspan="4">TOTAL</td>
    <td align="right"><?php foreach ($totalpengunjungbu as $tp) : echo number_format($tp['jumlah'], 0, ".", "."); endforeach; ?></td>
  </tr>
</tbody>
</table>