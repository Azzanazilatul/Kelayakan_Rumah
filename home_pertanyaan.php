<?php
include("inc_header.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></br>
<div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Apa Tujuan Dari Program Kelayakan Rumah Layak Huni?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
        <strong>Tujuan dari Program Kelayakan Rumah adalah</strong> untuk mengetahui berapa layak suatu rumah  agar dapat meningkatkan kualitas hidup masyaraka, 
         Khusunya bagi masyarakat kurang mampu dan mendukung kesejahteraan masyarakat untuk pembangunan berkelanjutan melalui penyediaan perumahan yang sesuai dengan standar dan kenyamanan
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Apa itu Fuzzy Logic dan mengapa digunakan dalam program ini?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
      <div class="accordion-body">
        <strong>Fuzzy Logic merupakan</strong> Sebuah metode komputasi yang meniru cara manusia dalam mengambil keputusan berdasarkan data yang tidak pasti atau ambigu. dengan program ini 
        dapat mengolah data yang tidak pasti atau tidak lengkap, serta memberikan hasil yang lebih realitis berdasarkan berbagai tingkatan atau derajat kelayakan.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        Bagaimana jika nilai input kondisi atap,lantai tau dinding beraada diluar rentang yang ditentukan?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
        <strong>akan terjadi penolakan input atau eror</strong> sistem akan menolak input yang tidak valid dan meminta pengguna untuk 
        memasukan kembali nilai yang benar. hal ini digunakan untuk menjaga integritas data yang dimasukan
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        Dapatkah Program ini digunakan untuk jemis bangunan selain rumah?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
        <strong>Program kelayakan Rumah ini</strong> hanya di rancang untuk mengevaluasi rumah, Namun dengan sedikit modifikasi pada variabel dan aturan fuzzy,
        program ini dapat digunakan untuk menilai kelayakan bagunan lainnya seperti kantor, sekolah atau gedung komersial
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
 integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
 crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
 integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" 
 crossorigin="anonymous">
</script>
</br>
<div class="Judul">
    <center><h2><b>Silahkan mengisi data dibawah ini jika ingin menambahkan anggota pada program ini</b></h2></center>
</div>

<form method="POST" action="">
  <div class="masukan">
    <div class="mb-3">
      <label for="namaInput" class="form-label">Nama</label>
      <input type="text" class="form-control" id="namaInput" name="nama" placeholder="long Name" required>
    </div>

    <div class="mb-3">
      <label for="emailInput" class="form-label">Email address</label>
      <input type="email" class="form-control" id="emailInput" name="email" placeholder="name@example.com" required>
    </div>

    <div class="mb-3">
      <label for="usernameInput" class="form-label">Username</label>
      <input type="text" class="form-control" id="usernameInput" name="username" placeholder="username" required>
    </div>

    <div class="mb-3">
      <label for="inputPassword" class="form-label">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" aria-describedby="passwordHelpBlock" required>
      <div id="passwordHelpBlock" class="form-text">
        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
      </div>
    </div>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="alasan" rows="3" placeholder="max 255 characters" maxlength="250" required></textarea>
      <small id="keteranganHelpBlock" class="form-text text-muted">Max 250 characters.</small>
    </div>

    <button type="submit" name="masukan" class="btn btn-secondary">Kirim</button>
  </div>
</form>

<?php
$server = "localhost";
$username_db = "root"; 
$password_db = "";      
$nama_db = "db_admin"; 


$inc_koneksi = new mysqli($server, $username_db, $password_db, $nama_db);


if ($inc_koneksi->connect_error) {
    die("Koneksi gagal: " . $inc_koneksi->connect_error);
}

if (isset($_POST['masukan'])) {
    $nama = mysqli_real_escape_string($inc_koneksi, $_POST['nama']);
    $email = mysqli_real_escape_string($inc_koneksi, $_POST['email']);
    $username = mysqli_real_escape_string($inc_koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($inc_koneksi, $_POST['password']);
    $alasan = mysqli_real_escape_string($inc_koneksi, $_POST['alasan']);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = $inc_koneksi->prepare("INSERT INTO masukan (nama, email, username, password, alasan) VALUES (?, ?, ?, ?, ?)");
    if ($query) {
        $query->bind_param("sssss", $nama, $email, $username, $hashed_password, $alasan);


        if ($query->execute()) {
            echo "<script>alert('Data Ajukan Akun Login Berhasil Disimpan');</script>";
        } else {
            echo "<script>alert('Gagal menyimpan data');</script>";
        }

        $query->close();
    } else {
        echo "<script>alert('Kesalahan pada persiapan query');</script>";
    }
    
}

$inc_koneksi->close();
?></br>
<div class="keterangan">
    <p><mark><b>Informasi Selanjutnya akan dikirimkan melalui alamat Email yang sudah diinput<b></mark></p>
</div>
