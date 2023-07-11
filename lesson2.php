<?php
// 下記のようにlesson1のファイルをインポートしてください。
// (他のファイルを参照する関数はいくつかあるので調べてください。)
// (lesson1の文字列がそのまま出力されてしまっていても大丈夫とします。)
require_once 'lesson1.php';

// 下記のクラスを作成してください。

// Patient 
// lesson1からPersonを継承
class CompanyEmployee extends Person{
  public float $height;
  public float $weight;

// height: float 身長（ｍ）
// weight: float 体重 (kg)
function __construct($name, $age, $gender, $height,$weight){
  $this->name = $name;
  $this->age = $age;
  $this->gender = $gender;
  $this->height = $height;
  $this->weight = $weight;
}
// __construct(name: string, age:int, gender: string, height: float, weight: float)
// 名前、年齢、性別、身長、体重を受け取り初期化する。

public function calculateStandardWeight(){
  $aver = ($this->height * $this->height * 22);
  return $aver;
}
// calculateStandardWeight() :float
// 平均体重を返す （身長 × 身長 × 22)

public function getHeight(){
  return $this->name.'さんの身長は'.$this->height.'cmなので平均体重は'.$this->calculateStandardWeight().'kgです。';
}
// getHeight()
// 身長を返す

public function getWeight(){
  echo '現在の体重は'.$this->weight.'kgです。<br/>';
}
// getWeight()
// 体重を返す

// クラスが完成したら適当なインスタンスを生成し、
// それぞれの関数を使用して下記のフォーマットで出力してください。

// 〇〇さんの身長は〇〇mなので平均体重は〇〇kgです。 現在の体重は〇〇kgです。
}

$yamada = new CompanyEmployee('○○', 20, '○○',170,60);
echo $yamada->getHeight();
$yamada->getWeight();
