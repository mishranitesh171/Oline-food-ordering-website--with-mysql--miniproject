<?php include('partials/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1>manage category</h1>
        <br><br>

        <?php 

if(isset($_SESSION['add']))
{
echo $_SESSION['add'];
unset($_SESSION['add']);

}
if(isset($_SESSION['remove']))
{
echo $_SESSION['remove'];
unset($_SESSION['remove']);

}
if(isset($_SESSION['delete']))
{
echo $_SESSION['delete'];
unset($_SESSION['delete']);

}
if(isset($_SESSION['no-category-found']))
{
echo $_SESSION['no-category-found'];
unset($_SESSION['no-category-found']);

}
if(isset($_SESSION['update']))
{
echo $_SESSION['update'];
unset($_SESSION['update']);

}



?>   

<br><br>


 <a href="<?php echo SITEURL;?>admin/add-category.php" class="btn-primary">ADD category</a>
 <br> <br> <br>

 <table class="tbl-full">
      <tr>
            <th>S.N</th> 
            <th>Title</th>
            <th>image</th>
            <!-- <th>Featured</th> -->
            <th>Active</th>
            <th>Action</th>
      </tr>
      <?php
      $sql="SELECT *FROM tbl_category";
//execute query
      $res=mysqli_query($conn,$sql);
      //count rows
      $count=mysqli_num_rows($res);
      $sn=1;
 if($count>0){


      while($row=mysqli_fetch_assoc($res)){
   $id=$row['id'];  
   $title=$row['title'];
$image_name=$row['image_name'];

//  $featured=$row['featured'];
$active=$row['active'];
?>

<tr>
<td><?php echo $sn++;?></td> 
            <td><?php echo $title;?></td>
            
            <td>
                   <?php 
                   if($image_name!=""){
?>

<img src=" <?php echo SITEURL;?>images/category/<?php echo $image_name;?>"width="100px" > 

                        <?php
                   }
                   else{

                        echo"<div class='error'> image not added</div>";
                   }
                   ?>
                   </td>
                  
            <td><?php echo $active;?></td>
            <td>
            <a href="<?php echo SITEURL;?>admin/update-category.php?id=<?php echo $id;?>" class="btn-sec">UPDATE CATEGORY </a>   
               <a href="<?php echo SITEURL;?>admin/delete-category.php?id=<?php echo $id;?>&image_name=<?php echo $image_name;?>" class="btn-danger">DELETE category </a>   
            </td>
      </tr>



<?php


}
      }
      else{
?>
<tr>
      <td colspan="6"><div class="error"> NO category added</div></td>
</tr>



            <?php
      }
      ?>
      
      
 </table>

    </div>
</div>
<?php include('partials/footer.php'); ?>