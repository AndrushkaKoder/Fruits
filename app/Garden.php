<?php

namespace app;


class Garden
{

    public $name; //Указать название дерева

    public $defaultCount; //Сколько деревьев в саду

    public $userCount; //Новое количество деревьев в саду

    public $fetusFromTree; //Сколько фруктов собрать с дерева

    public $treeArr = []; // Массив деревьев

    public $res = [];

    public static $allFruitsCount;

//==============================
    public function __construct($name, $userCount = null)
    {

        $this->name = $name;

        $this->userCount = $userCount;

        is_numeric($this->userCount) ? $this->defaultCount = $this->userCount :
            $this->defaultCount = $this->checkType();

        $this->treeArray();

        

    }
//==============================


    protected function checkType()
    {

      return $this->name === 'Яблоня'|| $this->name === 'яблоня' ? $this->defaultCount = 10 : $this->defaultCount = 15;

    }



    protected function treeArray(){

        for($i = 1; $i <= $this->defaultCount; $i++) {

                $this->treeArr[] = "$this->name $i";

        }

        echo "<div style='width: 50%; float: right'>";

        echo "<strong>Деревья: </strong>";

            foreach ($this->treeArr as $item){

                echo "<p>$item</p>";

                }

            echo "С этого дерева собрано : " . $this->getFetus() . " фруктов";
            echo "</div>";

        }


        protected function getFetus(){

            if($this->name === 'яблоня' || $this->name === 'Яблоня'){

                return $this->fetusFromTree = count($this->treeArr) * rand(40,50);

            } else {

               return $this->fetusFromTree = count($this->treeArr) * rand(0,20);
            }

        }








}
