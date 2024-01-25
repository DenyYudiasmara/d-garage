<?php 
    require_once 'header.php'; 
    require_once '../include/koneksi.php';
?>

<?php 
    if(isset($_GET['id'])){
        $sql = "SELECT * FROM garage WHERE id='".$_GET['id']."'";
        $query = mysqli_query($conn, $sql);
        $garage = mysqli_fetch_assoc($query);
    }
?>   

<div class="bg-white p-3">
        <h3>Form Motor</h3>
        <form method="post" enctype="multipart/form-data">
            <?php
                if(isset($_GET['id'])) {
                    echo '<input type="hidden" name="id" value="'.$_GET['id'].'">';
                }
            ?>

            <div class="mb-3">
                <select class="form-select" name="id_kategori" required>
                    <option value="">-- Pilih Kategori</option>
                    <?php 
                        $sql_kat = 'SELECT * FROM kategori';
                        $query_kat = mysqli_query($conn, $sql_kat);
                        while($result_kat = mysqli_fetch_assoc($query_kat)) {
                            ?>
                                <option value="<?=$result_kat['id'] ?>" <?= isset($_GET['id']) ? ($result_kat['id'] == $garage['id_kategori'] ? 'selected' : '') : '' ?>><?= $result_kat['kategori']?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <input type="text" name="nama" placeholder="Nama Motor" class="form-control" value="<?= isset($_GET['id']) ? $garage['nama'] : ''; ?>" required>
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="keterangan" rows="3" placeholder="Keterangan Motor" required><?= isset($_GET['id']) ? $garage['keterangan'] : ''; ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Gambar Motor</label>
                <?= isset($_GET['id']) ? '<div class="mb-3"><img src="'.$garage['gambar'].'" width="100px"></div>' : ''; ?>
                <input type="file" name="gambar" class="form-control" required>
            </div>
            <a href="garage.php" class="btn btn-success">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <?php 
        if(sizeof($_POST) > 0) {
            print_r($_FILES);
            $tmp_dir = $_FILES['gambar']['tmp_name'];
            $target_dir = '../img/'.$_FILES['gambar']['name'];
            move_uploaded_file($tmp_dir, $target_dir); 
            if(isset($_POST['id'])) {
                $sql = "UPDATE garage SET nama='".$_POST['nama']."', keterangan='".$_POST['keterangan']."', gambar='".$target_dir."' WHERE id='".$_POST['id']."'";
            }  else {
                $sql = "INSERT INTO garage VALUES ('', '".$_POST['nama']."', '".$_POST['keterangan']."', '".$target_dir."', '".$_POST['id_kategori']."')";
            }
            
            if($query = mysqli_query($conn, $sql)) {
                 header('Location: garage.php');
            } else {
                 echo '<script>alert("Proses gagal!");</script>';
            }
        }
    ?>

<?php require_once 'footer.php'; ?>

<script type="text/javascript">
    $('.nav-link').removeClass('active');
    $('.menu-garage').addClass('active');
</script>