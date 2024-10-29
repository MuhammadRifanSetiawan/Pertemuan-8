<html>
<head><title>23753104 & </title>
</head>
<body>
    <h2>FORM INPUTAN NILAI</h2>

    <form method="post" action="">
        NIM : <input type="text" name=nim required><br><br>
        UTS :<input type="number" name="uts" min="0" max="100" required><br><br>
        TUGAS :<input type="number" name="tugas" min="0" max="100" required> <br><br>
        UAS :<input type="number" name="uas" min="0" max="100" required><br><br>
        <input type="submit" name="submit" value="kirim"><br><br>
        <input type="reset" name="reset" value="batal"> <br><br>
    </form>
<?php
if (isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $uts = $_POST['uts'];
    $tugas = $_POST['tugas'];
    $uas = $_POST['uas'];

    $nilaiakhir = ($uts*0.3) + ($tugas*0.25) + ($uas*0.45);

    if ($nilaiakhir>=75){
        $index = "A";
    } elseif ($nilaiakhir>=55) {
        $index = "B";
    }elseif ($nilaiakhir>=55) {
        $index = "C";
    }elseif ($nilaiakhir>=55) {
        $index = "D";
    }else {
      $index = "E";
    }
echo "------------------------------------------------- <br>";
echo "
Nilai UTS            : $uts <br>
Nilai Tugas          : $tugas<br>
Nilai UAS            : $uas<br>
Nilai Akhir          : $nilaiakhir<br>
Index                : $index  <br>";

echo "Nim <b>$nim</b> mempunyai nilai akhir <b>$nilaiakhir</b> dan index <b>$index</b>";
}
?>
</body>
</html>