<?php 
include ("inc_header.php");
?> 
<h1>Deskripsi Tentang Program Fuzzy dalam Kelayakan Rumah</h1>
<section class="container">
    <div class="slider-wrapper">
        <div class="slider">
           <img id="slide-1" src="https://www.nawasis.org/portal/gallery/cat/763-41-jpg.jpg" alt="gambar1" >
           <img id="slide-2" src="https://www.nawasis.org/portal/gallery/cat/335-42-jpg.jpg" alt="gambar2" >
           <img id="slide-3" src="https://www.nawasis.org/portal/gallery/cat/385-43-jpg.jpg" alt="gambar3" >
        </div>
        <div class="slider-nav">
            <a href="#slide-1"></a>
            <a href="#slide-2"></a>
            <a href="#slide-3"></a>
        </div>
    </div>
</section>
<p> Program fuzzy kelayakan rumah dirancang untuk mengevaluasi apakah suatu rumah layak huni 
    atau tidak berdasarkan berbagai kriteria yang relevan. Dengan meningkatnya jumlah rumah 
    tidak layak huni (RTLH) di banyak daerah, program ini menggunakan pendekatan fuzzy logic 
    untuk menangani ketidakpastian dalam penilaian, sehingga memungkinkan evaluasi yang lebih 
    akurat dan objektif.
</p>
<p> Program ini menerima input data tentang kondisi rumah, seperti keadaan fisik bangunan, ketersediaan
    fasilitas dasar, dan lingkungan sekitar. Setiap kriteria dinyatakan dalam fuzzy set dengan fungsi keanggotaan,
    yang menggambarkan derajat kelayakan. Aturan fuzzy kemudian digunakan untuk menghubungkan kriteria tersebut dengan
    hasil evaluasi, diikuti oleh proses inferensi fuzzy untuk menghasilkan status kelayakan rumah, seperti "layak huni" 
    atau "tidak layak huni".<br/><br/>
    Keuntungan utama dari program ini adalah objektivitas dan efisiensi dalam penilaian kondisi rumah, yang dapat membantu
    pemerintah dan lembaga terkait dalam mengidentifikasi rumah yang memerlukan perbaikan. Dengan demikian, program ini berkontribusi
    pada perencanaan yang lebih baik dalam upaya peningkatan kualitas perumahan dan kesejahteraan masyarakat.
</p>
<?php
include ("inc_footer.php");
?>