
<section id="hero" class="container-fluid hero sec-calendar bg-dark">
    <div class="container">
        <div class="row">
            <!-- <div class="col">
                <a href="quran.php" class="btn btn-success text-center mb-5">Daftar Surat</a>
                
            </div>.col -->
        </div><!--.row-->
        <?php

            include 'header.blade.php';
            include 'cbab.php';
            $bab = new bab();
            $sub = isset($_GET['sub']) ? $_GET['sub'] : 0;
            $nama = isset($_GET['nama']) ? $_GET['nama'] : '';
            if($sub == 0)
            $bab->daftar();
            else
            $bab->ayat($sub, $nama);
        ?>                
    </div>
</section>