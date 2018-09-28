<!DOCTYPE html>
<html lang="en"> 
	<!-- begin::Head -->
	<?php include "txt/head.php";?> 
	<!-- end::Head -->


	<!-- begin::PHP Add  -->
    <?php 
        
	    include "txt/db.php";
        if (!empty($_POST['submit'])) { 
            $check_0 = isset($_POST['ch'][0]) ? 1 : 0;
            $check_1 = isset($_POST['ch'][1]) ? 1 : 0; 
            if ($check_0){
                $sql=$conn ->query("TRUNCATE TABLE `question` ");
            }
            if($check_1){
                $sql=$conn ->query("TRUNCATE TABLE `answer` ");
            }
            
            $conn->close();
  } ?>
	<!-- end::PHP Add --> 
	<body> 
			<!-- begin::Body -->    
						<div class="row">
							<div class="col-lg-12"> 
								<!--begin::Form-->
                                <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post">
                                    <div class="m-portlet">
                                        <div class="m-portlet__head">
                                            <div class="m-portlet__head-caption">
                                                <div class="m-portlet__head-title">
                                                    <h3 class="m-portlet__head-text">
                                                        Delete Table in Database   
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-portlet__body">  
                                            <!--begin::Section-->
                                            <div class="m-section"> 
                                                <span class="m-section__sub"> 
                                                    <div class="m-form__group form-group">
                                                        <label>Table</label>
                                                        <div class="m-radio-list"> 
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--success">
                                                                <input type="checkbox"  id="check" name="ch[0]" value="1" > Question
                                                                <span></span>
                                                            </label>  
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--success">
                                                                <input type="checkbox" id="check" name="ch[1]" value="1" > Answer <br>   
                                                                <span></span>
                                                            </label>   
                                                        </div>
                                                    </div>   
                                                </span> 
                                                <div class="m-section__content m-demo-buttons">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <button type="submit" class="btn btn-primary">Submit</button> 
                                                        </div>
                                                        <div class="col-lg-6 m--align-right">
                                                            <button type="reset" class="btn btn-danger">Exit</button>
                                                        </div>
                                                    </div> 
                                                </div>  
                                            </div>  
                                        </div>
                                    </div>
                                </form> 
								<!--end::Form-->
							</div> 
						</div> 
			<!-- end:: Body -->   
		<!--begin::Page Scripts --> 
		<?php include "txt/script.php"?> 
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>