<?php
/**
 * Created by PhpStorm.
 * User: athira
 * Date: 1/8/18
 * Time: 4:17 PM
 */?>


    <form method="get" action="<?=url('cook/r')?>">
        <input type="text" name="uname[]" > <!--used to input as array-->
        <input type="text" name="uname[]" >
        <input type="password" name="pass" >
        <textarea name="comment" id="c" cols="30" rows="10" ></textarea>
        <input type="submit">

    </form>
