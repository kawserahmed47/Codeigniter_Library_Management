
<div class="container" style='margin-left: 20%'>
<h2>Update Issue</h2>

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
            <form action="<?php echo base_url('issue/updateIssueForm'); ?>" method="POST" enctype="multipart/form-data">
                
                
                <input type="hidden" value='<?php echo $issueByID->iID?>' name="iID">
                
                 <div class="form-group">
                    <label>Student ID</label>
                    <input type="text" name='iStudentID' value='<?php echo $issueByID->iStudentID?>' class="form-control span12">
                </div>
                <div class="form-group">
                    <label>Book Name</label>
                    <input type="text"  name='iBookName'value='<?php echo $issueByID->iBookName?>' class="form-control span12">
                </div>
                <div class="form-group">
                    <label>Date of Issue</label>
                    <input type="text"  name='iDateOfIssue'value='<?php echo $issueByID->iDateOfIssue?>' class="form-control span12">
                </div>
				<div class="form-group">
                    <label>Date of Return</label>
                    <input type="text"  name='iDateOfReturn'value='<?php echo $issueByID->iDateOfReturn?>' class="form-control span12">
                </div>
                
                
                <div class="form-group">
				<input type="submit"class="btn btn-primary" value="Submit"> 
                </div>
                   
            </form>
        </div>
                        
</div>
