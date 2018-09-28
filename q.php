<!DOCTYPE html>
<html lang="en"> 
	<!-- begin::Head -->
	<?php include "txt/head.php";
	    // Create connection
	session_start();
	include "txt/db.php";
	if(!isset($_SESSION["q_no"])){$_SESSION["q_no"]=1;} 
	if(isset($_GET["p"])){
	if($_GET["p"]==0){$_SESSION["q_no"]=$_SESSION["q_no"]-1;} 
	if($_GET["p"]==1){$_SESSION["q_no"]=$_SESSION["q_no"]+1;}  
	}
	$q_no=$_SESSION["q_no"];
	echo $q_no;
	$result = $conn->query("SELECT * FROM question WHERE q_id LIKE '$q_no'");
	$num_rows=$result->num_rows;
	if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	}
	?> 
	<!-- end::Head --> 
	<body> 
			<!-- begin::Body -->    
						<div class="row">
							<div class="col-lg-12">

								<!--begin::Portlet-->
								<div class="m-portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Basic Examples
												</h3>
											</div>
										</div>
									</div>
									<div class="m-portlet__body"> 
										<!--begin::Section-->
										<div class="m-section"> 
											<span class="m-section__sub">
											 <?php echo $row['q_q'];?>
											</span> 
										</div> 
										<!--end::Section--> 
										<!--begin::Section-->
										<div class="m-section"> 
											<span class="m-section__sub"> 										
												<?php	
												$q_nox=$row['q_id']; 
												$q_type=$row['q_type']; 
												$result_a = $conn->query("SELECT * FROM answer WHERE a_qid LIKE $q_nox");
												if ($result_a->num_rows > 0) {
													// output data of each row 
													if($q_type==1){
												?> 
															<div class="m-form__group form-group">
																<label>Chose One</label>
																<div class="m-radio-list">
																 <?php  while($row_a = $result_a->fetch_assoc()) { ?> 
																	<label class="m-radio m-radio--solid m-radio--success">
																		<input type="radio" name="example_5" value="5"><?php  echo   $row_a["a_a"] ; ?>
																		<span></span>
																	</label>  
																		<?php }   ?>	
																</div>
															</div>  
												<?php }  
													if($q_type==2){
												?>
															<div class="m-form__group form-group">
																<label>Chose three</label>
																<div class="m-checkbox-list"> 
																<?php  while($row_a = $result_a->fetch_assoc()) { ?> 
																	<label class="m-checkbox m-checkbox--solid m-checkbox--success">
																		<input type="checkbox"> <?php  echo   $row_a["a_a"] ; ?>
																		<span></span>
																	</label> 
																	<?php }  ?>	
																</div>
															</div>
												<?php }  }
												?>		 
 

											</span>
											<div class="m-section__content m-demo-buttons">
													<div class="row">
														<div class="col-lg-6">
															<a href="q.php?p=0" class="btn btn-primary">Previous</a>
															<a href="q.php?p=1" class="btn btn-primary">Next</a> 
														</div>
														<div class="col-lg-6 m--align-right">
															<button type="submit" class="btn btn-danger">Exit</button>
														</div>
													</div>
												
											</div> 




										</div> 
										<!--end::Section-->
										<div class="m-separator m-separator--dashed"></div>
										
										<!--begin::Section-->
										<div class="m-section">
											
											<div class="m-accordion m-accordion--default m-accordion--solid m-accordion--section  m-accordion--toggle-arrow" id="m_accordion_7" role="tablist">
												<!--begin::Item-->
												<div class="m-accordion__item">
													<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_7_item_1_head" data-toggle="collapse" href="#m_accordion_7_item_1_body" aria-expanded="    false">
														<span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
														<span class="m-accordion__item-title">Show Answer</span>
														<span class="m-accordion__item-mode"></span>
													</div>
													<div class="m-accordion__item-body collapse" id="m_accordion_7_item_1_body" role="tabpanel" aria-labelledby="m_accordion_7_item_1_head" data-parent="#m_accordion_7">
														<div class="m-accordion__item-content">
															<p>
														 		<?php echo $row['q_note'];?>
															</p> 
														</div>
													</div>
												</div>
											</div> 
										</div>

										<!--end::Section-->
									</div>
								</div>

								<!--end::Portlet-->
							</div> 
						</div> 
			<!-- end:: Body -->   
		<!--begin::Page Scripts --> 
		<?php include "txt/script.php";?> 
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>