<?php
    $ns1 = ["id" => 1, "nim" => "011022", "uts" => 80, "uas"=> 84,"tugas"=> 78];
    $ns2 = ["id" => 2, "nim" => "011022", "uts" => 70, "uas"=> 54,"tugas"=> 88];
    $ns3 = ["id" => 3, "nim" => "011022", "uts" => 50, "uas"=> 84,"tugas"=> 58];
    $ns4 = ["id" => 4, "nim" => "011022", "uts" => 78, "uas"=> 87,"tugas"=> 57];
    $ns5 = ["id" => 5, "nim" => "011022", "uts" => 67, "uas"=> 74,"tugas"=> 58];
    $ar_nilai = [$ns1, $ns2, $ns3, $ns4, $ns5];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Daftar Nilai Siswa</h3>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
            </tr>
            </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach($ar_nilai as $ns){
                echo '<tr><td>'.$nomor.'</td>';
                echo '<td>'.$ns['nim'].'</td>';
                echo '<td>'.$ns['uts'].'</td>';
                echo '<td>'.$ns['uas'].'</td>';
                echo '<td>'.$ns['tugas'].'</td>';
                $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
                echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                echo '<tr/>';
                $nomor++;
            }
        ?>
    </tbody>
 </table>
</body>
</html>