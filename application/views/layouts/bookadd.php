
<div class="container" style='margin-left: 20%'>
<h2>Add Book</h2>
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
            <form action="addBookForm" method="POST">
                <div class="form-group">
                    <label>Book Name</label>
                    <input type="text" name='bname' class="form-control span12">
                </div>
                <div class="form-group">
                    <label>Author Name</label>
                    <input type="text"  name='bauthor' class="form-control span12">
                </div>
                <div class="form-group">
                    <label>Department</label>
                    <input type="text"  name='bdept' class="form-control span12">
                </div>
				<div class="form-group">
                    <label>No. of Books</label>
                    <input type="text"  name='bnumber' class="form-control span12">
                </div>
                
                
                <div class="form-group">
				<input type="submit"class="btn btn-primary" value="Submit"> 
                </div>
                   
            </form>
        </div>
                        
</div>
