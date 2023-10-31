<?php

use App\Members;

require_once "Members.php";

$members=new Members();
//$rp=new ReflectionProperty("App\Members","detailInfo");
//echo "<hr>";
//echo $rp->getName();
//echo "<hr>";
$rp=new ReflectionParameter(['App\Members','getDetailInfo'],0);
echo "<hr>";
echo $rp->getType();
echo "<hr>";
echo $rp->isPassedByReference();
showData(get_class_methods($rp));

//$rc=new ReflectionClass('App\Members');
//echo $rc->getName();
//echo "<hr>";
//echo $rc->getShortName();
//echo "<hr>";
//echo $rc->getNamespaceName();
//echo "<hr>";
//echo $rc->hasMethod("getDetailInfo")?"shi dl":"ma shi woo";
//echo "<hr>";
//echo $rc->isTrait()?"It is Trait":"It is Not Trait";
//echo "<hr>";
//$rm=new ReflectionMethod("App\Members","__construct");
//echo $rm->isConstructor()?"Constructor":"Not Constructor";
//showData(get_class_methods($rm));
//echo $rm->isPublic()?"It is Public":"It is not public";
//echo "<hr>";
//echo $rm->isStatic()?"it is static":"it is not static";
//echo "<hr>";
//$rm->invoke($members);
//showData(get_class_methods($rc));
 function showData($ary){
    echo "<pre>".print_r($ary,true)."</pre>";

}