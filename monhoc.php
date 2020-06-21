<?php 
include("session.php");    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Đăng ký chương trình đào tạo</title>

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
                    <a class="active" class="nav-link" href="nganh.php">
                        <i class="pe-7s-graph"></i>
                        <p>NGÀNH</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="ctdt.php">
                        <i class="pe-7s-graph"></i>
                        <p>CHƯƠNG TRÌNH ĐÀO TẠO</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="qlsinhvien.php">
                        <i class="pe-7s-graph"></i>
                        <p>SINH VIÊN</p>
                    </a>
                </li>
                <li>
                    <a href="monhoc.php">
                        <i class="pe-7s-note2"></i>
                        <p>MÔN HỌC</p>
                    </a>
                </li>
                <!--<li>
                    <a type="button" class="dropdown-btn">
                        <i class="pe-7s-user"></i>
                        <p>Dropdown&emsp;▼</p>
                    </a>
                        <ul class="thecon">
                            <li><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                            <li><a href="#">Link 3</a></li>
                        </ul>
                </li>-->
                <li>
                    <a href="totnghiep.php">
                        <i class="pe-7s-science"></i>
                        <p> TỐT NGHIỆP</p>
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
                    <a class="navbar-brand" href="#">QUẢN LÝ CTDT</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">   

                        <li> 

                            <?php
                                $conn = mysqli_connect("localhost", "user_ctdt", "puser_ctdt", "ctdt");
                                if(!$conn){
                                    die('Ket noi that bai:'.mysqli_connect_error());
                                }    
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

                                 <!-- Button trigger modal -->
                                  <main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-0" style="background-color: white;">
                                        <!-- table -->
                                        <div class="table-wrapper">
                                                <div class="table-title">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h2><b>Môn học</b></h2>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <a href="themmonhoc.php?redirect_from=mh" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Thêm môn học mới</span></a>
                                                            <div id="btndel" hidden ><a href="#deleteModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Xóa môn học</span></a></div>                        
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <form method="POST" action="#"></form>
                                                <div id="bangmh"></div>

                                                <!-- hien so trang
                                                <div class="clearfix">
                                                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                                    <ul class="pagination">
                                                        <li class="page-item disabled"><a href="#">Previous</a></li>
                                                        <li class="page-item" active><a href="#" class="page-link">1</a></li>
                                                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                                                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                                                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                                                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                                                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                                    </ul>
                                                </div>-->
                                        </div>
                                  </main>

                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>


