 
<div class="content">
        <div class="main-content">
            <h2>Book List</h2>
            
            <?php    

if($this->session->has_userdata('error')){
    echo $this->session->flashdata('error');
}

if($this->session->has_userdata('success')){
    echo $this->session->flashdata('success');
}


?>

            
            
            
			<hr/>
<table class="table">
  <thead>
    <tr>
      <th>BookID</th>
      <th>Book Name</th>
      <th>Author Name</th>
      <th>Department</th>
       <th>Number of Books</th>
        
      <th style="width: 3.5em;">Action</th>
    </tr>
  </thead>
  <tbody>
      
      <?php
  
      foreach ($bookdata as $bdata){
          
      
      ?>
    <tr>
      <td><?php echo $bdata->bid; ?></td>
      <td><?php echo $bdata->bname; ?></td>
    <td><?php echo $bdata->bauthor; ?></td>
      <td><?php echo $bdata->bdept; ?></td>
     <td><?php echo $bdata->bnumber; ?></td>
     
      <td>
          <a href="editbook/<?php echo $bdata->bid; ?>"><i class="fa fa-pencil"></i></a>
          <a onclick="return confirm('Are you sure to delete?');"  href="deletebook/<?php echo $bdata->bid; ?>" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
      </td>
    </tr>
    
    <?php } ?>
    
   
    
    
    
    
  </tbody>
</table>


<div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Delete Confirmation</h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete This?<br>This cannot be undone.</p>
        </div>
        <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button class="btn btn-danger" data-dismiss="modal">Delete</button>
        </div>
      </div>
    </div>
  </div>
 </div>
</div>
