<?php
include("fragments/bloglist.php");

function strip_bad_chars($input){
    $output = preg_replace( "/[^a-zA-Z0-9-]/", "", $input);
    return $output;
}

if(isset($_GET['thisblog'])){
$whichblog = strip_bad_chars($_GET['thisblog']);
$bloginfo = $bloglist[$whichblog];
}

define("TITLE", "Alan P. Hunt | Blog | " . $bloginfo['title']);


include("fragments/header.php");
?>

<h1><?php echo $bloginfo['title']; ?></h1>
<img src="<?php echo $bloginfo['image']; ?>" alt="<?php echo $bloginfo['imagealt']; ?>">
<h4><?php echo $bloginfo['date']; ?></h4>
<br>
<p><?php echo $bloginfo['description']; ?></p>
<br>
<a href="blog" class="alignleft">&larr; Back to blog list</a>

<?php include("fragments/footer.php"); ?>