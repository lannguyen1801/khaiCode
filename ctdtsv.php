<?php 
include("session.php");   
include("db.php");   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>CTĐT Sinh Viên</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="js/jquery-3.4.1.min.js">
      <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
      <link rel="stylesheet" type="text/css" href="an.css">
      <link rel="stylesheet"  type="text/css" href="dashboard4.css" >
      <link rel="stylesheet" type="text/css" href="body.css">
      <link rel="stylesheet" type="text/css" href="menu.css">
      <link rel="stylesheet" type="text/css" href="moi.css">
      <link rel="stylesheet" type="text/css" href="table2.css">
      <link rel="stylesheet" type="text/css" href="sidebar3.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

      
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    Trung Tâm LMNT
                </a>
            </div>

            <ul class="nav">
                 <li>
                    <a class="nav-link" href="dangkyctdt.php">
                        <i class="pe-7s-graph"></i>
                        <p>ĐĂNG KÝ CTĐT</p>
                    </a>
                </li>
                <li class="active">
                    <a class="nav-link" href="ctdtsv.php">
                        <i class="pe-7s-graph"></i>
                        <p>CHƯƠNG TRÌNH ĐÀO TẠO</p>
                    </a>
                </li>
                
                <li>
                    <a class="nav-link" href="diemsv.php">
                        <i class="pe-7s-graph"></i>
                        <p>Điểm</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">SINH VIÊN</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">   

                        <li> 

                            <?php
                                 
                                //include("session.php");       
                                echo '<input type="hidden" class="iphidetentk" name="iphidetentk" value="'.$_SESSION['username'].'">';
                                echo '<a data-target="infoModal" class="nav-item nav-link infoTK" data-toggle="modal" ><p>'.$_SESSION['username'].'</p></a>';
                            ?> 
                        </li>
                        <li>    
                            <div id="form-messages-dangxuat" class="loi"></div>
                            <a data-target="dangxuatModal" class="nav-item nav-link dxTK" data-toggle="modal" ><p>Đăng xuất</p></a>
                        </li>

                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2><b>Chương trình đào tạo</b></h2>
                                        </div>
                                    </div>
                                
                                </div>
                                <?php
                                    require "ctdt_dangky.php";
                                ?>       
                                <?php
                                    require "ctdt_tamhoan.php";
                                ?> 
                                <?php
                                    require "ctdt_coythich.php";
                                ?> 
                                <?php
                                    require "ctdt_totnghiep.php";
                                ?>  
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

</body>
        <!-- Information tai khoan Modal HTML -->
        <div id="infoModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">                      
                            <h4 class="modal-title">Thông tin tài khoản</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-6">Tên tài khoản:</label>
                                    <div class="col-md-6 info"> <?php echo $_SESSION['username']; ?> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                 <div class="row">
                                    <label class="col-md-6">Họ tên:</label>
                                    <div class="col-md-6 info" >
                                        <?php 
                                        $sql_cb = "select * from sinhvien where tentk='".$_SESSION['username']."'";
                                        $res_cb = mysqli_query($con, $sql_cb);
                                        while ($row_cb = mysqli_fetch_array($res_cb)){
                                            echo $row_cb['hotensv'];
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                 <div class="row">
                                    <label class="col-md-6">Ngày sinh:</label>
                                    <div class="col-md-6 info" >
                                        <?php 
                                            echo $row_cb['ngaysinh']; 
                                        ?>
                                    </div> 
                                </div>         
                            </div>
                            <div class="form-group">
                                 <div class="row">
                                    <label class="col-md-6">Giới tính:</label>
                                    <div class="col-md-6 info" >
                                        <?php 
                                            if ($row_cb['gioitinh']=="Nam") 
                                                echo "Nam";
                                            else 
                                                echo "Nữ"; ; 
                                        ?>
                                    </div>       
                                </div>   
                            </div>      
                            <div class="form-group">
                                 <div class="row">
                                    <label class="col-md-6">Email:</label>
                                    <div class="col-md-6 info" >
                                        <?php 
                                            echo $row_cb['emailsv'];                                        
                                        ?>
                                    </div>      
                                </div>    
                            </div>
                            <div class="form-group">
                                 <div class="row">
                                    <label class="col-md-6">Địa chỉ:</label>
                                    <div class="col-md-6 info" >
                                        <?php 
                                            echo $row_cb['diachisv']; 
                                            }
                                        ?>
                                    </div>   
                                </div>       
                            </div>                          
                        </div>
                        <div class="modal-footer">
                            <center>
                            <a href="chinhsua_ttcn.php" class="btn btn-info btn-md" style="width: 340px;"><span>Chỉnh sửa thông tin</span></a>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Delete Modal HTML -->
        <div id="dangkyModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">                      
                            <h4 class="modal-title">Đăng ký Chương trình đào tạo</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">                    
                            <p>Bạn chắc chắn muốn đăng ký ngành này?</p>
                            <!--<p class="text-warning"><small>This action cannot be undone.</small></p>-->
                            <input type="hidden" class="iphidemct" name="iphidemct">
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Hủy">
                            <input class="btn btn-warning btnConfirmdk" clas='adangky' type="button" value="Đăng ký">   
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Đăng xuất -->
        <div id="dangxuatModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">                      
                            <h4 class="modal-title">Đăng xuất</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">                    
                            <p>Bạn chắc chắn muốn đăng xuất?</p>
                            <!--<p class="text-warning"><small>This action cannot be undone.</small></p>
                            <input type="hidden" class="iphidemct" name="iphidemct">-->
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Hủy">
                            <input class="btn btn-warning btnConfirmdx" class='adangxuat' type="button" value="Đăng xuất">   
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="js/jquery-3.4.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script type="text/javascript" src="dashboard2.js"></script>
    <!--<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>-->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      // load thanh nav 
      $(function(){
          $("#includedContent").load("menuqtht.html"); 
      });

      $(document).ready(function(){

        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();

        //Đăng xuất
        $('.btnConfirmdx').click(function(){
          var tentkdn = $('input[name="iphidetentk"]').map(function(){
                return $(this).val();               
              }).get();
          $.ajax({
            url: 'dangxuat.php',
            type: 'post',
            data: { tentk: tentkdn[0] }
          })
          .done(function(data){
            window.location.href = "http://localhost/ctdt/trangchu.php";           
          });      
        });
        //Xem info
        $(document).on('click','.infoTK',function(){
          $('#infoModal').modal('show');
        });
      });
    </script>
  

<script type="text/javascript">
      // load thanh nav 
      $(function(){
          $("#includedContent").load("menuqtht.html"); 
      });

      $(document).ready(function(){

        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();

        //Đăng xuất
        $('.btnConfirmdx').click(function(){
          var tentkdn = $('input[name="iphidetentk"]').map(function(){
                return $(this).val();               
              }).get();
          $.ajax({
            url: 'dangxuat.php',
            type: 'post',
            data: { tentk: tentkdn[0] }
          })
          .done(function(data){
             window.location.href = "http://localhost/ctdt/trangchu.php";           
          });       
        });

        //Xem info
        $(document).on('click','.infoTK',function(){
          $('#infoModal').modal('show');
        });
        $(document).on('click','.dxTK',function(){
          $('#dangxuatModal').modal('show');
        });
      });
</script>
</html>

