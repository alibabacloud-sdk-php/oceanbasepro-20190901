<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTopSQLListResponseBody\topSQLList;
use AlibabaCloud\Tea\Model;

class DescribeTopSQLListResponseBody extends Model
{
    /**
     * @description Alibaba Cloud CLI
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The I/O wait time, in ms.
     *
     * @var topSQLList[]
     */
    public $topSQLList;

    /**
     * @description It is an online CLI tool that allows you to quickly retrieve and debug APIs. It can dynamically generate executable SDK code samples.
     *
     * @example 9
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'topSQLList' => 'TopSQLList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->topSQLList) {
            $res['TopSQLList'] = [];
            if (null !== $this->topSQLList && \is_array($this->topSQLList)) {
                $n = 0;
                foreach ($this->topSQLList as $item) {
                    $res['TopSQLList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTopSQLListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TopSQLList'])) {
            if (!empty($map['TopSQLList'])) {
                $model->topSQLList = [];
                $n                 = 0;
                foreach ($map['TopSQLList'] as $item) {
                    $model->topSQLList[$n++] = null !== $item ? topSQLList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
