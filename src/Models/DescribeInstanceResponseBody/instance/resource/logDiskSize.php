<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\resource;

use AlibabaCloud\Tea\Model;

class logDiskSize extends Model
{
    /**
     * @var int
     */
    public $totalDiskSize;

    /**
     * @var int
     */
    public $unitDiskSize;
    protected $_name = [
        'totalDiskSize' => 'TotalDiskSize',
        'unitDiskSize'  => 'UnitDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalDiskSize) {
            $res['TotalDiskSize'] = $this->totalDiskSize;
        }
        if (null !== $this->unitDiskSize) {
            $res['UnitDiskSize'] = $this->unitDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logDiskSize
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalDiskSize'])) {
            $model->totalDiskSize = $map['TotalDiskSize'];
        }
        if (isset($map['UnitDiskSize'])) {
            $model->unitDiskSize = $map['UnitDiskSize'];
        }

        return $model;
    }
}
