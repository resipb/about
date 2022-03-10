<?php
include 'header.php';
?>
<?php
include 'menu.php';
?>

<div class="container-fluid px-2 px-md-4">
   <div class="card card-body min-height-400 border-radius-xl mt-4"> 
   <div class="col-10">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">Project</h6>
                    </div>
                    <div class="col-md-4 text-end">
                      <a href="javascript:;">
                        <i class="fas fa-plus-circle text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Project"></i>
                      </a>
                    </div>
                  </div>
                </div>
               </div>
               <div class="row justify-content-center">
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mt-n4 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="./assets/img/logo.jpeg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <h5 class="mb-0 text-sm">UNIVERSITAS SILIWANGI</h5>
                      <a href="javascript:;">
                        <p>
                          Semoga bisa masuk
                        </p>
                      </a>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">Edit</button>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">Hapus</button>
                      </div>
                    </div>
                  </div>
                </div>
  </div>
 </div>
</div>
<?php
include 'corejs.php';
?>