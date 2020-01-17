
<div class="container" style='margin-left: 20%'>
<h2>Update Student</h2>

<?php    

if($this->session->has_userdata('error')){
    echo $this->session->flashdata('error');
}

if($this->session->has_userdata('success')){
    echo $this->session->flashdata('success');
}
 
 


?>


			<hr/>
			
        <div class="panel-body" style="width:600px;">
            <form action="<?php echo base_url('student/updateStudentForm'); ?>" method="POST" enctype="multipart/form-data">
                
                
                <input type="text" value='<?php echo $studentByID->sid?>' name="sid">
                
                <div class="form-group">
                    <label> Student Name </label>
                    <input type="text" name='name' value='<?php echo $studentByID->name?>' class="form-control span12">
                </div>
                <div class="form-group">
                    <label>Department</label>
                    <input type="text"  name='dept' value="<?php echo $studentByID->dept?>" class="form-control span12">
                </div>
                <div class="form-group">
                    <label>Roll No.</label>
                    <input type="text"  name='roll' value="<?php echo $studentByID->roll?>" class="form-control span12">
                </div>
				<div class="form-group">
                    <label>Reg. No.</label>
                    <input type="text"  name='reg' value="<?php echo $studentByID->reg?>" class="form-control span12">
                </div>
                <div class="form-group">
                    <label>Session</label>
                    <input type="text"  name='session' value="<?php echo $studentByID->session?>" class="form-control span12">
                </div>
                <div class="form-group">
                    <label>Batch</label>
                    <input type="text"  name='batch' value="<?php echo $studentByID->batch?>" class="form-control span12">
                </div>
                <div class="form-group">
				<input type="submit"class="btn btn-primary" value="Submit"> 
                </div>
                   
            </form>
        </div>
                        
</div>
