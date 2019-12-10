 
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
        <th>Title</th>
        <th>Details</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>Default</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
        <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#noticeEditModal">View</button>
        </td>
      </tr>      
      <tr class="danger">
        <td>Default</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
        <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#noticeModal">View</button>
       </td>
      </tr>
      <tr class="info">
        <td>Default</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
        <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#noticeModal">View</button>
        </td>
      </tr>
      
    </tbody>
  </table>
  
  
  <!-- Modal -->
<div id="noticeModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Notice Title</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    </div>
    </div>
    

            </form>
    
    
 <!-- Modal -->
<div id="noticeEditModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Notice Title</h4>
      </div>
      <div class="modal-body">
    <form action="#" method="post" class="form-horizontal" role="form">
            
          
        
            
                
                
                
                
                
                   <div class="form-group">
                    <label  class="col-sm-3 control-label">Type:</label>
                        <div class="col-sm-4">
            
        
        
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
                    <label class="col-sm-3 control-label"> Start Date:</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="date" />
                            </div>
                            </div>
                            
                            <div class="form-group">
                    <label class="col-sm-3 control-label">End Date:</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="date" />
                            </div>
                            </div>
                            
                             <div class="form-group">
                    <label class="col-sm-3 control-label">Title</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" />
                            </div>
                            </div>
                            
                            
                            
                            
                     <div class="form-group">
                    <label class="col-sm-3 control-label">Details</label>
                        <div class="col-sm-4">
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
    


  
  
                
                
        