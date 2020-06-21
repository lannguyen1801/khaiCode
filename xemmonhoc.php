<!--<main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-0" style="background-color: white;">-->
		<!-- table -->
		<div class="table-wrapper">
	            <div class="table-title">
	                <div class="row">
	                    <div class="col-sm-6">
							<h2><b>Môn học</b></h2>
						</div>
	                </div>
	            </div>
			
	            <form id="formadd">
					<div class="modal-header">						
						<h4 class="modal-title"><b>Chi tiết môn học</b></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					</div>
					<?php 
						$connect = mysqli_connect("localhost", "user_ctdt", "puser_ctdt", "ctdt");
						if (isset($_GET['id'])){
							$query = "SELECT * FROM monhoc where mamh='".$_GET['id']."'";
							$result = mysqli_query($connect, $query);
							if (mysqli_num_rows($result)==1) {
								while($row = mysqli_fetch_array($result)){
									echo'
							<div class="modal-body offset-md-3">
								<div class="form-row row">
									<div class="form-group col-md-2">
										<label>Mã môn học:</label>
										<input type="text" name="mamh" class="form-control addmmh" readonly required value="'.$row['mamh'].'">
									</div>
									<div class="form-group col-md-6">
										<label>Tên môn học</label>
										<input type="text" name="tenmh" class="form-control addtmh" required value="'.$row['tenmh'].'" readonly>
									</div>
								</div>
								<div class="form-row row">
									<div class="form-group col-md-2">
									<label>Số tín chỉ</label>
										<input type="number" name="sotc" class="form-control addstc"  min="1" max="15" step="1" value="'.$row['sotinchi'].'" readonly>
									</div>
									<div class="form-group col-md-6">
									<label>Học phí</label>
										<input type="number" name="hocphi" class="form-control addhp"  min="100000" max="1000000" step="1000" value="'.$row['hocphi'].'" readonly>
									</div>
								</div>
								<div class="form-row row">
									<div class="form-group col-md-8">
										<label>Giáo viên</label>
										';
											$sql_n = "select * from canbo c join quyentk q on c.tentk = q.tentk where maquyen='Q3' order by hotencb";
											$result_n = $connect->query($sql_n);
											
											echo "<select class='form-control addmcb' name='macb' readonly>";
											while($row_n = $result_n->fetch_assoc())	{		
												

												if ($row_n["macb"]==$row["macb"]){
													echo"<option value ='".$row_n["macb"]. "' selected>" .$row_n["hotencb"]."</option>";
												}else				
													echo"<option value ='".$row_n["macb"]. "'>" .$row_n["hotencb"]."</option>";
											}
											echo"</select>";
											mysqli_free_result($result_n);
											echo '		
												</div>
											</div>
											<div class="form-row row ">
												<div class="form-group col-md-8">
													<label>Ghi chú</label>
													<textarea name="chitietmh" readonly class="form-control addct" rows="3" cols="20">'; echo $row['chitietmh'];
											echo '  </textarea>
												</div>	
											</div>
										</div>	';
									}
								}
							}
					?>
									     
	            	<hr>
	            	<div align="center" class=" ">
		            	<div class="form-row row">
		            		<div class="form-group offset-md-5">
								<input  type="button" class="btn btn-default btnback"  value="Trở về"> 
							</div>	
						</div>
					</div>
				</form>
	    </div>

<!--</main>-->