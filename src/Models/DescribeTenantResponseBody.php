<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant;
use AlibabaCloud\Tea\Model;

class DescribeTenantResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tenant
     */
    public $tenant;
    protected $_name = [
        'requestId' => 'RequestId',
        'tenant'    => 'Tenant',
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
        if (null !== $this->tenant) {
            $res['Tenant'] = null !== $this->tenant ? $this->tenant->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTenantResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Tenant'])) {
            $model->tenant = tenant::fromMap($map['Tenant']);
        }

        return $model;
    }
}
