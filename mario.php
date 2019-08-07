<?php
// require_once('luigi.php');
// require_once('status.php');
class Nintendo
{
    //プロパティ(性格、性質)・クラス内の変数　$name
    //プロパティのアクセス権をプライベート
    protected $name;
    public $skill;
    public $status;
    public $skill_name;
    public $status_name;
    public $mariobrothers;

   
    //コンストラクタ(メソッド) ＝ インスタンス化時に自動で実施されるメソッド
    //引数　$name
    public function __construct($name) {
        //this＝メソッドを呼び出しているインスタンスのこと
        //インスタンスのnameプロパティに値をセットしている
        $this->name = $name;
    }


    //getNameという特定のメソッド nameを取得
    //this->name インスタンス名のnameプロパティ
    //return＝戻り値（関数の処理結果を返す）
    public function getName() 
    {
        return $this->name;
    }

    
}
//marioをインスタンス化
//luigiはBrotherクラスからインスタンス
//インスタンス（Nintendo) プロパティ(mario/luigi)
$mario = new Nintendo('マリオ');
$luigi = new Nintendo('ルイージ');
$peach = new Nintendo('ピーチ');
$koopa = new Nintendo('クッパ');
$sk = new Nintendo('スキル');
$st = new Nintendo('ステータス');
$mbs =new Nintendo('ストーリー');

$mbs->mariobrothers ='ストーリーが始まる';
$sk->skill= '必殺技';
$st->status = 'ステータス';
$mario->skill_name= 'ファイヤボール';
$mario->status_name = 'バカ強い';
$luigi->skill_name= 'ドリルキック';
$luigi->status_name = '中の下';
//$prince->prince ='囚われピーチ';

echo $mbs->mariobrothers;
echo '<br>'.'<br>'.'<br>';
echo 'メインキャラクター：'.$mario->getName();
echo '<br>';
echo 'サブキャラクター：'.$luigi->getName();
echo '<br>';
echo 'プリンス：'.$peach->getName();
echo '<br>';
echo 'エネミー：'.$koopa->getName();
echo '<br>'.'<br>'.'<br>';
echo $mario->getName();
echo '<br>';
echo $st->status.':'.$mario->status_name;
echo '<br>';
echo $sk->skill.':'.$mario->skill_name;
echo '<br>'.'<br>';
echo $luigi->getName();
echo '<br>';
echo $st->status.':'.$luigi->status_name;
echo '<br>';
echo $sk->skill.':'.$luigi->skill_name;
echo '<br>'.'<br>';

echo $peach->getName();
?>