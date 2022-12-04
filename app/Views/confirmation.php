<!DOCTYPE html>
<html lang="en">

  <?php require_once '../app/Views/Components/head.php'; ?>

<body>

  <?php require_once '../app/Views/Components/navbar.php'; ?>

  <main class="container-fluid p-5">
      <article class="container">
        <section class="row g-4">
          <div class="col-md-3 mx-auto bg-success border rounded-3 p-4">
            <h3 class="text-white text-center">
              Payment <br />
              Detail
            </h3>
            <hr class="new1" />
            <div class="d-flex align-items-center">
              <div class="flex-shrink-1"><img src="<?php echo $GLOBALS['path']?>/assets/icons/icon-wallet.png" alt="Total pembayaran" width="30px" /></div>
              <div class="flex-grow-1 pt-2 ms-3 mt-2">
                <p class="text-white">Total</p>
              </div>
            </div>
            <div class="costume-margin">
              <p>IDR 50.000</p>
            </div>

            <hr class="costume-hr" />

            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img src="<?php echo $GLOBALS['path']?>/assets/icons/icon-calender.png" alt="icon" width="30px" />
              </div>
              <div class="flex-grow-1 pt-2 ms-3 mt-2">
                <p class="text-white">Date</p>
              </div>
            </div>
            <div class="costume-margin">
              <p>January 1, 2023</p>
            </div>
            <hr class="costume-hr" />

            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img src="<?php echo $GLOBALS['path']?>/assets/icons/icon-merchant.png" alt="icon" width="30px" />
              </div>
              <div class="flex-grow-1 pt-2 ms-3 mt-2">
                <p class="text-white">Payment</p>
              </div>
            </div>
            <div class="costume-margin">
              <p>Bank</p>
            </div>
          </div>

          <div class="col-md-8 bg-white text-center border rounded-3 p-4 ">
            <!-- Ini buat icon dan detail Pemesan-->
      
            <form>
                <h3 class="mt-4 mb-3"><b>Confirm Your Payment</b></h3>
                <div class="col-md-12 bg-light text-dark border rounded-3 p-4 mb-3">
                  <h4>Harap transfer sesuai jumlah pembayaran, hingga digit terakhir.</h4>
                  <p>Jika jumlah yang ditransfer tidak sesuai, proses verifikasi pembayaran bisa terhambat</p>
                </div>
                <input class="form-control form-control-sm p-2 mb-4 bg-primary text-white" type="file" id="formFile">
                  <button class="mx-auto  btn btn-success" type="button"><a class="text-decoration-none text-reset" href="<?php echo $GLOBALS['path']?>/success">Payment Confirmation</a></button>
            </form>

          </div>

        </section>
      </article>
    </main>

  <?php require_once '../app/Views/Components/footer.php'; ?>
  
</body>
</html>