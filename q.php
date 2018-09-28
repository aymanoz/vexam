<!DOCTYPE html>
<html lang="en"> 
	<!-- begin::Head -->
	<?php include "txt/head.php";
	    // Create connection
	session_start();
    include "txt/db.php";
	$_SESSION["q_no"]=$_SESSION["q_no"]+1;
	$q_no=$_SESSION["q_no"];
	$sql = "SELECT * FROM question WHERE q_id LIKE '$q_no'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	}
	?> 
	<!-- end::Head -->

	<!-- begin::Body -->
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
											 <?php echo row['q_q'];?>
											</span> 
										</div> 
										<!--end::Section--> 
										<!--begin::Section-->
										<div class="m-section"> 
											<span class="m-section__sub">
												
															<div class="m-form__group form-group">
																<label>Chose One</label>
																<div class="m-radio-list">
																 
																	<label class="m-radio m-radio--solid m-radio--success">
																		<input type="radio" name="example_5" value="5"> It continues operating normally.
																		<span></span>
																	</label> 
																	<label class="m-radio m-radio--solid m-radio--success">
																		<input type="radio" name="example_5" value="5"> It goes into a down/down state.
																		<span></span>
																	</label> 
																	<label class="m-radio m-radio--solid m-radio--success">
																		<input type="radio" name="example_5" value="5"> It becomes the root bridge for the configured VLAN
																		<span></span>
																	</label> 
																	<label class="m-radio m-radio--solid m-radio--success">
																		<input type="radio" name="example_5" value="5">It goes into an errdisable state.
																		<span></span>
																	</label> 
																	 
																</div>
															</div> 
														<?php /*

															<div class="m-form__group form-group">
																<label>Chose three</label>
																<div class="m-checkbox-list"> 
																	<label class="m-checkbox m-checkbox--solid m-checkbox--success">
																		<input type="checkbox"> Success checked state
																		<span></span>
																	</label> 
																	<label class="m-checkbox m-checkbox--solid m-checkbox--success">
																		<input type="checkbox"> Success checked state
																		<span></span>
																	</label> 
																	<label class="m-checkbox m-checkbox--solid m-checkbox--success">
																		<input type="checkbox"> Success checked state
																		<span></span>
																	</label> 
																	<label class="m-checkbox m-checkbox--solid m-checkbox--success">
																		<input type="checkbox"> Success checked state
																		<span></span>
																	</label> 
																	<label class="m-checkbox m-checkbox--solid m-checkbox--success">
																		<input type="checkbox"> Success checked state
																		<span></span>
																	</label> 
																	<label class="m-checkbox m-checkbox--solid m-checkbox--success">
																		<input type="checkbox"> Success checked state
																		<span></span>
																	</label> 
																</div>
															</div>
															*/
														?>
 

											</span>
											<div class="m-section__content m-demo-buttons">
													<div class="row">
														<div class="col-lg-6">
															<button type="reset" class="btn btn-primary">Previous</button>
															<button type="reset" class="btn btn-primary">Next</button>
														</div>
														<div class="col-lg-6 m--align-right">
															<button type="reset" class="btn btn-danger">Exit</button>
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
																Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
																to make a type specimen book.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
																to make a type specimen book.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
																to make a type specimen book.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
																to make a type specimen book.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
																to make a type specimen book.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
																to make a type specimen book.
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