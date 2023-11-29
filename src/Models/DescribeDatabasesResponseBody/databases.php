<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDatabasesResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDatabasesResponseBody\databases\tables;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDatabasesResponseBody\databases\users;
use AlibabaCloud\Tea\Model;

class databases extends Model
{
    /**
     * @example utf8mb4_general_ci
     *
     * @var string
     */
    public $collation;

    /**
     * @description Specifies whether to return the information of tables in the database.
     * Default value: false.
     * @example 2022-02-21 15:41:06
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 5.67 GB
     *
     * @var float
     */
    public $dataSize;

    /**
     * @description The number of the page to return.
     * - Default value: 1
     * @example sms_pre
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The return result of the request.
     *
     * @example mysql
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The name of the database.
     *
     * @example test db
     *
     * @var string
     */
    public $description;

    /**
     * @description The status of the database. Valid values:
     * - DELETING: The database is being deleted.
     * @example utf8mb4
     *
     * @var string
     */
    public $encoding;

    /**
     * @example obsdh2f****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 0.00 GB
     *
     * @var float
     */
    public $requiredSize;

    /**
     * @description The list of databases in the tenant.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $status;

    /**
     * @var tables[]
     */
    public $tables;

    /**
     * @example t33h8y08k****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example tenantABC
     *
     * @var string
     */
    public $tenantName;

    /**
     * @description The name of the database table.
     *
     * @var users[]
     */
    public $users;
    protected $_name = [
        'collation'    => 'Collation',
        'createTime'   => 'CreateTime',
        'dataSize'     => 'DataSize',
        'databaseName' => 'DatabaseName',
        'dbType'       => 'DbType',
        'description'  => 'Description',
        'encoding'     => 'Encoding',
        'instanceId'   => 'InstanceId',
        'requiredSize' => 'RequiredSize',
        'status'       => 'Status',
        'tables'       => 'Tables',
        'tenantId'     => 'TenantId',
        'tenantName'   => 'TenantName',
        'users'        => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collation) {
            $res['Collation'] = $this->collation;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->encoding) {
            $res['Encoding'] = $this->encoding;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->requiredSize) {
            $res['RequiredSize'] = $this->requiredSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tables) {
            $res['Tables'] = [];
            if (null !== $this->tables && \is_array($this->tables)) {
                $n = 0;
                foreach ($this->tables as $item) {
                    $res['Tables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->users) {
            $res['Users'] = [];
            if (null !== $this->users && \is_array($this->users)) {
                $n = 0;
                foreach ($this->users as $item) {
                    $res['Users'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collation'])) {
            $model->collation = $map['Collation'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Encoding'])) {
            $model->encoding = $map['Encoding'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RequiredSize'])) {
            $model->requiredSize = $map['RequiredSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n             = 0;
                foreach ($map['Tables'] as $item) {
                    $model->tables[$n++] = null !== $item ? tables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n            = 0;
                foreach ($map['Users'] as $item) {
                    $model->users[$n++] = null !== $item ? users::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
