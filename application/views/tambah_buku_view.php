<!DOCTYPE html>
<html>
<head><title>Tambah Buku</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body class="container p-5">
    <h3>Tambah Buku</h3>
    <form action="<?= site_url('buku/simpan') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group"><label>Judul</label><input type="text" name="title" class="form-control" required></div>
        <div class="form-group"><label>Penulis</label><input type="text" name="author" class="form-control" required></div>
        <div class="form-group"><label>Sinopsis</label><textarea name="sinopsis" class="form-control"></textarea></div>
        <div class="form-group"><label>Cover</label><input type="file" name="cover" class="form-control"></div>
        <button class="btn btn-success">Simpan</button>
    </form>
</body>
</html>