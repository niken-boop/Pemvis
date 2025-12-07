<!DOCTYPE html>
<html>
<head><title>Edit Buku</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body class="container p-5">
    <h3>Edit Buku</h3>
    <form action="<?= site_url('buku/update/'.$book->id) ?>" method="post" enctype="multipart/form-data">
        <div class="form-group"><label>Judul</label><input type="text" name="title" value="<?= $book->title ?>" class="form-control" required></div>
        <div class="form-group"><label>Penulis</label><input type="text" name="author" value="<?= $book->author ?>" class="form-control" required></div>
        <div class="form-group"><label>Sinopsis</label><textarea name="sinopsis" class="form-control"><?= $book->sinopsis ?></textarea></div>
        <div class="form-group">
            <label>Cover</label><br>
            <img src="<?= base_url('asset/'.$book->cover) ?>" width="100"><br>
            <input type="file" name="cover" class="form-control">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</body>
</html>