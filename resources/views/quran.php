
<section id="hero" class="container-fluid hero sec-calendar bg-dark">
    <div class="container">
        <div class="row">
            <!-- <div class="col">
                <a href="quran.php" class="btn btn-success text-center mb-5">Daftar Surat</a>
                
            </div>.col -->
        </div><!--.row-->
        <?php

            include 'header.blade.php';
            include 'cquran.php';
            $quran = new quran();
            $surat = isset($_GET['surat']) ? $_GET['surat'] : 0;
            $nama = isset($_GET['nama']) ? $_GET['nama'] : '';
            if($surat == 0)
            $quran->daftar();
            else
            $quran->ayat($surat, $nama);
        ?>                
    </div>
</section>