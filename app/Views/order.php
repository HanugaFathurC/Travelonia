<!DOCTYPE html>
<html lang="en">
  <?php require_once '../app/Views/Components/head.php'; ?>
<body>
  <?php require_once '../app/Views/Components/navbar.php'; ?>

  <main class="container-fluid">
      <article class="container py-5">
          <section class="row g-4">
            <div class="order-2 order-md-1 col-md-8 bg-light border rounded-3 p-4">

                  <!-- Ini buat icon dan detail Pemesan-->
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 ">
                      <img src="<?php echo $GLOBALS['path']?>/assets/icons/icon-contacts.png" alt="icon" class="rounded-circle border border-grey p-1" width="35px">
                    </div>
                    <div class="flex-grow-1 pt-1 ms-3">
                      <h3 class="fs-6">Detail Pemesan</h3>
                    </div>
                  </div>

                  <!-- Mulai dari sini formnya -->
                  <form action="<?php echo $GLOBALS['path']?>/confirmation">

                    <div class="mb-3">
                      <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="namaLengkap" placeholder="Masukkan nama">
                    </div>

                    <div class="mb-3">
                      <label for="emailPengguna" class="form-label">Alamat Email</label>
                      <input type="email" class="form-control" id="emailPengguna" placeholder="Masukkan email">
                    </div>

                    <div class="mb-3">
                    <label for="notelp" class="form-label">Nomor Telepon</label>
                      <input type="tel" class="form-control" id="notelp" aria-label="nomor telepon" placeholder="Nomor Telepon">
                    </div>

                    <div class="mb-3">
                    <label for="order" class="form-label">Jumlah Pesanan</label>
                      <input type="number" class="form-control" id="order" aria-label="jumlah pemesanan" value="1">
                    </div>

                    <div class="mb-3">
                      <p class="form-label">Pilih Metode Pembayaran</p>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="BCA" name="payment-method" value="BCA">
                        <label class="form-check-label" for="BCA" >
                          BCA 12412252515
                        </label>
                      </div>
                      <div class="form-check pt-1">
                        <input class="form-check-input" type="radio" id="MANDIRI" name="payment-method" value="MANDIRI" >
                        <label class="form-check-label" for="MANDIRI">
                          MANDIRI 9244124124
                        </label>
                      </div>
                      <div class="form-check pt-1">
                        <input class="form-check-input" type="radio" id="BNI" name="payment-method" value="BNI" >
                        <label class="form-check-label" for="BNI">
                          BNI 1233124124
                        </label>
                      </div>
                      <div class="form-check pt-1">
                        <input class="form-check-input" type="radio" id="DANA" name="payment-method" value="DANA" >
                        <label class="form-check-label" for="DANA">
                          DANA 082314124124
                        </label>
                      </div>
                    </div>

                     <input type="submit" value="Konfirmasi Pembayaran" class="mt-4   btn btn-success" ></input>

                  </form>
            </div>
            <div class="order-1 order-md-2 col-md-3  offset-md-1 bg-light border rounded-3 p-4" >
              <h3 class="fs-6 pb-2">Detail Pemesanan</h3>
              <img src="<?php echo $GLOBALS['path']?>/assets/borobudur.jpg" alt="gambar detail pesanan" class="img-fluid rounded" >
              <p class="fs-5 fw-bold pt-3">Candi Borobudur, Yogyakarta </p>
              <hr>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img src="" alt="icon" width="30px">
                </div>
                <div class="flex-grow-1 pt-2 ms-3">
                  <p>Berlaku 7 hari sejak tanggal terpilih</p>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img src="" alt="icon" width="30px">
                </div>
                <div class="flex-grow-1 pt-2 ms-3">
                  <p>Tidak perlu reservasi</p>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img src="" alt="icon" width="30px">
                </div>
                <div class="flex-grow-1 pt-2 ms-3">
                  <p>Tidak bisa refund</p>
                </div>
              </div>
              <hr>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-auto">
                  <p class="fw-bold">Total</p>
                </div>
                <div class="flex-grow-3">
                  <p class="text-primary">IDR 80.000</p>
                </div>
              </div>
            </div>
          </section>


      </article>
  </main>


  <?php require_once '../app/Views/Components/footer.php'; ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>