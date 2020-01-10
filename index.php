<?php  
 $connect = mysqli_connect("localhost", "root", "", "authentication");  
 $query = "SELECT * FROM tbl_employee ORDER BY id DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Register Form</title>  
           <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Not Register,Click On Register Button </h3>  
                <br />  
                <div class="table-responsive">  
                     <div align="right">  
                          <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Register Here!!</button>  
                          <button  type="button" name="add" id="add"  class="btn btn-warning"><a style="text-decoration: none;color: white;" href="matrilog.php">Go to Login Page</a></button> 
                     </div>  
                     <br />  
                     <div id="employee_table">  
                          <table class="table table-bordered">  
                               <tr>  
                                    <th width="70%">User Name</th>  
                                    <th width="15%">Edit</th>  
                                    <th width="15%">View</th>  
                                    <th width="15%">Delete</th>
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row["name"]; ?></td>  
                                    <td><input type="button" name="edit" value="Edit" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_data" /></td>  
                                    <td><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>  
                                    <td><input type="button" name="delete" value="delete" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs btn_delete" /></td>
                                    
                               </tr>  
                               <?php  
                               }  
                               ?>  
                          </table>  
                          
                     </div>  
                </div>  
           </div>  
      </body>  
 </html>  
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Users Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Register form</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>Enter User Name</label>  
                          <input type="text" name="name" id="name" class="form-control" />  
                          <br />  
                          <label>Enter Password</label>  
                          <input type="password" name="address" id="address" class="form-control"></input>  
                          <br />  
                          <label>Confirm Password</label>  
                          <input type="password" name="caddress" id="caddress" class="form-control"></input>  
                          <br /> 
                          <label>Select Gender</label>  
                          <select name="gender" id="gender" class="form-control">  
                               <option value="Male">Male</option>  
                               <option value="Female">Female</option>  
                          </select>  
                          <br />  
                          <label>Enter Email</label>  
                          <input type="email" name="designation" id="designation" class="form-control" />  
                          <br />  
                          <label>Enter Age</label>  
                          <input type="text" name="age" id="age" class="form-control" />  
                          <br />  
                          <input type="hidden" name="employee_id" id="employee_id" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#name').val(data.name);  
                     $('#address').val(data.password); 
                     $('#caddress').val(data.password); 
                     $('#gender').val(data.gender);  
                     $('#designation').val(data.email);  
                     $('#age').val(data.age);  
                     $('#employee_id').val(data.id);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#name').val() == "")  
           {  
                alert("Name is required");  
           }  
           else if($('#address').val() == '')  
           {  
                alert("Password is required");  
           }  
            else if($('#address').val() != $('#caddress').val())  
           {  
                alert("Password Not Matching");  
           }  
           else if($('#designation').val() == '')  
           {  
                alert("Email is required");  
           }  
           else if($('#age').val() == '')  
           {  
                alert("Age is required");  
           }  
           else  
           {  
                $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });
      $(document).on('click', '.btn_delete', function(){  
           
           if(confirm("Are you sure you want to delete this?"))  
           {      var employee_id = $(this).attr("id"); 
                window.location.href="delete.php";
           } 
           }); 

 });  
 </script>