<?php require_once 'header.php'; ?>
<div class="container-xxl">
    <div class="row">
        <div class="col-12 bg-white">
            <h2 class="text-center p-3">Garage</h2>
            <?php 
                require_once '../include/koneksi.php';
                $sql = 'SELECT a.*, b.kategori FROM garage a JOIN kategori b ON a.id_kategori=b.id';
                $query = mysqli_query($conn, $sql);
            ?>

            <a href="garage-form.php" class="btn btn-primary mb-3">Tambah</a>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>Nama Motor</th>
                        <th>Keterangan</th>
                        <th>Gambar</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($result = mysqli_fetch_assoc($query)) {
                            echo '<tr>';
                            echo '<td>' .$result['id'].'</td>';
                            echo '<td>' .$result['kategori'].'</td>';
                            echo '<td>' .$result['nama'].'</td>';
                            echo '<td>' .$result['keterangan'].'</td>';
                            echo '<td><img src="'.$result['gambar'].'" width="100px"></td>';
                            echo '<td> 
                                <a href="garage-form.php?id='.$result['id'].'" class="btn btn-warning btn-sm">Edit</a>
                                <a href="garage-delete.php?id='.$result['id'].'" class="btn btn-danger btn-sm" OnClick="return confirm(\'Apakah anda yakin ingin menghapus data ini?\');">Delete</a>
                            </td>';
                            echo '<tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>
       
<script type="text/javascript">
    $('.nav-link').removeClass('active');
    $('.menu-garage').addClass('active');
</script>