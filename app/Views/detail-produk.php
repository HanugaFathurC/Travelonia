<!DOCTYPE html>
<html lang="en">
  <?php require_once '../app/Views/Components/head.php'; ?>
<body>

  <?php require_once '../app/Views/Components/navbar.php'; ?>

  <main class="container-fluid" style="min-height: 70vh;">
  <form action="">
   <article class="row custome-section2">
        <section class="mx-auto p-3 my-auto col-12 col-lg-8">
                <div class="card mx-auto col-lg-10 d-flex">
                  <div class="card-body d-flex justify-content-evenly align-items-end ">
                      <div class="">
                        <h2 class="fs-5"><?php echo ucwords($_POST['provinsi']) ?></h2>
                      </div>
                      <div class="vr d-none d-md-block "></div>
                      <div class="">
                        <p class="fs-6 my-2"><?php echo date( "d-M-Y", strtotime($_POST['tanggal']) ) ?></p>
                      </div>
                      <div class="vr d-none d-md-block"></div>
                      <button class="btn btn-success ">Ubah</button>
                  </div>
                </div>

                <?php foreach ($data['data-produk'] as $produk){ ?>

                  <div class="card card-second ">
                    <div class="card-body ">
                        <div class="row row-cols-lg-4 row-cols-md-4 row-cols-sm-1 text-center">
                          <div class="col">
                            <p class="fs-5 fw-lighter"><span class=""><?php echo $produk['provinsi'] ?></span></p>
                            <div class="col">
                              <p class="fs-5"><span class="fst-italic"><?php echo $produk['nama_produk'] ?></span></p>
                            </div>
                          </div>
                          <div class="col ">
                            <p class="fs-5 my-4 costume-center-text"><span class=""><?php echo date("D", strtotime($produk['tanggal'])) . ", " . date("d-M-Y", strtotime($produk['tanggal'])) ?></span></p>
                          </div>
                          <div class="col">
                              <p class="fs-5 my-4"><span class="custome-text-harga"><?php echo "Rp ". number_format($produk['harga'], 2, ',','.' ) ?></span></p>
                            </div>
                          <div class="cols-lg-1">
                          <a href="" class="btn btn-success custome-button">Pilih</a>
                        </div>
                      </div>
                  </div>
                </div>
          
                <?php } ;?>


    

    
          <!-- <div class="card card-third">
            <div class="card-body">
              <div class="row row-cols-lg-4 row-cols-md-4 row-cols-sm-1 text-center">
                <div class="col">
                  <p class="fs-5 fw-lighter"><span class="">Yogyakarta</span></p>
                  <div class="col">
                    <p class="fs-5"><span class="fst-italic">Candi Borobudur</span></p>
                  </div>
                </div>
                <div class="col ">
                  <p class="fs-5 costume-center-text my-4"><span class="">Saturday, 1 Jan 2022</span></p>
                </div>
                <div class="col">
                    <p class="fs-5 my-4"><span class="custome-text-harga">Rp.50.000</span></p>
                  </div>
                <div class="cols-lg-1">
                <button class="btn btn-success custome-button">Pilih</button>
                </div>
              </div>
            </div>
          </div> -->

    </form>
        </section>
   </article>
  </main>
  <?php require_once '../app/Views/Components/footer.php'; ?>
    
</body>
</html>