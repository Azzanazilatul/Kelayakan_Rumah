<?php 
include ("inc_header.php");
?> 
<h1>Cara Menggunakan Perhitungan (RTLH) </h1>
<p>Program fuzzy kelayakan rumah dirancang untuk memudahkan pengguna 
   dalam melakukan penilaian kondisi rumah. Berikut adalah langkah-langkah 
   cara menggunakan program ini:
   <ol>
      <li>Persiapkan Data</li>
          Input Data : Siapkan Data Kondisi yang diperlukan untuk penilaian. 
          Data ini bisa mencakup kondisi diantaranya
            <ul>
              <li>Kondisi Dinding</li>
              <li>Kondisi Atap</li>
              <li>Kondisi Lantai</li>
            </ul>
       </ul>
       <br/>
       <li>Menjalankan Program
          <ul>
              <li>Buka Program: Jalankan aplikasi. Jika ini adalah aplikasi berbasis desktop,
                  buka file aplikasi tersebut. Jika menggunakan terminal atau command prompt,
                  navigasikan ke direktori program dan jalankan skrip.
              </li>
              <li>Input Data: Ikuti petunjuk di antarmuka pengguna untuk memasukkan data tentang rumah
                  yang akan dievaluasi. Pastikan untuk mengisi semua kriteria yang diperlukan.
              </li>
          </ul>
       </li>

       <br/>
       <li>Proses Evaluasi
          <ul>
             <li>Mulai Penilaian: Setelah semua data diinput, pilih opsi untuk memulai proses evaluasi.
                 Program akan menjalankan algoritma fuzzy logic untuk menentukan kelayakan rumah.
             </li>
             <li>Tunggu Hasil: Proses ini mungkin memerlukan waktu beberapa detik hingga menit tergantung pada
                 kompleksitas data dan kriteria yang dinilai.
             </li>
          </ul>
       </li>
       <br/>
       <li>Melihat Hasil dan Tindak Lanjut
           <ul>
             <li>Output Hasil: Setelah proses selesai, hasil evaluasi akan ditampilkan. Ini biasanya mencakup: Status kelayakan
                rumah (misalnya, "Layak Huni" atau "Tidak Layak Huni") yang disertai nilai dan hasilnya
             </li>
             <li> Tindak lanut digunakan untuk menentukan langkah selanjutnya, baik dalam perbaikina rumah yang dinyatakan tidak 
                  layak huni maupun dalam merencanakan program perbaikan perumahan.
             </li>
           </ul>
       </li>
   </ol><br/>
   <center><h1> Berikut Perhitungan  Dari program (RLTH&RLH)</h1></center>
   <table id="Kelayakan" cellpadding="3" cellpadding="6" border="1" align="center">
      <tr align="center">
         <th>  Nilai Kategori</th>
          <th> Atap (0-15)</th>
          <th> Lantai (0-30)</th>
          <th> Dinding (0-30)</th> 
      </tr>
      <tr align="center">
         <td>Kurang Baik</td>
         <td>[0,0,5,7]</td>
         <td>[0,0,10,15]</td>
         <td>[0,0,10,15]</td>
      </tr>
      <tr align="center">
         <td>Cukup Baik</td>
         <td>[5,7,9]</td>
         <td>[10,15,20]</td>
         <td>[10,15,20]</td>
      </tr>
      <tr align="center">
         <td>Baik</td>
         <td>[7,9,11]</td>
         <td>[15,20,25]</td>
         <td>[15,20,25]</td>
      </tr>
      <tr align="center">
         <td>Sangat Baik</td>
         <td>[9,11,15,15]</td>
         <td>[20,25,30,30]</td>
         <td>[20,25,30,30]</td>
      </tr>
   </table><br/>
   <p>Silahkan Masukan Nilai pada pengisian di bawah ini :</p>
   <form method="post" action="">
    <input type="number" name="atap" placeholder="Masukan Nilai Atap (0-30)" required="">
    <input type="number" name="dinding" placeholder="Masukan Nilai Dinding (0-30)" required="">
    <input type="number" name="lantai" placeholder="Masukan Nilai Lantai (0-30)" required="">
    <center><br/><input type="submit" name="submit" value="submit"></center>