</body>

        <!-- Thong tin ca nhan InfoModal-->
        <div id="infoModal" class="modal fade">
            <div class="modal-dialog">
                <div class="card">
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
                                        $res_cb = mysqli_query($conn, $sql_cb);
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
        </div>


        <!-- Delete Modal HTML -->
        <div id="deleteModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">                      
                            <h4 class="modal-title">Xóa môn học</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">                    
                            <p>Bạn chắc chắn muốn xóa môn học này?</p>
                            <!--<p class="text-warning"><small>This action cannot be undone.</small></p>-->
                             <input type="hidden" class="iphidenmm" name="iphidenmm">
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Hủy">
                            <input class="btn btn-danger btnConfirmDel" type="button" value="Xóa">  
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Lock Modal HTML -->
        <div id="lockModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">                      
                            <h4 class="modal-title">Khóa nhập điểm</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">                    
                            <p>Bạn chắc chắn muốn khóa nhập điểm môn học này?</p>
                            <!--<p class="text-warning"><small>This action cannot be undone.</small></p>-->
                             <input type="hidden" class="iphidelock" name="iphidelock">
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Hủy">
                            <input class="btn btn-danger btnConfirmLock" type="button" value="Khóa">    
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Lock Open Modal HTML -->
        <div id="lockopenModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">                      
                            <h4 class="modal-title">Mở khóa nhập điểm</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">                    
                            <p>Bạn chắc chắn muốn mở khóa nhập điểm môn học này?</p>
                            <!--<p class="text-warning"><small>This action cannot be undone.</small></p>-->
                             <input type="hidden" class="iphidelockopen" name="iphidelockopen">
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Hủy">
                            <input class="btn btn-danger btnConfirmLockOpen" type="button" value="Mở khóa"> 
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

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>
        <?php
            require "dangxuatmodal.html";
        ?>
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
            

            $(document).ready(function(){

                // Activate tooltip
                $('[data-toggle="tooltip"]').tooltip();
                //$('#tblmh').DataTable();
                
                var updater = setTimeout (function () {
                    $('div#bangmh').load ('listmh.php', 'update=true');
                }, 1);

                // Select/Deselect checkboxes
                var checkbox = $('table tbody input[type="checkbox"]');

                //Check All
                $("#selectAll").click(function(){
                    if(this.checked){
                        checkbox.each(function(){
                            this.checked = true; 
                            $("#btndel").prop('hidden', false); //hien btn xoa                   
                        });
                    } else{
                        checkbox.each(function(){
                            this.checked = false; 
                            $("#btndel").prop('hidden', true); //an btn xoa                       
                        });
                    }

                });

                //Check checkbox
                checkbox.click(function(){
                    if(!this.checked){
                        $("#selectAll").prop("checked", false);
                    }
                    var cnt = document.querySelectorAll('input[name="options[]"]:checked').length; //dem so lop input checkbox checked
                    var cntck = document.querySelectorAll('input[name="options[]"]').length;
                    if (cnt > 1){
                        $("#btndel").prop('hidden', false); //hien btn xoa
                        if (cnt == cntck ) {
                            $("#selectAll").prop('checked', true);
                        }
                    } else{
                        $("#btndel").prop('hidden', true); //an btn xoa
                        $("#selectAll").prop('checked', false);
                    }
                    
                });

                

                //Xac nhan Xoa
                $('.btnConfirmDel').click(function(){
                    //lay gia tri cua value checkbox checked
                    var checkVm = $('input[id=checkbox]:checked').map(function(){
                      return $(this).val();                     
                    }).get();
                        
                    console.log(checkVm, " Vm");
                    var ipValue = $('input[name="iphidenmm"]').map(function(){
                          return $(this).val();                     
                        }).get();
                    console.log(ipValue, " ipValue");
                    console.log(checkVm.length, " length checkVm");
                    console.log(ipValue.length, " length ipValue");
                    //ktra arr ipValue rong: 
                    if (ipValue[0]!=""){
                        console.log(" khong rong - click"); // click va chi xoa 1 dong (du check nhieu dong)                    
                        $.ajax({
                            url: 'del_monhoc.php',
                            type: 'post',
                            data: { mamh: ipValue }
                        })
                        .done(function(data){
                            location.reload();
                        });
                    }else {
                        console.log("rong - ko click"); // ko click va xoa nhieu dong
                        $.ajax({
                        url: 'del_monhoc.php',
                        type: 'post',
                        data: { mamh: checkVm }
                        })
                            
                        .done(function(data){
                            location.reload();
                        });
                       
                    }
                    
                });

                //Chon btn xoa 
                $(document).on('click','.alockopen',function(){
                    var mamh = $(this).attr("id");
                    $('.iphidelockopen').attr('value', mamh);
                    var ipValue = $('input[name="iphidelockopen"]').val();              
                    console.log(mamh, "click del mamh");
                    console.log(ipValue," click del ipValue");
                    $('#lockopenModal').modal('show');
                });

                //Xac nhan Lock Open
                $('.btnConfirmLockOpen').click(function(){
                    //lay gia tri cua value checkbox checked
                    var iplo = $('input[name="iphidelockopen"]').val();                                                     
                    console.log(iplo, " ip lock open");                 
                    $.ajax({
                        url: 'lockopen.php',
                        type: 'post',
                        data: { mamh: iplo }
                    })
                    .done(function(data){
                        //alert(data);
                        location.reload();
                    });                                                                          
                });

                //Chon btn xoa 
                $(document).on('click','.alock',function(){
                    var mamh = $(this).attr("id");
                    $('.iphidelock').attr('value', mamh);
                    var ipValue = $('input[name="iphidelock"]').val();              
                    console.log(mamh, "click del mamh");
                    console.log(ipValue," click del ipValue");
                });

                //Xac nhan Lock
                $('.btnConfirmLock').click(function(){ //lay gia tri cua value checkbox checked
                    var ipl = $('input[name="iphidelock"]').val();                                                      
                    console.log(ipl, " ip lock");                   
                    $.ajax({
                        url: 'lock.php',
                        type: 'post',
                        data: { mamh: ipl }
                    })
                    .done(function(data){
                        location.reload();
                    }); 
                });

                //Chon btn xoa 
                $(document).on('click','.adelete',function(){
                    var mamh = $(this).attr("id");
                    $('.iphidenmm').attr('value', mamh);
                    var ipValue = $('input[name="iphidenmm"]').map(function(){
                          return $(this).val();                     
                        }).get();
                    console.log(mamh, "click del mamh");
                    console.log(ipValue," click del ipValue");
                });


                //Dang xuat       
                $('.btnConfirmdx').click(function(){                  
                        $.ajax({
                            url: 'dangxuat.php',
                            type: 'post',
                            success: function(data){
                                //alert(data);
                                $('#dangxuatModal').modal('hide');
                            }
                        })
                        .done(function(data){
                            $('#dangxuatModal .loidx').html(data);          
                        });
                });

                //Xem info
                $(document).on('click','.infoTK',function(){
                    $('#infoModal').modal('show');
                });

                $(document).on('click','.dxTK',function(){
                  $('#dangxuatModal').modal('show');
                });
                $(document).on('click','.btndelete',function(){
                  $('#deleteModal').modal('show');
                });
                $(document).on('click','.btnlock',function(){
                  $('#lockModal').modal('show');
                });
                
            });
        </script>

</html>

