<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class DescribeOasSQLHistoryListRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var bool
     */
    public $dynamicSql;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nodeIp;

    /**
     * @var string
     */
    public $sqlId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'dbName' => 'DbName',
        'dynamicSql' => 'DynamicSql',
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'nodeIp' => 'NodeIp',
        'sqlId' => 'SqlId',
        'startTime' => 'StartTime',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->dynamicSql) {
            $res['DynamicSql'] = $this->dynamicSql;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nodeIp) {
            $res['NodeIp'] = $this->nodeIp;
        }

        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['DynamicSql'])) {
            $model->dynamicSql = $map['DynamicSql'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NodeIp'])) {
            $model->nodeIp = $map['NodeIp'];
        }

        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
