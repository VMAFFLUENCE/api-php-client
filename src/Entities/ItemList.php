<?php

namespace SimaLand\API\Entities;

use SimaLand\API\AbstractList;
use SimaLand\API\Rest\Request;

class ItemList extends AbstractList
{
    /**
     * @var string
     */
    public $keyThreads = 'id-mf';

    /**
     * @return string
     */
    function getEntity()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function assignPage(Request &$request, $item = null)
    {
        $lastId = 0;
        if ($item) {
            $lastId = (int) $item['id'];
        }
        if (!is_array($request->getParams)) {
            $request->getParams = (array) $request->getParams;
        }
        if ($lastId > 0) {
            $request->getParams[$this->keyThreads] = $lastId;
        }
    }

    /**
     * @inheritdoc
     */
    public function assignThreadsNumber(Request &$request, $number = 0)
    {
        if (!is_array($request->getParams)) {
            $request->getParams = (array) $request->getParams;
        }
        $request->getParams[$this->keyThreads] = "{$this->countThreads},$number";
    }
}