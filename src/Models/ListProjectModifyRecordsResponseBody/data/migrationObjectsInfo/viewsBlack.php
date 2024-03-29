<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\migrationObjectsInfo;

use AlibabaCloud\Tea\Model;

class viewsBlack extends Model
{
    /**
     * @example view_name
     *
     * @var string
     */
    public $name;

    /**
     * @example schema_name
     *
     * @var string
     */
    public $schema;
    protected $_name = [
        'name'   => 'Name',
        'schema' => 'Schema',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return viewsBlack
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        return $model;
    }
}
