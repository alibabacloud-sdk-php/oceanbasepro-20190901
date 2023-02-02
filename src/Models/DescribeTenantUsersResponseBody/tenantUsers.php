<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantUsersResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantUsersResponseBody\tenantUsers\databases;
use AlibabaCloud\Tea\Model;

class tenantUsers extends Model
{
    /**
     * @description The database privileges of the account.
     *
     * @var databases[]
     */
    public $databases;

    /**
     * @description The description of the database account.
     *
     * @example use for test
     *
     * @var string
     */
    public $description;

    /**
     * @example obshc32****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example tshfs3****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The name of the database account.
     *
     * @example pay_test
     *
     * @var string
     */
    public $userName;

    /**
     * @description The status of the database account. Valid values:
     * - NORMAL: The account is unlocked.
     * @example NORMAL
     *
     * @var string
     */
    public $userStatus;

    /**
     * @description The type of the database account. Valid values:
     * - NORMAL: a general account.
     * @example NORMAL
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'databases'   => 'Databases',
        'description' => 'Description',
        'instanceId'  => 'InstanceId',
        'tenantId'    => 'TenantId',
        'userName'    => 'UserName',
        'userStatus'  => 'UserStatus',
        'userType'    => 'UserType',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantUsers
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
