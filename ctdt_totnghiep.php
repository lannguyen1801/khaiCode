
      <?php
        $connect = mysqli_connect("localhost", "user_ctdt", "puser_ctdt", "ctdt");
        include("session.php");       
          $tentk = $_SESSION['username'];
        /*$sql_masv = "select * from sinhvien where tentk='".$tentk."'";
        $res_masv = mysqli_query($connect, $sql_masv);
        while($row_masv = mysqli_fetch_array($res_masv)){*/
          $query = "SELECT *
                   FROM ctdt c 
                    join nganh n
                      on c.manganh = n.manganh 
                    join svctdt s 
                      on c.mact = s.mact
                    join sinhvien sv
                      on s.masv = sv.masv
                  where sv.tentk='".$tentk."' and trangthai='tot nghiep'";
          $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result)>0){
            echo '<form method="POST" action="#">
                    <div class="modal-header">            
                      <h4 class="modal-title"><b>Chương trình đào tạo đã tốt nghiệp</b></h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    </div>
                  </form>
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>                  
                          <th>Mã CTDT</th>
                          <th>Tên CTDT</th>
                          <th>Ngành</th>
                          <th>Số tín chỉ</th>
                          <th>Thao tác</th>
                        </tr>
                      </thead>
                      <tbody>';
          
          if (!$result) echo "<script language='javascript'>alert('Lỗi: ".mysqli_error($conn)."!')</script> ";
          while($row = mysqli_fetch_array($result))
          {
            echo '
                <tr>
                  <td>'.$row["mact"].'</td>
                  <td>'.$row["tenct"].'</td>
                  <td>'.$row["tennganh"].'</td>
                  <td>'.$row["sotc"].'</td>
                  <td>
                      <a href="xemctdt.php?id='.$row["mact"].'" class="viewct" title="Xem chi tiết" id="'.$row["mact"].'" data-toggle="tooltip"><i class="material-icons" >pageview</i></a>                             
                  </td>
              </tr>
              ';
            }
          echo '</tbody>
              </table>
            ';
        }
      ?>       
    