<?php

$mykey1=$_REQUEST['key1'];

$con = mysqli_connect("localhost", "root", "");

if (!$con) {
  die();
}

mysqli_select_db($con, "campus_cauldron");
mysqli_query($con,"UPDATE q_and_a SET answer='NULL', ans_approved=0 where id=$mykey1");
echo "<script>location.href='ques_ans.php'</script>"

?>
