<?php require_once 'header.php'; ?>
<div class="container-xxl">
    <div class="row">
        <div class="col-12 bg-white">
            <h2 class="text-center p-3">Kategori</h2>
            <?php 
                require_once '../include/koneksi.php';
                $sql = 'SELECT * FROM kategori';
                $query = mysqli_query($conn, $sql);
            ?>

            <a href="kategori-form.php" class="btn btn-primary mb-3">Tambah</a>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($result = mysqli_fetch_assoc($query)) {
                            echo '<tr>';
                            echo '<td>' .$result['id'].'</td>';
                            echo '<td>' .$result['kategori'].'</td>';
                            echo '<td> 
                                <a href="kategori-form.php?id='.$result['id'].'" class="btn btn-warning btn-sm">Edit</a>
                                <a href="kategori-delete.php?id='.$result['id'].'" class="btn btn-danger btn-sm" OnClick="return confirm(\'Apakah anda yakin ingin menghapus data ini?\');">Delete</a>
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
    $('.menu-kategori').addClass('active');
</script>