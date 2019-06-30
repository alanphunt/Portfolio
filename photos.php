<?php 
define("TITLE", "Alan Hunt | Photos");
include("fragments/photolist.php");
include("fragments/header.php"); 
?>

<?php foreach($photolist as $album => $photos){ ?>
    
<h2><a href="photopage.php?photos=<?php echo $album; ?>"><?php echo $photos['title']; ?></a></h2>
<h4 style="margin-bottom: 10px;"><?php echo $photos['date']; ?></h4>
<a href="photopage.php?photos=<?php echo $album; ?>"><img class="photog" src="<?php echo $photos['mainimage']; ?>" alt="<?php echo $photos['title']; ?>"></a>
<hr>
<?php } ?>














<?php include("fragments/footer.php"); ?>
