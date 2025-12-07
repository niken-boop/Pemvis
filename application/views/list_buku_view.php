<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body class="p-5">
    <h2>Daftar Buku</h2>
    <a href="<?= site_url('buku/tambah') ?>" class="btn btn-primary mb-3">+ Tambah Buku</a>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Cover</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($books as $row): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><img src="<?= base_url('asset/'.$row->cover) ?>" width="50"></td>
                <td><?= $row->title ?></td>
                <td><?= $row->author ?></td>
                <td>
                    <a href="<?= site_url('buku/edit/'.$row->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?= site_url('buku/hapus/'.$row->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>