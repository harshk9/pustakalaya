<?php
if ($_GET['a']=="increase") {
// Connection to database
$s="localhost";
$p="qwerty";
$u="sumit";
$d="pustakalaya";

$connection=mysqli_connect($s,$u,$p,$d);
echo "yeah at that page";
$ide=$_GET['id'];
mysqli_query($connection,"UPDATE books SET downloads = (downloads + 1)  WHERE bookid='$ide'");
//
//   mysqli_close($connection);
//
//   echo "PHP RAN successfully";
// }
//
// //echo out the DB value here
// echo $db->amount;
$urll="home.php?";
if(isset($_GET['search_boxname']))
{
  $urll=$urll."&search_boxname=".$_GET['search_boxname'];

}
else {
  echo "not there";
}

if(isset($_GET['top_downloads']))
{
  $urll=$urll."top_downloads=".$_GET['top_downloads'];

}
else {
  echo "not there";
}

if(isset($_GET['filter_button']))
{
    $urll=$urll."&filter_button=".$_GET['filter_button'];

}
else {
  echo "not there";
}

if(isset($_GET['search_typee']))
{
  $urll=$urll."&search_typee=".$_GET['search_typee'];

}
else {
  echo "not there";
}

if(isset($_GET['price']))
{
  $urll=$urll."&price=".$_GET['price'];

}
else {
  echo "not there";
}

if(isset($_GET['rating']))
{
    $urll=$urll."&rating=".$_GET['rating'];

}
else {
  echo "not there";
}

if(isset($_GET['author']))
{
  $urll=$urll."&author=".$_GET['author'];
}
else {
  echo "not there";
}

echo "url is ".$urll;
 echo "<script> window.open('".$_GET['url']."','_blank');</script>";
 echo "<script> location.href='".$urll."'; </script>";

}
?>
