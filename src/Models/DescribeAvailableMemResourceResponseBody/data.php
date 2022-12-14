<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableMemResourceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $maxMem;

    /**
     * @var int
     */
    public $minMem;

    /**
     * @var int
     */
    public $usedMem;
    protected $_name = [
        'maxMem'  => 'MaxMem',
        'minMem'  => 'MinMem',
        'usedMem' => 'UsedMem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxMem) {
            $res['MaxMem'] = $this->maxMem;
        }
        if (null !== $this->minMem) {
            $res['MinMem'] = $this->minMem;
        }
        if (null !== $this->usedMem) {
            $res['UsedMem'] = $this->usedMem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxMem'])) {
            $model->maxMem = $map['MaxMem'];
        }
        if (isset($map['MinMem'])) {
            $model->minMem = $map['MinMem'];
        }
        if (isset($map['UsedMem'])) {
            $model->usedMem = $map['UsedMem'];
        }

        return $model;
    }
}
