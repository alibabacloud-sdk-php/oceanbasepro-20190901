<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIProjectsResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIProjectsResponseBody\data\transferMapping\databases;
use AlibabaCloud\Tea\Model;

class transferMapping extends Model
{
    /**
     * @description The table mapping in the source data source, which is a conventional mapping scheme and takes effect only when Mode is set to NORMAL.
     *
     * @var databases[]
     */
    public $databases;

    /**
     * @description The mapping type. Valid values: \"NORMAL\" and \"WHITE_AND_BLACK_LIST\".
     *
     * @example NORMAL
     *
     * @var string
     */
    public $mode;
    protected $_name = [
        'databases' => 'Databases',
        'mode'      => 'Mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databases) {
            $res['Databases'] = [];
            if (null !== $this->databases && \is_array($this->databases)) {
                $n = 0;
                foreach ($this->databases as $item) {
                    $res['Databases'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transferMapping
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = [];
                $n                = 0;
                foreach ($map['Databases'] as $item) {
                    $model->databases[$n++] = null !== $item ? databases::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
