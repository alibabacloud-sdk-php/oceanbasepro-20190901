<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeSlowSQLHistoryListRequest extends Model
{
    /**
     * @description The number of RPCs.
     *
     * @example 2021-12-14T08:34:49Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The maximum response time.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of plan misses.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The wait time for network.
     *
     * @example 8D6E84735C0****1823D199E2CA1****
     *
     * @var string
     */
    public $SQLId;

    /**
     * @description The I/O wait time.
     *
     * @example 2021-12-14T02:34:49Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The ID of the tenant.
     *
     * @example t384tolsj****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'endTime'    => 'EndTime',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'SQLId'      => 'SQLId',
        'startTime'  => 'StartTime',
        'tenantId'   => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->SQLId) {
            $res['SQLId'] = $this->SQLId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlowSQLHistoryListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SQLId'])) {
            $model->SQLId = $map['SQLId'];
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
