<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Dtable;
use App\Post;
use App\Reply;
use App\Student;
use App\Subject;
use App\Users;
use Illuminate\Http\Request;

class DController extends Controller
{
    function getNotesAsJson(){
        $obj=new Dtable();
        $notes=$obj->getDataTable();
       $arr=array('draw'=>1,'recordsTotal'=>6,'recordsFiltered'=>2,'mydata'=>$notes);
        return $arr;

    }

    function many2many(){
        $d=Subject::find(3)->stud;//lazy loading
        dump($d);
        $w=Subject::with('stud')->find(3)->stud;//eager loading
        dump($w);
        $d=Student::find(3)->sub;//lazy loading
        dump($d);
        $w=Student::with('sub')->find(3)->sub;//eager loading
        dump($w);
    }

    function whichUserCommented (){
        $obj= Users::find(2);
        $comm=$obj->whatComment;
        dump($comm);

        $obj2= Comment::find(4);
        $comm2=$obj2->whichUserCommented;
        dd($comm2);
    }
    function whichUserReplied (){
        $obj= Users::find(2);
        $comm=$obj->whatReply;
        dump($comm);

        $obj2= Reply::find(4);
        $comm2=$obj2->whichUserReplied;
        dd($obj2,$comm2);
    }
    function whichUserPosted (){
        $obj= Users::find(2);
        $comm=$obj->whatPost;
        dump($comm);

        $obj2= Post::find(2);
        $comm2=$obj2->whichUserPosted;
        dd($comm2);
    }

    function findAllReplyToPost(){
    $det=Post::with('getAllReplies')->find(1);
    dump($det,$det->getAllReplies);
    }
    function testing(){
        $obj=Post::find(1);
        dump($obj->getComments);

        $obj2=Comment::find(1);
        dump($obj2->getReplies);

        $obj3=Reply::find(1);
        dump($obj3->whichCommentsReply);

        $obj4=Comment::find(4);
        dump($obj4->WhichPostsComment);
    }
}
