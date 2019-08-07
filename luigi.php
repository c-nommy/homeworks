
<?php
require_once('mario.php');
//継承
class Brother extends Nintendo
{ 
    public $mariobrothers = 'ストーリーが止まる';

}
$prince = new Brother('姫(継承)');
//オーバーライド
echo $prince->mariobrothers;

echo $prince->getName();
?>
