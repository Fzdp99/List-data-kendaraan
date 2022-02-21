<?php
  include "proses.php";
  $proses = new Proses;
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tooplate">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>List data kendaraan</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="style.css">

  </head>
<!--
Tooplate 2113 Earth
https://www.tooplate.com/view/2113-earth
-->
  <body>

    <div class="sequence">
  
      <div class="seq-preloader">
        <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
      </div>
      
    </div>
    
        <div class="logo">
            <h1>Stay strong</h1>
            <h2>SS</h2>
        </div>
        <nav>
          <ul>
            <li><a href="#1"><img src="gambar/1.png" alt=""> <em>Sepeda</em></a></li>
            <li><a href="#2"><img src="gambar/2.png" alt=""> <em>Motor</em></a></li>
            <li><a href="#3"><img src="gambar/3.png" alt=""> <em>Mobil clasic</em></a></li>
            <li><a href="#4"><img src="gambar/4.png" alt=""> <em>Mobil sport</em></a></li>
          </ul>
        </nav>
        
        <div class="slides">

          <!-- =======================================sepeda=================================================  -->
          <div class="slide" id="1">
            <div id="slider-wrapper">
                <div id="image-slider">
                  <ul>
                    <!-- Tampilan  -->
                    <li class="active-img">
                      <div class="isi">
                        <div class="judul">
                          <p>TAMPILAN</p>
                        </div>
                        <table class="table table-sm">
                          <thead class="table-dark">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Merek</th>
                              <th scope="col">Type</th>
                              <th scope="col">Tahun pembuatan</th>
                              <th scope="col">Harga</th>
                            </tr>
                          </thead>
                          <tbody class="table-success">
                            <?php
                              $ambilsepeda = $proses->bacadata('tb_sepeda');
                              $no = 1;
                              foreach($ambilsepeda as $isi){
                            ?>
                            <tr>
                              <th><?php echo $no++; ?></th>
                              <td><?php echo $isi['merek']; ?></td>
                              <td><?php echo $isi['tipe']; ?></td>
                              <td><?php echo $isi['tp']; ?></td>
                              <td><?php echo $isi['harga']; ?></td>
                            </tr>
                            <?php
                              }
                            ?>
                          </tbody>
                        </table>

                      </div>
                    </li>

                    <!-- input -->
                    <li>
                      <div class="isi">

                        <form method="post" action="sepeda/simpan.php">
                          
                          <div class="judul">
                            <p>INPUT</p>
                          </div>
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Input</span>
                            <input name="mereks" type="text" class="form-control" placeholder="Merek" aria-label="Merek" aria-describedby="basic-addon1">
                          </div>
  
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Input</span>
                            <input name="types" type="text" class="form-control" placeholder="Type" aria-label="Type" aria-describedby="basic-addon1">
                          </div>
  
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Input</span>
                            <input name="tps" type="text" class="form-control" placeholder="Tahun pembuatan" aria-label="Tahun pembuatan" aria-describedby="basic-addon1">
                          </div>
  
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Input</span>
                            <input name="hargas" type="text" class="form-control" placeholder="Harga" aria-label="Harga" aria-describedby="basic-addon1">
                          </div>
                        
                          <button name="bts" type="submit" class="btn btn-warning">Submit</button>
                        
                        </form>
                        
                      </div>
                    </li>

                    <!-- hapus -->
                    <li>
                      
                      <div class="isi">
                        <div class="judul">
                          <p>HAPUS</p>
                        </div>
                        <table class="table table-sm">
                          <thead class="table-dark">
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Merek</th>
                              <th scope="col">Type</th>
                              <th scope="col">Hapus</th>
                            </tr>
                          </thead>
                          <tbody class="table-success">
                            <?php
                              $hapussepeda = $proses->bacadata('tb_sepeda');
                              foreach($hapussepeda as $isi){
                            ?>
                              <tr>
                                <td><?php echo $isi['id']; ?></td>
                                <td><?php echo $isi['merek']; ?></td>
                                <td><?php echo $isi['tipe']; ?></td>
                                <td><a href="sepeda/hapus.php?id=<?php echo $isi['id']; ?>">Hapus</a></td>
                              </tr>
                            <?php
                              }
                            ?>
                        </table>

                      </div>
                    </li>                      
                  </ul>
                </div>
                <div id="thumbnail">
                  <ul>
                    <li class="active"><img src="assets/images/thumb-01.jpg" alt="Tampilan data" title="Tampilan data" /></li>
                    <li><img src="assets/images/thumb-02.jpg" alt="Input data" title="Input data" /></li>
                    <li><img src="assets/images/thumb-03.jpg" alt="Hapus data" title="Hapus data" /></li>         
                  </ul>
                </div>
              </div>
          </div>

          <!-- ====================================motor================================================= -->

        <div class="slide" id="2">
          <div id="slider-wrapper">
            <div id="image-slider">
              <ul>
                <!-- Tampilan  -->
                <li class="active-img">
                  <div class="isi">
                    <div class="judul">
                      <p>TAMPILAN</p>
                    </div>
                    <table class="table table-sm">
                      <thead class="table-dark">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Merek</th>
                          <th scope="col">Type</th>
                          <th scope="col">Tahun pembuatan</th>
                          <th scope="col">Harga</th>
                        </tr>
                      </thead>
                      <tbody class="table-success">
                      <?php
                        $ambilmotor = $proses->bacadata('tb_motor');
                        $no = 1;
                        foreach($ambilmotor as $isi){
                      ?>
                          <tr>
                            <th><?php echo $no++; ?></th>
                            <td><?php echo $isi['merek']; ?></td>
                            <td><?php echo $isi['tipe']; ?></td>
                            <td><?php echo $isi['tp']; ?></td>
                            <td><?php echo $isi['harga']; ?></td>
                          </tr>
                      <?php
                        }
                      ?>
                      </tbody>
                    </table>

                  </div>
                </li>

                <!-- input  -->
                <li>
                  <div class="isi">

                    <form method="post" action="motor/simpan.php">
                      <div class="judul">
                        <p>INPUT</p>
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Input</span>
                        <input name="merekm" type="text" class="form-control" placeholder="Merek" aria-label="Merek" aria-describedby="basic-addon1">
                      </div>

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Input</span>
                        <input name="typem" type="text" class="form-control" placeholder="Type" aria-label="Type" aria-describedby="basic-addon1">
                      </div>

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Input</span>
                        <input name="tpm" type="text" class="form-control" placeholder="Tahun pembuatan" aria-label="Tahun pembuatan" aria-describedby="basic-addon1">
                      </div>

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Input</span>
                        <input name="hargam" type="text" class="form-control" placeholder="Harga" aria-label="Harga" aria-describedby="basic-addon1">
                      </div>
                    
                      <button type="submit" class="btn btn-warning">Submit</button>
                    
                    </form>
                    
                  </div>
                </li>

                <!-- Hapus  -->
                <li>
                  <div class="isi">
                    <div class="judul">
                      <p>HAPUS</p>
                    </div>
                    <table class="table table-sm">
                      <thead class="table-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Merek</th>
                          <th scope="col">Type</th>
                          <th scope="col">Hapus</th>
                        </tr>
                      </thead>
                      <tbody class="table-success">
                        <?php
                          $hapusmotor = $proses->bacadata('tb_motor');
                          foreach($hapusmotor as $isi){
                        ?>
                          <tr>
                            <td><?php echo $isi['id']; ?></td>
                            <td><?php echo $isi['merek']; ?></td>
                            <td><?php echo $isi['tipe']; ?></td>
                            <td><a href="motor/hapus.php?id=<?php echo $isi['id']; ?>">Hapus</a></td>
                          </tr>
                        <?php
                          }
                        ?>
                      </table>

                  </dv>
                </li>                      
              </ul>
            </div>
            <div id="thumbnail">
              <ul>
                <li class="active"><img src="assets/images/thumb-01.jpg" alt="Tampilan data" title="Tampilan data" /></li>
                <li><img src="assets/images/thumb-02.jpg" alt="Input data" title="Input data" /></li>
                <li><img src="assets/images/thumb-03.jpg" alt="Hapus data" title="Hapus data" /></li>         
              </ul>
            </div>
          </div>
        </div>

        <!-- ======================================mobil clasic================================================== -->

        <div class="slide" id="3">
          <div id="slider-wrapper">
            <div id="image-slider">
              <ul>
                <!-- Tampilan  -->
                <li class="active-img">
                  <div class="isi">
                    <div class="judul">
                      <p>TAMPILAN</p>
                    </div>
                    <table class="table table-sm">
                      <thead class="table-dark">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Merek</th>
                          <th scope="col">Type</th>
                          <th scope="col">Tahun pembuatan</th>
                          <th scope="col">Harga</th>
                        </tr>
                      </thead>
                      <tbody class="table-success">
                      <?php
                        $ambilmc = $proses->bacadata('tb_mc');
                        $no = 1;
                        foreach($ambilmc as $isi){
                      ?>
                          <tr>
                            <th><?php echo $no++; ?></th>
                            <td><?php echo $isi['merek']; ?></td>
                            <td><?php echo $isi['tipe']; ?></td>
                            <td><?php echo $isi['tp']; ?></td>
                            <td><?php echo $isi['harga']; ?></td>
                          </tr>
                      <?php
                        }
                      ?>
                      </tbody>
                    </table>

                  </div>
                </li>

                <!-- input  -->
                <li>
                  <div class="isi">

                    <form method="post" action="mc/simpan.php">
                      <div class="judul">
                        <p>INPUT</p>
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Input</span>
                        <input name="merekc" type="text" class="form-control" placeholder="Merek" aria-label="Merek" aria-describedby="basic-addon1">
                      </div>

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Input</span>
                        <input name="typec" type="text" class="form-control" placeholder="Type" aria-label="Type" aria-describedby="basic-addon1">
                      </div>

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Input</span>
                        <input name="tpc" type="text" class="form-control" placeholder="Tahun pembuatan" aria-label="Tahun pembuatan" aria-describedby="basic-addon1">
                      </div>

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Input</span>
                        <input name="hargac" type="text" class="form-control" placeholder="Harga" aria-label="Harga" aria-describedby="basic-addon1">
                      </div>
                    
                      <button type="submit" class="btn btn-warning">Submit</button>
                    
                    </form>
                    
                  </div>
                </li>

                <!-- Hapus  -->
                <li>
                  <div class="isi">
                    <div class="judul">
                      <p>HAPUS</p>
                    </div>
                    <table class="table table-sm">
                      <thead class="table-dark">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Merek</th>
                          <th scope="col">Type</th>
                          <th scope="col">Hapus</th>
                        </tr>
                      </thead>
                      <tbody class="table-success">
                        <?php
                          $hapusmc = $proses->bacadata('tb_mc');
                          foreach($hapusmc as $isi){
                        ?>
                          <tr>
                            <td><?php echo $isi['id']; ?></td>
                            <td><?php echo $isi['merek']; ?></td>
                            <td><?php echo $isi['tipe']; ?></td>
                            <td><a href="mc/hapus.php?id=<?php echo $isi['id']; ?>">Hapus</a></td>
                          </tr>
                        <?php
                          }
                        ?>
                      </tbody>
                    </table>

                  </dv>
                </li>                      
              </ul>
            </div>
            <div id="thumbnail">
              <ul>
                <li class="active"><img src="assets/images/thumb-01.jpg" alt="Tampilan data" title="Tampilan data" /></li>
                <li><img src="assets/images/thumb-02.jpg" alt="Input data" title="Input data" /></li>
                <li><img src="assets/images/thumb-03.jpg" alt="Hapus data" title="Hapus data" /></li>         
              </ul>
            </div>
          </div>
        </div>

        <!-- ======================================mobil sport============================================ -->

        <div class="slide" id="4">
          <div id="slider-wrapper">
            <div id="image-slider">
              <ul>

                <!-- Tampilan  -->
                <li class="active-img">
                  <div class="isi">
                    <div class="judul">
                      <p>TAMPILAN</p>
                    </div>
                    <table class="table table-sm">
                      <thead class="table-dark">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Merek</th>
                          <th scope="col">Type</th>
                          <th scope="col">Tahun pembuatan</th>
                          <th scope="col">Harga</th>
                        </tr>
                      </thead>
                      <tbody class="table-success">
                      <?php
                        $ambilms = $proses->bacadata('tb_ms');
                        $no = 1;
                        foreach($ambilms as $isi){
                      ?>
                          <tr>
                            <th><?php echo $no++; ?></th>
                            <td><?php echo $isi['merek']; ?></td>
                            <td><?php echo $isi['tipe']; ?></td>
                            <td><?php echo $isi['tp']; ?></td>
                            <td><?php echo $isi['harga']; ?></td>
                          </tr>
                      <?php
                        }
                      ?>
                      </tbody>
                    </table>

                  </div>
                </li>

                <!-- Input   -->
                <li>
                  <div class="isi">

                    <form method="post" action="ms/simpan.php">
                      <div class="judul">
                        <p>INPUT</p>
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Input</span>
                        <input name="mereks" type="text" class="form-control" placeholder="Merek" aria-label="Merek" aria-describedby="basic-addon1">
                      </div>

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Input</span>
                        <input name="types" type="text" class="form-control" placeholder="Type" aria-label="Type" aria-describedby="basic-addon1">
                      </div>

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Input</span>
                        <input name="tps" type="text" class="form-control" placeholder="Tahun pembuatan" aria-label="Tahun pembuatan" aria-describedby="basic-addon1">
                      </div>

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Input</span>
                        <input name="hargas" type="text" class="form-control" placeholder="Harga" aria-label="Harga" aria-describedby="basic-addon1">
                      </div>
                    
                      <button type="submit" class="btn btn-warning">Submit</button>
                    
                    </form>
                    
                  </div>
                </li>

                <!-- Hapus  -->
                <li>
                  <div class="isi">
                    <div class="judul">
                      <p>HAPUS</p>
                    </div>
                    <table class="table table-sm">
                      <thead class="table-dark">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Merek</th>
                          <th scope="col">Type</th>
                          <th scope="col">Hapus</th>
                        </tr>
                      </thead>
                      <tbody class="table-success">
                        <?php
                          $hapusms = $proses->bacadata('tb_ms');
                          foreach($hapusms as $isi){
                        ?>
                          <tr>
                            <td><?php echo $isi['id']; ?></td>
                            <td><?php echo $isi['merek']; ?></td>
                            <td><?php echo $isi['tipe']; ?></td>
                            <td><a href="ms/hapus.php?id=<?php echo $isi['id']; ?>">Hapus</a></td>
                          </tr>
                        <?php
                          }
                        ?>
                      </tbody>
                    </table>

                  </dv>
                </li>                      
              </ul>
            </div>
            <div id="thumbnail">
              <ul>
                <li class="active"><img src="assets/images/thumb-01.jpg" alt="Tampilan data" title="Tampilan data" /></li>
                <li><img src="assets/images/thumb-02.jpg" alt="Input data" title="Input data" /></li>
                <li><img src="assets/images/thumb-03.jpg" alt="Hapus data" title="Hapus data" /></li>         
              </ul>
            </div>
          </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/accordations.js"></script>
    <script src="assets/js/main.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            // navigation click actions 
            $('.scroll-link').on('click', function(event){
                event.preventDefault();
                var sectionID = $(this).attr("data-id");
                scrollToID('#' + sectionID, 750);
            });
            // scroll to top action
            $('.scroll-top').on('click', function(event) {
                event.preventDefault();
                $('html, body').animate({scrollTop:0}, 'slow');         
            });
            // mobile nav toggle
            $('#nav-toggle').on('click', function (event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        // scroll function
        function scrollToID(id, speed){
            var offSet = 0;
            var targetOffset = $(id).offset().top - offSet;
            var mainNav = $('#main-nav');
            $('html,body').animate({scrollTop:targetOffset}, speed);
            if (mainNav.hasClass("open")) {
                mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                mainNav.removeClass("open");
            }
        }
        if (typeof console === "undefined") {
            console = {
                log: function() { }
            };
        }
    </script>

  </body>
</html>

<!-- link referensi : https://github.com/shevrie/oop_crud_php/commit/07a8cc2cfc6b7e7dd9cd73da5d29d63f355a8b0e -->