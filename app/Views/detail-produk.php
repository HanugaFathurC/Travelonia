<!DOCTYPE html>
<html lang="en">
  <?php require_once '../app/Views/Components/head.php'; ?>
<body>

  <?php require_once '../app/Views/Components/navbar.php'; ?>

  <main class="container-fluid" style="min-height: 57vh;" >

    <article class="row custome-section2" style="min-height: 40vh;">
          <section class="mx-auto p-3 my-auto col-12 col-lg-8">
                  <div class="card mx-auto col-lg-12 d-flex">
                    <div class="card-body d-flex justify-content-evenly align-items-end ">
                      
                          <div class="">
                            <h2 class="fs-5"><?php echo ucwords($_GET['provinsi']) ?></h2>
                          </div>
                          <div class="vr d-none d-md-block "></div>
                          <div class="">
                            <p class="fs-6 my-2"><?php echo date( "d-M-Y", strtotime($_GET['tanggal']) ) ?></p>
                          </div>
                          <div class="vr d-none d-md-block"></div>
                          <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#changeDestination">Change</button>

                          <!--STARTING MODAL EDIT -->
                          <form method="GET" action="<?php echo $GLOBALS['path']?>/detail" >
                            <div class="modal fade" id="changeDestination" tabindex="-1" aria-labelledby="changeDestination" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="mb-3">
                                      <label for="provinsi" class="form-label">Input Destination</label>
                                      <input class="form-control" name="provinsi" type="text" id="provinsi" required>
                                      <label for="tanggal" class="form-label">Input Date</label>
                                      <input class="form-control" name="tanggal" type="date" id="tanggal" required>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" value="Go"></input>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </form>

                          
                    

                    </div>
                  </div>
                  

                  <!-- <?php foreach ($data['data-produk'] as $produk){ ?>

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
                            <a href="<?php echo $GLOBALS['path']?>/order?id=<?php echo $produk['id_produk'] ?>" class="btn btn-success custome-button">Pilih</a>
                          </div>
                        </div>
                    </div>
                  </div>
            
                  <?php } ;?> -->


          </section>

    </article>
    <article class="container pb-3">

      <?php if($data['data-produk']) {   ?>
        <section  style="margin-top: -8vh;">
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
                          <a href="<?php echo $GLOBALS['path']?>/order?id=<?php echo $produk['id_produk'] ?>" class="btn btn-success custome-button">Pilih</a>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php } ;?>

      </section>

      <?php } else { ?> 
      
          <h1 class="text-center">Data Tidak Tersedia</h1>

      <?php } ?>

    </article>
  </main>
  <?php require_once '../app/Views/Components/footer.php'; ?>
    
  <?php require_once '../app/Views/Components/cdn-bootsrap.php' ; ?>

</body>
</html>