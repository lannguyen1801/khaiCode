<!--<main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-0" style="background-color: white;">-->
		<!-- table -->
		<div class="table-wrapper">
	            <div class="table-title">
	                <div class="row">
	                    <div class="col-sm-6">
							<h2><b>Chương trình</b> đào tạo</h2>
						</div>
	                </div>
	            </div>
			
	            <form id="formadd">
						<div class="modal-header">						
							<h4 class="modal-title"><b>Chi tiết chương trình đào tạo</b></h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
						</div>
						<?php
						$connect = mysqli_connect("localhost", "user_ctdt", "puser_ctdt", "ctdt");
						$query = "SELECT * FROM ctdt where mact='".$_GET["id"]."'";
						$result = mysqli_query($connect, $query);
						if (mysqli_num_rows($result)==1) {
							while($row = mysqli_fetch_array($result)){
						        echo '<div class="modal-body offset-md-3">
										<div class="form-row row">
											<div class="form-group col-md-2">
												<label>Mã CTDT:</label>
												<input type="text" name="mact" class="form-control addmct" required value="'.$row['mact'].'" readonly>
											</div>
											<div class="form-group col-md-6">
												<label>Tên CTDT</label>
												<input type="text" name="tenct" class="form-control addtct" required value="'.$row['tenct'].'" readonly>
											</div>
										</div>
										<div class="form-row row">
											<div class="form-group col-md-2">
												<label>Số tín chỉ</label>
												<input type="number" name="sotc" class="form-control addstc"  min="70" max="100" step="1" value="'.$row['sotc'].'" readonly>
											</div>
											<div class="form-group col-md-6">
												<label>Ngành</label>';
												$sql_n = "select * from nganh";
												$result_n = $connect->query($sql_n);
												/*$result = mysql_query($sql,$conn) or die ("Kết nối không thành công. ".mysql_error());*/
												echo "<select class='form-control addmn' name='manganh' readonly>";
												while($row_n = $result_n->fetch_assoc()){
													if ($row_n["manganh"]==$row["manganh"]){
														echo"<option value ='".$row_n["manganh"]. "' selected>" .$row_n["tennganh"]."</option>";
													}else				
														echo"<option value ='".$row_n["manganh"]. "'>" .$row_n["tennganh"]."</option>";
												}
												echo"</select>";
												mysqli_free_result($result_n);
												echo '						
											</div>
										</div>
										<div class="form-row row">
											<div class="form-group col-md-8">
												<label>Ghi chú</label>
												<textarea name="ghichu" readonly class="form-control addgc" rows="3" cols="20" >'; echo $row['ghichu']; echo '</textarea>
											</div>	
										</div>
									</div>	';
								}
							}
							$query = "SELECT * FROM monhoc m join ctdtmh c on m.mamh = c.mamh join canbo cb on cb.macb = m.macb where mact='".$_GET["id"]."'";
				            $result = mysqli_query($connect, $query);
				            echo '<table class="table table-striped table-hover" >
					                <thead>
					                    <tr>			            
								            <th>Mã môn</th>
								            <th>Tên môn</th>
								            <th>Giáo viên</th>
								            <th>Số tín chỉ</th>
								            <th>Thao tác</th>
								        </tr>
								    </thead>
								  <tbody>';
				            while($row = mysqli_fetch_array($result))
				            {
				                echo '
				                <tr>
					                <td>'.$row["mamh"].'</td>
					                <td>'.$row["tenmh"].'</td>
					                <td>'.$row["hotencb"].'</td>
					                <td>'.$row["sotinchi"].'</td>
					                <td>	                           
			                            <a href="xemmh.php?id='.$row["mamh"].'" class="viewct" title="Xem chi tiết" id="'.$row["mamh"].'" data-toggle="tooltip"><i class="material-icons">pageview</i></a> 
			                        </td>
		                        </tr>
		                        ';
	                        }
	                        echo ' </tbody>
					        </table>';
							?>
							<hr>
					<center>
	            	<div class=" ">
		            	<div class="form-row">
		            		<div class="form-group offset-md-5">
								<input type="button" class="btn btn-default btnback"  value="Trở về"> 
							</div>	
						</div>
					</div>	
					</center>			     
				</form>
	    </div>
  <!--</main>-->