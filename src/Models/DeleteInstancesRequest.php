<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstancesRequest extends Model
{
    /**
     * @example delete_all
     *
     * @var string
     */
    public $backupRetainMode;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @example [”ob ob3f6yhv9uxxxx“]
     *
     * @var string
     */
    public $instanceIds;
    protected $_name = [
        'backupRetainMode' => 'BackupRetainMode',
        'dryRun'           => 'DryRun',
        'instanceIds'      => 'InstanceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupRetainMode) {
            $res['BackupRetainMode'] = $this->backupRetainMode;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupRetainMode'])) {
            $model->backupRetainMode = $map['BackupRetainMode'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        return $model;
    }
}
