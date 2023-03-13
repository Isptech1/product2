<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">

select {
    
        width:300px;
        padding: 10px 10px;
        border-radius: 4px;
        background-color: #fff;
        margin-left:75px;
       
    
}

</style>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#category').on('change',function(){
        var categoryID = $(this).val();
        if(categoryID){
            $.ajax({
                type:'POST',
                url:'ajaxFile.php',
                data:'category_id='+categoryID,
                success:function(html){
                    $('#subcat').html(html);
                }
            }); 
        }else{
            $('#subcat').html('<option value="">Select category first</option>');
           
        }
    });
    
    $('#subcat').on('change',function(){
        var subcatID = $(this).val();
        if(subcatID){
            $.ajax({
                type:'POST',
                url:'ajaxFile.php',
                data:'subcat_id='+brandID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select brand first</option>'); 
        }
    });
});
</script>
</head>
<body>
<center>

                
    <div style='margin-top:30px;'>
    
                
    
    <?php
    //Include database configuration file
    include('config.php');
    
    //Get all category data
    $query = "SELECT * FROM category  ORDER BY category_name ASC";
    $run_query = mysqli_query($con, $query);
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    ?>
    <select name="category" id="category" style="margin-top: -20px;">
        <option value="">Select category</option>
        <?php
        if($count > 0){
            while($row = mysqli_fetch_array($run_query)){
                $category_id=$row['category_id'];
                $category_name=$row['category_name'];
                echo "<option value='$category_id'>$category_name</option>";
            }
        }else{
            echo '<option value="">category not available</option>';
        }
        ?>
    </select><br><br>
    <?php
    $query1 = "SELECT * FROM brand  ORDER BY brand_name ASC";
    $run_query1 = mysqli_query($con, $query1);
    //Count total number of rows
    $count1 = mysqli_num_rows($run_query1);
    ?>
    <select name="brand" id="brand">
        <option value="">Select Brand</option>
        <?php
            if($count > 0){
                while($row = mysqli_fetch_array($run_query1)){
                    $brand_id=$row['brand_id'];
                    $brand_name=$row['brand_name'];
                    echo "<option value='$brand_id'>$brand_name</option>";
                }
            }else{
                echo '<option value="">brand not available</option>';
            }
        ?>
    </select>
    <br><br>
    
    <select name="subcat" id="subcat">
        <option value="">Select Category First</option>
    </select>
    </div>
    </center>
</body>
</html>


