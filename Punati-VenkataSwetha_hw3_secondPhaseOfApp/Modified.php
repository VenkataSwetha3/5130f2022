<?php    
    
include "connection.php";    
    
if(isset($_POST['submit'])){        
$result = mysqli_query($sql);    
}    
    
$sql = "select * from User information";    
$result = mysqli_query($sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>       
                <td>First Name</td>   
                <td>Last Name</td>   
                <td>Email</td>    
                <td>Mobile</td>    
                <td>Gender</td>    
                <td>Address</td>    
                <td>Date of Birth</td>    
                <td>Place of Birth</td>    
                <td>Favourite place</td>    
                <td>Address</td>    
                <td>Food like to eat</td>
			<td>Height</td> 
			<td>Weight</td>  
			<td>Occupation</td>    
			<td>About</td> 
                <td colspan = "2">Action</td>    
            </tr>    
        </table>    
    </body>    
</html>    

<?php    
    
while($row = $result){

    
?>
    <tr>  
        <td>  
            <?php echo $row->Firstname;?>  
        </td>  
        <td>  
            <?php echo $row->Lastname;?>  
        </td>  
        <td>  
            <?php echo $row->Email;?>  
        </td>  
        <td>  
            <?php echo $row->Mobile;?>  
        </td>  
        <td>  
            <?php echo $row->Gender;?>  
        </td>  
        <td>  
            <?php echo $row->DateofBirth;?>  
        </td>  
        <td>  
            <?php echo $row->PlaceofBirth;?>  
        </td>  
        <td>  
            <?php echo $row->Favouriteplace;?>  
        </td>  
        <td>  
            <?php echo $row->Address;?>  
        </td>  
        <td>  
            <?php echo $row->Foodliketoeat;?>  
        </td>  
        <td>  
            <?php echo $row->Height;?>  
        </td>  
        <td>  
            <?php echo $row->Weight;?>  
        </td>  
        <td>  
            <?php echo $row->Occupation;?>  
        </td>  
        <td>  
            <?php echo $row->About;?>  
        </td>  
        <td>  
            <?php echo $row->file;?>  
        </td>  
     </tr>
      <?php } ?>