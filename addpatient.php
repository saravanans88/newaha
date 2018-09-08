<?php include_once("common/header.php") ?>


<?php


if(isset($_REQUEST)){

 $datastring  = json_encode($_POST);

if($_POST["hiddentext"]=="submit"){

echo "<br><br><br><br><br>";
echo $datastring;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/ipfsapi.php?actionkey=userregister&datastring=$datastring");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
$output = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch);
//$req = json_decode($output,True);



}

//exit;
}
?>
               
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
			<?php include_once("common/menu.php") ?>
            
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
<br><br>
               <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
                                                <div class="card-box">
                                 
                                   

                                    <form name="firstform" id="firstform" method="POST" onsubmit="return confirm('Do you really want to submit the form?');">
<input type="hidden" name="hiddentext" id="hiddentext" value="submit">
  <div class="row">
<div class="col-6">
                                        <div class="form-group">
                                            <label for="firstname">First Name<span class="text-danger">*</span></label>
                                            <input type="text" parsley-trigger="change" required
                                                   placeholder="Enter first name" class="form-control" id="firstname" name="firstname">
                                        </div>
</div><div class="col-6">

 					<div class="form-group">
                                            <label for="lastname">Last Name<span class="text-danger">*</span></label>
                                            <input type="text"  parsley-trigger="change" required
                                                   placeholder="Enter last name" class="form-control" id="lastname" name="lastname">
                                        </div>
</div></div>
<div class="row">
<div class="col-6">
                                        <div class="form-group">
                                            <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                            <input type="email"  parsley-trigger="change" required
                                                   placeholder="Enter email" class="form-control" id="emailAddress">
                                        </div>
</div><div class="col-6">
                                        <div class="form-group">
                                            <label for="pass1">Password<span class="text-danger">*</span></label>
                                            <input id="pass1" name="pass1" type="password" placeholder="Password" required
                                                   class="form-control">
                                        </div>
</div></div>
<div class="row">
<div class="col-6">

                                        <div class="form-group">
                                            <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                            <input data-parsley-equalto="#pass1" type="password" required
                                                   placeholder="Password" class="form-control" id="passWord2" name="passWord2">
                                        </div>
</div><div class="col-6">
                                        <div class="form-group">
                                            <label for="mobile"> Mobile<span class="text-danger">*</span></label>
                                            <input type="text"  parsley-trigger="change" required
                                                   placeholder="Enter mobile number" class="form-control" id="mobile" name="mobile">
                                        </div>
</div></div>
<div class="row">
<div class="col-6">
<div class="form-group">
                                            <label for="govtid"> Govt Id<span class="text-danger">*</span></label>
                                            <input type="text"  parsley-trigger="change" required
                                                   placeholder="Enter govt id" class="form-control" id="govtid" name="govtid">
                                        </div>
</div><div class="col-6">
<div class="form-group">
                                            <label for="date"> Date<span class="text-danger">*</span></label>
                                            <input type="text"  parsley-trigger="change" required
                                                   placeholder="Choose Date" class="form-control" id="date" name="date">
                                        </div>
</div></div>
<div class="form-group">
                                            <label for="profile"> Health Profile<span class="text-danger">*</span></label>
                                            <input type="text"  parsley-trigger="change" required
                                                   placeholder="Enter health profile" class="form-control" id="profile" name="profile">
                                        </div>


                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit" name="btnsbt" id="btnsbt">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                Cancel
                                            </button>
                                        </div>

                                    </form>
                                </div> <!-- end card-box -->
                                            </div>
                                        </div>     





<script>
 $("#btnsb1t").click(function(){
    alert("The paragraph was clicked.");
$("#firstform").submit();
});
</script> 

   <?php include_once("common/footer.php") ?>                    
                       

                   
