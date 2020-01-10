
<?php

include("includes/a.php");

if (isset($_POST['submit'])){

$user_name=$_POST['name'];
$user_email=$_POST['mail'];
$user_ph=$_POST['phNumber'];
$user_password=$_POST['p'];
$post_image=$_FILES['post_image']['name'];
$post_img_tmp=$_FILES['post_image']['tmp_name'];



if($user_name=='' OR $user_email=='null' OR  $user_ph=='' OR $user_password=='')
    {

    echo"<script>

alert('please fill all the fields');
</script>";
    exit();
}


else{
    move_uploaded_file($post_img_tmp,"reg_image/$post_image");
$insert_post="insert into register(user_name,email,ph_no,password,user_image) 
values('$user_name','$user_email','$user_ph','$user_password','$post_image')";

$run_posts=mysqli_query($con,$insert_post);

if(mysqli_query($con,$insert_post))
{
    echo"<script>alert('inserted')</script>";
}


}

}
?>