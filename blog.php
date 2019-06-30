<?php
define("TITLE", "Alan P. Hunt | Blog");

include("fragments/header.php");
include("fragments/bloglist.php");

function myTruncate($string, $limit, $break=".", $pad="...")
{
  // return with no change if string is shorter than $limit
  if(strlen($string) <= $limit) return $string;

  // is $break present between $limit and the end of the string?
  if(false !== ($breakpoint = strpos($string, $break, $limit))) {
    if($breakpoint < strlen($string) - 1) {
      $string = substr($string, 0, $breakpoint) . $pad;
    }
  }

  return $string;
}
?>

<h1>What's the latest?</h1>


<?php foreach($bloglist as $blog => $thisblog){ ?>
    
<a href="blogpage.php?thisblog=<?php echo $blog; ?>"><img src="<?php echo $thisblog['image']; ?>" alt="<?php echo $thisblog['imagealt']; ?>"></a>
<h2><a href="blogpage.php?thisblog=<?php echo $blog; ?>"><?php echo $thisblog['title']; ?></a></h2>
<h4 style="margin: 15px 0 0 0;"><?php echo $thisblog['date']; ?></h4>
<p><?php echo myTruncate($thisblog['description'], 320); ?></p>
<hr>
    

<?php } ?>





<?php include("fragments/footer.php"); ?>