 
<div class="content">
        <div class="main-content">
            <h2>Student List</h2>
            
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
      <th>sID</th>
      <th>Name</th>
      <th>Department</th>
      <th>Roll</th>
       <th>Registration</th>
        <th>Session</th>
         <th>Batch</th>
      <th style="width: 3.5em;">Action</th>
    </tr>
  </thead>
  <tbody>
      
      <?php
  
      foreach ($studentdata as $sdata){
          
      
      ?>
    <tr>
      <td><?php echo $sdata->sid; ?></td>
      <td><?php echo $sdata->name; ?></td>
    <td><?php echo $sdata->dept; ?></td>
      <td><?php echo $sdata->roll; ?></td>
     <td><?php echo $sdata->reg; ?></td>
      <td><?php echo $sdata->session; ?></td>
     <td><?php echo $sdata->batch; ?></td>
      <td>
          <a href="editstudent/<?php echo $sdata->sid; ?>"><i class="fa fa-pencil"></i></a>
          <a onclick="return confirm('Are you sure to delete?');"  href="deletestudent/<?php echo $sdata->sid; ?>" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
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
