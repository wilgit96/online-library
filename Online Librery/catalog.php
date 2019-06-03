<?php
include("inc/data.php");
include("inc/functions.php");

$pageTitle="Full catalog";
$section=null;

if(isset($_GET["cat"])){
if($_GET["cat"]=="books"){
$pageTitle="books";
$section="books";

}
else if($_GET["cat"]=="music"){
  $pageTitle="music";
  $section="music";



}
else if($_GET["cat"]=="movies"){
  $pageTitle="movies";
  $section="movies";



}
}

include("inc/header.php");?>

<div class="section catalog page">
  <div class="wrapper">

    <h1><?php
if($section!=null){
  echo "<a href='catalog.php'>Full catalog</a>&gt; ";

}
echo $pageTitle;?><h1>

<ul class="items">
  <?php
  $categories = array_category($catalog,$section);
  foreach ($categories as $id) {

    echo get_item_html($id,$catalog[$id]);
  }
?>

</ul>

</div>
</div>

<?php include("inc/footer.php"); ?>
