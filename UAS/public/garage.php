<?php require_once 'header.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage</title>
</head>
<body>

<div class="row">
    <div class="col-12 p-5">
        <?php 
        require_once '../include/koneksi.php';
        $sql_kat = "SELECT kategori FROM kategori WHERE id='".$_GET['kat']."'";
        $query_kat = mysqli_query($conn, $sql_kat);
        $result_kat = mysqli_fetch_assoc($query_kat);
        ?>
        <h1 class="display-4 mb-3">Garage - <?= $result_kat['kategori'] ?></h1>
        <div class="row">
            <?php 
                $sql = "SELECT a.*, b.kategori FROM garage a JOIN kategori b ON a.id_kategori=b.id WHERE a.id_kategori='".$_GET['kat']."'";
                $query = mysqli_query($conn, $sql);
                while($result = mysqli_fetch_assoc($query)){
            ?>
                <div class="col-md-4">
                    <div class="card m-5">
                        <div class="card-body text-center">
                            <img src="<?= $result['gambar']; ?>" class="img-fluid">
                            <h5 class="mt-2 text-center"><?= $result['nama']; ?></h5>
                            <button class="btn btn-primary btn-sm detail" data-nama="<?= $result['nama'] ?>" data-keterangan="<?= $result['keterangan']?>" data-img="<?= $result['gambar']?>" data-kategori="<?= $result['kategori']?>">Detail</button>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalDetailLabel">Detail Motor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="modal-img" class="img-fluid">
        <h3 class="text-center mt-2" id="modal-nama"></h3>
        <div class="text-center mt-2">Kategori : <span id="modal-kategori"></span></div>
        <div class="text-center mt-2" id="modal-keterangan"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    
</body>
</html>
<?php require_once 'footer.php'?>

<script type="text/javascript">
    $('.nav-link').removeClass('active');
    $('.menu-garage').addClass('active');

    $(document).ready(function(){
        $('.detail').click(function(){
            $('#modal-img').attr('src', $(this).data('img'));
            $('#modal-nama').html($(this).data('nama'));
            $('#modal-kategori').html($(this).data('kategori'));
            $('#modal-keterangan').html('"<em>'+$(this).data('keterangan')+'</em>"');
            $('#modalDetail').modal('show');
        });
    });
</script>
