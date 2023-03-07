<?php 
require("alert.php");
require("db_config.php");
adminLogin();

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Dashboard - Mendoza</title>
      <meta name="robots" content="noindex, nofollow">
      <meta content="" name="description">
      <meta content="" name="keywords">
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/css/quill.snow.css" rel="stylesheet">
      <link href="assets/css/quill.bubble.css" rel="stylesheet">
      <link href="assets/css/remixicon.css" rel="stylesheet">
      <link href="assets/css/simple-datatables.css" rel="stylesheet">
      <link href="assets/css/style.css" rel="stylesheet">
   </head>
   <body>
      <header id="header" class="header fixed-top d-flex align-items-center">
         <div class="d-flex align-items-center justify-content-between"> <a href="dash.php" class="logo d-flex align-items-center"> <img src="assets/img/logo.png" alt=""> <span class="d-none d-lg-block">Mendoza</span> </a> <i class="bi bi-list toggle-sidebar-btn"></i></div>
         
         <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
               <li class="nav-item d-block d-lg-none"> <a class="nav-link nav-icon search-bar-toggle " href="#"> <i class="bi bi-search"></i> </a></li>
               <li class="nav-item dropdown pe-3">
                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> <span class="d-none d-md-block dropdown-toggle ps-2">Mendoza</span> </a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                     <li class="dropdown-header">
                        <h6>Mendoza</h6>
                        <span>Web Designer</span>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li> <a class="dropdown-item d-flex align-items-center" href="logout.php"> <i class="bi bi-box-arrow-right"></i> <span>Sign Out</span> </a></li>
                  </ul>
               </li>
            </ul>
         </nav>
      </header>
      <aside id="sidebar" class="sidebar">
         <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item"> <a class="nav-link " href="dash.php"> <i class="bi bi-grid"></i> <span>Dashboard</span> </a></li>
            <li class="nav-item"> <a class="nav-link " href="setting.php"> <i class="bi bi-grid"></i> <span>Main Setting</span> </a></li>
            <li class="nav-item"> <a class="nav-link " href="other.php"> <i class="bi bi-grid"></i> <span>Other Details</span> </a></li>
            <li class="nav-item"> <a class="nav-link " href="portfolio.php"> <i class="bi bi-grid"></i> <span>Portfolio</span> </a></li>
           
            
         </ul>
      </aside>
      <main id="main" class="main">
         <div class="pagetitle">
            <h1>Portfolio</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active">Portfolio</li>
               </ol>
         </div>

         <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
               <div class="d-flex align-items-center justify-content-between mb-3">
                  <h5 class="card-title m-0">Portfolio Project</h5>
                  <button type="button" class="btn btn-warning shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#portfolio">
                     <i class="bi bi-pencil-square"></i> Add 
                  </button>
               </div>

               <div class="row" id="portfolio-data">
                     
               </div>
            </div>
         </div>

         <div class="modal fade" id="portfolio" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <form id="portfolio_s_form">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-pencil-square"></i> Portfolio Project</h5>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label class="form-label fw-bold">Project Name</label>
                  <input type="text" name="portfolio_name" id="portfolio_name_input" class="form-control shadow-none" required>
                </div>
                <div class="mb-3">
                  <label class="form-label fw-bold">Picture</label>
                  <input type="file" name="portfolio_pic" id="portfolio_pic_input" accept=".jpg, .png, .webp, .jpeg" class="form-control shadow-none" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" onclick="portfolio_name.value='',portfolio_pic.value=''" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                <button type="submit"  class="btn btn-success shadow-none">Save</button>
              </div>
            </form>
            </div>
          </div>
        </div>

  
      </main>
      <footer id="footer" class="footer">
         <div class="copyright"> &copy; Copyright <strong><span>riyuuu dev</span></strong>. All Rights Reserved</div>
       
      </footer>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>  
        <script src="assets/js/apexcharts.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/chart.min.js"></script>
        <script src="assets/js/echarts.min.js"></script>
        <script src="assets/js/quill.min.js"></script>
        <script src="assets/js/simple-datatables.js"></script>
        <script src="assets/js/tinymce.min.js"></script>
        <script src="assets/js/validate.js"></script>
        <script src="assets/js/main.js"></script> 

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <script>
         let portfolio_s_form = document.getElementById('portfolio_s_form');
         let portfolio_name_input = document.getElementById('portfolio_name_input');
         let portfolio_pic_input = document.getElementById('portfolio_pic_input');


         portfolio_s_form.addEventListener('submit', function(e){
            e.preventDefault();
            add_portfolio();
         });

         function  add_portfolio(){
            let data = new FormData();
            data.append('name',portfolio_name_input.value);
            data.append('picture',portfolio_pic_input.files[0]);
            data.append('add_portfolio','');

            let xhr = new XMLHttpRequest();
            xhr.open("POST","portfolio_crud.php",true);

            xhr.onload = function(){
               var myModalEl = document.getElementById('portfolio')
               var modal = bootstrap.Modal.getInstance(myModalEl) // Returns a Bootstrap modal instanceof
               modal.hide();
               if(this.responseText == 'inv_img'){
                  Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Nothing happen',
 
                  })
               }else if(this.responseText == 'inv_size'){
                  Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Nothing happen',
 
                  })
               }else if(this.responseText == 'upd_faile'){
                  Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Nothing happen',
 
                  })
               }else{
                  Swal.fire(
                  'Portfolio',
                  'Successfully Add Project',
                  'success'
                  )
                  portfolio_name_input='';
                  portfolio_pic_input='';
                  get_portfolio();
               }
            }

            xhr.send(data);
   
         }

         function get_portfolio(){
            let xhr = new XMLHttpRequest();
            xhr.open("POST","portfolio_crud.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

            xhr.onload=function(){
               document.getElementById('portfolio-data').innerHTML = this.responseText;
            }

            xhr.send('get_portfolio');
         }

         function remove_portfolio(val){
            let xhr = new XMLHttpRequest();
            xhr.open("POST","portfolio_crud.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

            xhr.onload = function(){
               if(this.responseText==1){
                  Swal.fire(
                  'Portfolio',
                  'Successfully Delete Project',
                  'success'
                  )
                  get_portfolio();
               }else{
                  Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Nothing happen',
 
                  })
               }
            }
            xhr.send('remove_portfolio='+val);
         }




         window.onload = function(){
            get_portfolio();
         }


   

        </script>
             
   </body>
</html>