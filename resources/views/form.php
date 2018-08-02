<?php
/**
 * Created by PhpStorm.
 * User: athira
 * Date: 1/8/18
 * Time: 12:30 PM
 */?>
<form method="get" action="<?=url('nikku/r')?>">
    <input type="text" name="uname[]" value="<?=old('uname.0')?>"> <!--used to input as array-->
    <input type="text" name="uname[]" value="<?=old('uname.1')?>">
    <input type="password" name="pass" value="<?=old('pass')?>">
    <textarea name="comment" id="c" cols="30" rows="10" ><?=old('comment')?></textarea>
    <input type="submit">
    
</form>