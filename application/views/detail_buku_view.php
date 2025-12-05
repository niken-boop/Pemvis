<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($book->title) ? $book->title : 'Detail Buku'; ?> - Bookepink</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
    /* Style Tambahan untuk Detail Buku */
    .btn-pink {
      background: #ff69b4; 
      border: none;
      color: white;
      border-radius: 25px;
      padding: 10px 25px;
      font-weight: 500;
      transition: background 0.3s ease;
    }

    .btn-pink:hover {
      background: #ff85c1;
    }

    .cover-container {
      /* Memastikan container cover mengambil tinggi penuh modal */
      height: 100%; 
      overflow: hidden;
      border-radius: 15px; 
    }

    .cover-img-detail {
      width: 100%;
      height: 100%;
      object-fit: cover; /* Agar gambar mengisi container tanpa terdistorsi */
      border-radius: 15px; 
    }

    /* Style untuk sinopsis */
    .sinopsis-text {
      font-size: 0.95rem;
      color: #555;
      line-height: 1.6;
      margin-top: 20px;
      max-height: 350px; /* Batasi tinggi sinopsis agar tombol tetap terlihat */
      overflow-y: auto;
    }

    .author-text {
      color: #777;
      font-size: 1.1rem;
      font-weight: 400;
      margin-top: -5px;
    }
    </style>
</head>
<body>

<div class="modal fade show" id="bookModal" tabindex="-1" style="display: block;">
  <div class="modal-dialog modal-xl"> <!-- popup untuk page detail buku-->
    <div class="modal-content p-4" style="border-radius:20px; background-color: #ffcae8ff;"> 

      <div class="modal-header border-0"> <!--header tanpa border -->
         <h5 class="modal-title">Detail Buku</h5>
         <a href="<?php echo site_url('dashboard'); ?>" class="btn-close"></a>
      </div>

      <div class="modal-body">
      
        <?php if (isset($book)): ?> <!--cek apakah data buku ada-->

        <div class="row">
        
      <div class="col-md-5">
        <div class="cover-container">
          <img src="<?php echo base_url('asset/'.$book->cover); ?>" class="cover-img-detail shadow-lg">
        </div>
      </div>

            <div class="col-md-7">
                
                <h2 class="fw-bold"><?php echo $book->title; ?></h2>
                <p class="author-text mb-4">Author: <?php echo $book->author; ?></p>
                <p class="sinopsis-text"><?php echo $book->sinopsis; ?></p>
                <hr class="mt-4">

                <div class="d-flex flex-wrap gap-3 mt-4">
                    
                        <button class="btn-pink px-4 py-2"
                                onclick="alert('Fitur belum tersedia 😞');">
                            🤍 Add to Favorite
                        </button>

                      <button class="btn btn-outline-secondary px-4 py-2"
                              style="color: #ff69b4; border-color: #ff69b4;"
                              onclick="alert('Buku tidak tersedia ☹️');">
                          📖 Baca E-book
                      </button>

                </div>
            </div>
            
        </div>

        <?php else: ?>
            <p>Data buku tidak ditemukan.</p>
        <?php endif; ?>

      </div>
      
      <div class="modal-footer border-0">
        <a href="<?php echo site_url('dashboard'); ?>" class="btn btn-secondary">Tutup</a>
      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var myModal = new bootstrap.Modal(document.getElementById('bookModal'), {});
        myModal.show();
    });
</script>

</body>
</html>