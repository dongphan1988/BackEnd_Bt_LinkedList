<?php
include_once "Node.php";

class LinkList
{
    public $nodeFirt;
    public $nodelast;
    public $count;

    public function __construct()
    {
        $this->nodeFirt = NULL;
        $this->nodelast = NULL;
        $this->count = 0;
    }

    public function insertFirts($data)
    {
        $links = new Node($data);
        $links->next = $this->nodeFirt;
        $this->nodeFirt = $links;

        if ($this->nodelast == NULL) {
            $this->nodelast = $links;
        }

        $this->count++;
    }

    public function checkNode($_index, $linkedList)
    {
        $listData = $this->readLists();
        if ($_index >= 0 && $_index < count($listData)) {
            $dataNodeCheck = $listData[$_index];
            $nodeCheck = $linkedList->nodeFirt;
            for ($index = 0; $index < count($listData); $index++) {
                if ($nodeCheck->data == $dataNodeCheck) {
                    return $nodeCheck;
                } else {
                    $nodeCheck = $nodeCheck->next;
                }
            }
        }
        return false;

    }

    public function add($index, $dataNodeAdd, $linkedList)
    {

        $leftNodeCheck = $this->checkNode($index - 1, $linkedList);
        $nodeAdd = new Node($dataNodeAdd);
        $nodeAdd->next = $leftNodeCheck->next;
        $leftNodeCheck->next = $nodeAdd;

        $this->count++;
    }

    public function remove($index, $linkedList)
    {
        $nodeRemove = $this->checkNode($index, $linkedList);
        $nodeLeft = $this->checkNode($index - 1, $linkedList);
        $nodeRight = $this->checkNode($index + 1, $linkedList);
        $nodeRemove->next = NULL;
        $nodeLeft->next = $nodeRight;
        $this->count--;
    }

    public function insertLasts($data)
    {
        if ($this->nodelast != NULL) {
            $link = new Node($data);
            $this->nodelast->next = $link;
            $this->nodelast = $link;
            $this->count++;
        } else {
            $this->insertFirts($data);
        }
    }

    public function totalNodes()
    {
        return $this->count;
    }

    public function readLists()
    {
        $listData = array();
        $firts = $this->nodeFirt;
        while ($firts != NULL) {
            array_push($listData, $firts->readData());
            $firts = $firts->next;
        }
        return $listData;
    }

    public function indexOf($data, $linkedList)
    {
        $arrayData = $linkedList->readLists();
        for ($index = 0; $index < $this->count($arrayData); $index++) {
            if ($data == $arrayData[$index]) {
                return $index;
            }
        }
    }


    public function size()
    {
        return $this->count;
    }

    public function cloneObjec($linkedList)
    {
        $newObje = clone $linkedList;
        return $newObje;
    }
}