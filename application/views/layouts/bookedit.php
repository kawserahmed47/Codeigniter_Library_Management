
<div class="container" style='margin-left: 20%'>
<h2>Update Book</h2>

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
            <form action="<?php echo base_url('book/updateBookForm'); ?>" method="POST" enctype="multipart/form-data">
                
                
                <input type="hidden" value='<?php echo $bookByID->bid?>' name="bid">
                
                <div class="form-group">
                    <label> Book name </label>
                    <input type="text" name='bname' value='<?php echo $bookByID->bname?>' class="form-control span12">
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input type="text"  name='bauthor' value="<?php echo $bookByID->bauthor?>" class="form-control span12">
                </div>
                <div class="form-group">
                    <label>Department</label>
                    <input type="text"  name='bdept' value="<?php echo $bookByID->bdept?>" class="form-control span12">
                </div>
				<div class="form-group">
                    <label>Number of Books</label>
                    <input type="text"  name='bnumber' value="<?php echo $bookByID->bnumber?>" class="form-control span12">
                </div>
               
               
                <div class="form-group">
				<input type="submit"class="btn btn-primary" value="Submit"> 
                </div>
                   
            </form>
        </div>
                        
</div>
