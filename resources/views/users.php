<?php
/**
 * Created by PhpStorm.
 * User: athira
 * Date: 30/7/18
 * Time: 12:36 PM
 */
//echo "Hello ".$name;

echo "hello/hi worked";
echo '<br>';
$url=route('nava');// ACCESSING STORED URI
echo "redirect URL= ".$url;
echo "<br>";
echo '<br>';
$url=request()->url();// ACCESSING current url
echo "current URL= ".$url;
echo "<br>";

?>
<a href="<?=url('hi')?>">click here to redirect to hi page</a> <!--URL HELPER FUNCTION-->
<br>
<a href="<?php echo url(route('nava')) ?>">click here to redirect to controller my function page</a> <!--USING NAMED ROUTE-->