</form>

<center><h3>Hasil Logika Fuzzy</h3>
<?php

function trapmf($x, $a, $b, $c, $d) {
    if ($b == $a) {
        $left_slope = $x <= $a ? 0 : 1;
    } else {
        $left_slope = ($x - $a) / ($b - $a);
    }

    if ($d == $c) {
        $right_slope = $x >= $d ? 0 : 1;
    } else {
        $right_slope = ($d - $x) / ($d - $c);
    }

    return max(min($left_slope, 1, $right_slope), 0);
}

function trimf($x, $a, $b, $c) {
    if ($b == $a) {
        $left_slope = $x <= $a ? 0 : 1;
    } else {
        $left_slope = ($x - $a) / ($b - $a);
    }

    if ($c == $b) {
        $right_slope = $x >= $c ? 0 : 1;
    } else {
        $right_slope = ($c - $x) / ($c - $b);
    }

    return max(min($left_slope, $right_slope), 0);
}

function kondisi_atap($x) {
    return [
        'kurang_baik' => trapmf($x, 0, 0, 10, 15),
        'cukup_baik' => trimf($x, 10, 15, 20),
        'baik' => trimf($x, 15, 20, 25),
        'sangat_baik' => trapmf($x, 20, 25, 30, 30)
    ];
}

function kondisi_lantai($x) {
    return [
        'kurang_baik' => trapmf($x, 0, 0, 10, 15),
        'cukup_baik' => trimf($x, 10, 15, 20),
        'baik' => trimf($x, 15, 20, 25),
        'sangat_baik' => trapmf($x, 20, 25, 30, 30)
    ];
}

function kondisi_dinding($x) {
    return [
        'kurang_baik' => trapmf($x, 0, 0, 10, 15),
        'cukup_baik' => trimf($x, 10, 15, 20),
        'baik' => trimf($x, 15, 20, 25),
        'sangat_baik' => trapmf($x, 20, 25, 30, 30)
    ];
}

function kelayakan($tidak_layak, $layak) {
    $nilai_kelayakan = ($tidak_layak * 30 + $layak * 70) / ($tidak_layak + $layak);
    return $nilai_kelayakan;
}

if (isset($_POST['submit'])) {
    $atap = $_POST['atap'];
    $dinding = $_POST['dinding'];
    $lantai = $_POST['lantai'];

    $fuzzy_atap = kondisi_atap($atap);
    $fuzzy_dinding = kondisi_dinding($dinding);
    $fuzzy_lantai = kondisi_lantai($lantai);

    $tidak_layak = min($fuzzy_atap['kurang_baik'], $fuzzy_dinding['kurang_baik'], $fuzzy_lantai['kurang_baik']);
    $layak = max($fuzzy_atap['sangat_baik'], $fuzzy_dinding['baik'], $fuzzy_lantai['baik']);

    $nilai_kelayakan = kelayakan($tidak_layak, $layak);
    
    echo "Nilai Kelayakan Rumah: " . $nilai_kelayakan . "<br>";

    if ($nilai_kelayakan >= 50) {
        echo "Kelayakan Rumah: Layak Huni";
    } else {
        echo "Kelayakan Rumah: Tidak Layak Huni";
    }
}
?>
<div class="penjelasan">
    <p><mark><strong>
       Hasil perhitungan ini mungkin tidak selalu akurat atau valid. Ada beberapa faktor yang dapat
       memengaruhi keakuratan, seperti keterbatasan data, asumsi yang digunakan, atau kesalahan input.
       Oleh karena itu, hasil ini harus digunakan dengan hati-hati dan diperiksa kembali sebelum diambil
       keputusan penting. Kami sarankan untuk melakukan pengecekan ulang atau konsultasi lebih lanjut jika diperlukan </strong></mark>
    </p>
</div></center>
</p>
<?php
include ("inc_footer.php");
?>