<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
      <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
      <meta name="author" content="pixelstrap">
      <link rel="icon" href="<?php echo base_url(); ?>/assets/images/favicon.png" type="image/x-icon">
      <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/images/favicon.png" type="image/x-icon">
      <title>Billing - Categories</title>
      <!-- Google font-->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
      <!-- Font Awesome-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/fontawesome.css">
      <!-- ico-font-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/icofont.css">
      <!-- Themify icon-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/themify.css">
      <!-- Flag icon-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/flag-icon.css">
      <!-- Feather icon-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/feather-icon.css">
      <!-- Plugins css start-->
      <!-- Plugins css Ends-->
      <!-- Bootstrap css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
      <!-- App css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
      <link id="color" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/color-1.css" media="screen">
      <!-- Responsive css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/responsive.css">
   </head>
   <body>
      <!-- Loader starts-->
      <div class="loader-wrapper">
         <div class="theme-loader">
            <div class="loader-p"></div>
         </div>
      </div>
      <!-- Loader ends-->
      <!-- page-wrapper Start-->
      <div class="page-wrapper" id="pageWrapper">
         <!-- Page Header Start-->
         <?php echo include('topnav.php'); ?>
         <!-- Page Header Ends                              -->
         <!-- Page Body Start-->
         <div class="page-body-wrapper horizontal-menu">
            <!-- Page Sidebar Start-->
            <?php echo include('sidenav.php'); ?> 
            <!-- Page Sidebar Ends-->
            <div class="page-body">
               <div class="container-fluid">
                  <div class="page-header">
                     <div class="row">
                        <div class="col-sm-6">
                           <h3>Categories</h3>
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>user-home">Home</a></li>
                              <li class="breadcrumb-item">Categories</li>
                           </ol>
                        </div>
                        <div class="col-sm-6">
                           <!-- Bookmark Start-->
                           <div class="bookmark">
                              <ul>
                                 <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="download"></i></a></li>
                              </ul>
                           </div>
                           <!-- Bookmark Ends-->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-sm-12 col-xl-12">
                        <div class="card-body">
                           <?php if(!empty($this->session->flashdata('success'))) { ?>
                           <div class="alert alert-success inverse alert-dismissible fade show" role="alert">
                              <i class="icon-thumb-up alert-center"></i>
                              <p><b><span style="color:green;">Wow..!</span></b> <?php echo $this->session->flashdata('success'); ?></p>
                              <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                           </div>
                           <?php } if(!empty($this->session->flashdata('failed'))) { ?>
                           <div class="alert alert-danger inverse alert-dismissible fade show" role="alert">
                              <i class="icon-thumb-down"></i>
                              <p><b><span style="color:red;">Oops..!</span></b> <?php echo $this->session->flashdata('failed'); ?></p>
                              <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                           </div>
                           <?php } ?>
                        </div>
                     </div>
                     <div class="col-sm-12">
                        <div class="card">
                           <div class="card-header pb-0">
                              <h5>Add new category</h5>
                           </div>
                           <form id="categoryadd" action="<?php echo base_url(); ?>category/addcategory" method="post" class="form theme-form">
                              <div class="card-body">
                                 <!-- <div class="row">
                                    <div class="col">
                                      <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Upload File</label>
                                        <div class="col-sm-9">
                                          <input class="form-control" type="file">
                                        </div>
                                      </div>
                                    </div>
                                    </div> -->
                                 <div class="row">
                                    <div class="col">
                                       <div class="row">
                                          <label class="col-sm-3 col-form-label">Category Name</label>
                                          <div class="col-sm-9">
                                             <input type="text" name="category_name" class="form-control">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-footer text-end">
                                 <button class="btn btn-primary" return="false" type="submit">Submit</button>
                                 <input class="btn btn-light" type="reset" value="Cancel">
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="col-sm-12">
                        <div class="card">
                           <div class="card-header">
                              <h5>Categories</h5>
                              <span>Existing categories activate / deactivate here.</span>
                           </div>
                           <div class="table-responsive">
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">Category Name</th>
                                       <th scope="col">Current Status</th>
                                       <!-- <th scope="col">Activate / Deactivate</th> -->
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php $i=1; foreach($categorys as $category) { ?>
                                    <tr>
                                       <th scope="row"><?php echo $i++; ?></th>
                                       <td><?php echo $category['categoryname']; ?></td>
                                       <td><?php echo ($category['isActive'] == 1)? "Active":"De-Active" ?></td>
                                       <!-- <td>@mdorton</td> -->
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <?php include("footer.php"); ?>
         </div>
      </div>
      <!-- latest jquery-->
      <script src="<?php echo base_url(); ?>/assets/js/jquery-3.5.1.min.js"></script>
      <!-- feather icon js-->
      <script src="<?php echo base_url(); ?>/assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- Sidebar jquery-->
      <script src="<?php echo base_url(); ?>/assets/js/sidebar-menu.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/config.js"></script>
      <!-- Bootstrap js-->
      <script src="<?php echo base_url(); ?>/assets/js/bootstrap/popper.min.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/bootstrap/bootstrap.min.js"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="<?php echo base_url(); ?>/assets/js/script.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/theme-customizer/customizer.js"></script>
      <!-- login js-->
      <!-- Plugin used-->
      <script>
         /*  $(function() {
         //hang on event of form with id=myform
         $("#categoryadd").submit(function(e) {
            alert("here");
            //prevent Default functionality
            e.preventDefault();
            var datas = $("#categoryadd").serialize();
            //get the action-url of the form
            var actionurl = "<?php //echo base_url(); ?>category/addcategory";
         
            //do your own request an handle the results
            $.ajax({
                    url: actionurl,
                    type: 'post',
                    dataType: 'application/json',
                    data: datas,
                    success: function(data) {
                        alert(data);
                    }
            });
         
         });
         
         }); */
          
      </script>
   </body>
</html>