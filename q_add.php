<!DOCTYPE html>
<html lang="en"> 
	<!-- begin::Head -->
	<?php include "txt/head.php";?> 
	<!-- end::Head --> 
	<!-- begin::PHP Add  -->
    <?php 
    $Note = ""; 
    // Create connection
    include "txt/db.php";
    if (!empty($_POST)) {  
        $Q1=$_POST['Q1'];
        $A1=$_POST['A1'];
        $A2=$_POST['A2'];
        $A3=$_POST['A3'];
        $A4=$_POST['A4'];
        $A5=$_POST['A5'];
        $A6=$_POST['A6'];
        $A7=$_POST['A7'];
        $check_0 = isset($_POST['ch'][0]) ? 1 : 0;
        $check_1 = isset($_POST['ch'][1]) ? 1 : 0;
        $check_2 = isset($_POST['ch'][2]) ? 1 : 0; 
        $check_3 = isset($_POST['ch'][3]) ? 1 : 0; 
        $check_4 = isset($_POST['ch'][4]) ? 1 : 0; 
        $check_5 = isset($_POST['ch'][5]) ? 1 : 0; 
        $check_6 = isset($_POST['ch'][6]) ? 1 : 0;   
        $note=$_POST['note'];   
        if (empty($_POST['Q1'])){exit(1);}
        if (empty($_POST['A1'])){exit(1);}
        $sql_q=$conn ->query("INSERT INTO question (q_q,  q_book , q_note) VALUES ( '$Q1', 'CISCO 200-125','$note')");  
        $row=mysqli_fetch_array($conn->query("SELECT q_id FROM question ORDER BY q_id DESC LIMIT 1"));
        $MaxID= $row['q_id']; 
        $sql_a=$conn ->query( "INSERT INTO answer (a_qid, a_a, a_isCorrect) VALUES  ($MaxID, '$A1', '$check_0')");
        if (!empty($_POST['A2'])){$sql_u2=$conn ->query( "INSERT INTO answer (a_qid, a_a, a_isCorrect) VALUES  ($MaxID, '$A2', '$check_1')");}
        if (!empty($_POST['A3'])){$sql_u3=$conn ->query( "INSERT INTO answer (a_qid, a_a, a_isCorrect) VALUES  ($MaxID, '$A3', '$check_2')");}
        if (!empty($_POST['A4'])){$sql_u4=$conn ->query( "INSERT INTO answer (a_qid, a_a, a_isCorrect) VALUES  ($MaxID, '$A4', '$check_3')");}
        if (!empty($_POST['A5'])){$sql_u5=$conn ->query( "INSERT INTO answer (a_qid, a_a, a_isCorrect) VALUES  ($MaxID, '$A5', '$check_4')");}
        if (!empty($_POST['A6'])){$sql_u6=$conn ->query( "INSERT INTO answer (a_qid, a_a, a_isCorrect) VALUES  ($MaxID, '$A6', '$check_5')");}
        if (!empty($_POST['A7'])){$sql_u7=$conn ->query( "INSERT INTO answer (a_qid, a_a, a_isCorrect) VALUES  ($MaxID, '$A7', '$check_6')");}
        // Add log record
        $sql_a=$conn ->query( "INSERT INTO log (log_book,log_type,log_data) VALUES  ('CISCO 200-125', 'Add', 'Add Qustion No. $MaxID')");

        mysqli_close($conn); 
        $Note ="New question created successfully";
  } ?>
	<!-- end::PHP Add -->
 
	<!-- begin::Body -->
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
                                                        Add Question 
                                                     <small><?php echo $Note;?></small>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-portlet__body"> 
                                            <!--begin::Section-->
                                            <div class="m-section"> 
                                                <span class="m-section__sub"> 
                                                    <div class="form-group m-form__group row"> 
                                                            <textarea   class="form-control"  name="Q1" id="Q1" placeholder="" rows="6"></textarea> 
                                                    </div> 
                                                </span>   
                                            </div> 
                                            <!--end::Section--> 
                                            <!--begin::Section-->
                                            <div class="m-section"> 
                                                <span class="m-section__sub"> 
                                                    <div class="m-form__group form-group">
                                                        <label>Ansers</label>
                                                        <div class="m-radio-list"> 
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--success">
                                                                <input type="checkbox"  id="check" name="ch[0]" value="1" >A <textarea name="A1" id="A1" class="form-control"  rows="2"></textarea>
                                                                <span></span>
                                                            </label>  
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--success">
                                                                <input type="checkbox" id="check" name="ch[1]" value="1" >B <textarea name="A2" id="A2" class="form-control"  rows="2"></textarea>
                                                                <span></span>
                                                            </label>  
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--success">
                                                                <input type="checkbox" id="check" name="ch[2]" value="1">C <textarea name="A3" id="A3" class="form-control"  rows="2"></textarea>
                                                                <span></span>
                                                            </label>  
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--success">
                                                                <input type="checkbox" id="check" name="ch[3]" value="1">D <textarea name="A4" id="A4" class="form-control"  rows="2"></textarea>
                                                                <span></span>
                                                            </label>   
                                                            <button type="submit" class="btn btn-primary">Submit</button>    
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--success">
                                                                <input type="checkbox" id="check" name="ch[4]" value="1">E <textarea name="A5" id="A5" class="form-control"  rows="2"></textarea>
                                                                <span></span>
                                                            </label> 
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--success">
                                                                <input type="checkbox" id="check" name="ch[5]" value="1">F <textarea name="A6" id="A6" class="form-control"  rows="2"></textarea>
                                                                <span></span>
                                                            </label> 
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--success">
                                                                <input type="checkbox" id="check" name="ch[6]" value="1">G <textarea name="A7" id="A7" class="form-control"  rows="2"></textarea>
                                                                <span></span>
                                                            </label> 
                                                        </div>
                                                    </div>   
                                                </span>
                                                <div class="m-form__group form-group">
                                                    <label>Explanation </label>
                                                    <div class="m-radio-list"> 
                                                        <label class="form-group m-form__group row">
                                                                <textarea name="note" id="note" class="form-control"  rows="2"></textarea>
                                                            <span></span>
                                                        </label>  
                                                    </div> 
                                                </div> 
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
                                <script src="https://snipsave.com/embed/8FnZsyilz5UooMcbmH.js"></script>
								<!--end::Form-->
							</div> 
						</div> 
			<!-- end:: Body -->   
		<!--begin::Page Scripts --> 
		<?php include "txt/script.php";?> 
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>