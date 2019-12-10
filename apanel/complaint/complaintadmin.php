<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
 
 
 
 <form action="#" method="post" class="form-horizontal" role="form">
       
                
                <div class="form-group">
                
                    <div class="col-sm-4" style="float:right">
                        <input type="text" id=""  placeholder="Search" class="form-control" autofocus required>
                        
                    </div>
                </div>
                
                               
                <table class="table table-bordered">
    <thead>
      <tr>
        <th>Type</th>
        <th>Date</th>
        <th>Sender</th>
        <th>Poll</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>Default</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
        <td><button type="button" class="btn btn-warning"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></button><br>
        <button type="button" class="btn btn-warning"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></button><br>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#viewComplaintModal">View</button>
      </tr>      
     <tr class="success">
        <td>Default</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
        <td><button type="button" class="btn btn-warning"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></button><br>
        <button type="button" class="btn btn-warning"><i class="fa fa-thumbs-down" aria-hidden="true"></i></button><br>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#viewComplaintModal">View</button>
      </tr> 
            
    </tbody>
  </table>

  </form>
  
  
  <!-- Modal -->
<div id="viewComplaintModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      
      </div>
      <div class="modal-body">
    <form action="#" method="post" class="form-horizontal" role="form">
            
 
                   <div class="form-group">
                    <label  class="col-sm-3 control-label">Type:</label>
                        <div class="col-sm-6">
            
        
        
        <select class="form-control" name="category">
            <option>Select</option>
            <option>1</option>
            <option>2</option>
             <option>3</option>
             <option>4</option>
        </select>
        
        </div>
        </div>
        
        
         <div class="form-group">
                    <label class="col-sm-3 control-label">Date:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="date" />
                            </div>
                            </div>
                            
                            
                             <div class="form-group">
                    <label class="col-sm-3 control-label">Sender</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" />
                            </div>
                            </div>
                            
                             <div class="form-group">
                    <label class="col-sm-3 control-label">Image</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="file" />
                            </div>
                            </div>
                            
                            
                            
                            
                     <div class="form-group">
                    <label class="col-sm-3 control-label">Details</label>
                        <div class="col-sm-6">
                            <textarea class="form-control" rows="4" cols="50"></textarea>
                            </div>
                            </div>
                            
                            
                            
       <center> <button  style="margin-right:24%;" type="button" class="btn btn-primary" data-dismiss="modal">Close</button></center>
    

                            
        
    

    </form>
    </div>
    
    
    
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
        </div>
    </div>
    </div>
      