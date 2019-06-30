<?php 
include("fragments/photolist.php");

function strip_bad_chars($input){
    $output = preg_replace( "/[^a-zA-Z0-9-]/", "", $input);
    return $output;
}

if(isset($_GET['photos'])){
$whichalbum = strip_bad_chars($_GET['photos']);
$photoinfo = $photolist[$whichalbum];
}

define("TITLE", "Alan P. Hunt | Photos | " . $photoinfo['title']);

include("fragments/header.php"); 
?>
<style>

#text main img{
    
    margin: 0 0 5% 0;
    width: 100%;
    max-width: 575px;
    }

</style>

<?php echo $photoinfo['images']; ?>

<a href="photos" class="alignleft">&larr; Back to photo list</a>


<?php include("fragments/footer.php"); ?>
