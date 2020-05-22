
<section id="hero" class="container-fluid hero sec-calendar bg-dark">
    <div class="container">
        <div class="row">
            <!-- <div class="col">
                <a href="babsurat.php" class="btn btn-success text-center mb-5">Daftar Surat</a>
                
            </div>.col -->
        </div><!--.row-->
        <?php

            include 'cbabsurat.php';
            include 'style.php';
            $babsurat = new babsurat();
            $surat = isset($_GET['surat']) ? $_GET['surat'] : 0;
            $nama = isset($_GET['nama']) ? $_GET['nama'] : '';
            if($surat == 0)
            $babsurat->daftar();
            else
            $babsurat->ayat($surat, $nama);
        ?>                
    </div>
</section>