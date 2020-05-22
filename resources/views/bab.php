
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <!-- General JS Scripts -->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
  

<script type="text/javascript"> 

    $(document).ready(function () {
        $('#table-datatables').DataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });
    });
</script>

  
</body>
</html>