
<?php

// headers for exporting excel

header("Content-Disposition: attachment; filename=excel_kunjungan.xls");

header("Content-Type: application/vnd.ms-excel");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Expires: 0");

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


<style>
.GridKepalaRow
{
    /*background-color:#c4d79b;*/
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
    /*background-color:#c4d79b;*/
    color: black;
    font-weight:bold;
    font-size:10px;
    height: 20px;
    text-align:center;
  vertical-align:middle !important;
  font-family: Calibri,sans-serif;
}
.Tingkat3
{
    background-color: #ffff99; font-size:13px; height: 30px;font-weight:bold;
  vertical-align:middle !important;


</style>



<table width="100%" border="1" cellpadding="2" cellspacing="0">
  <thead>
  <tr class="GridKepalaRow">
    <td rowspan="1">Nama Lokasi</td>
    <td rowspan="1">Laporan Bulan</td>
    <td rowspan="1">Jumlah Pengunjung</td>
  </tr>
  <tr class="Gridno">
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
</thead>
<tbody>

<?php 
   foreach ($this->db->query("SELECT * FROM data_pengunjung")->result() as $k);
 ?>



  <tr class="Tingkat3">
    <td align="center"><?= $k->id_lokasi; ?></td>
    <td align="center"><?= $k->date; ?></td>
    <td align="center"><?= $k->jumlah; ?></td>
  </tr>



</body>
</html>