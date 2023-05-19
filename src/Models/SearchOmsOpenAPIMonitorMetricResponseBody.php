<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIMonitorMetricResponseBody\data;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIMonitorMetricResponseBody\errorDetail;
use AlibabaCloud\Tea\Model;

class SearchOmsOpenAPIMonitorMetricResponseBody extends Model
{
    /**
     * @description The ID of the migration instance. Generally, if you want to create a project on a public cloud, you must first purchase a migration instance.
     *
     * @example The page number, which takes effect in a pagination query.
     *
     * @var string
     */
    public $advice;

    /**
     * @description The business data returned.
     *
     * @example INNER_ERROR
     *
     * @var string
     */
    public $code;

    /**
     * @description The request ID.
     *
     * @example 1
     *
     * @var string
     */
    public $cost;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @description A system error occurred.
     *
     * @var errorDetail
     */
    public $errorDetail;

    /**
     * @description The suggestions (old).
     *
     * @example Contact the administrator.
     *
     * @var string
     */
    public $message;

    /**
     * @description The error code (new).
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The page number, which takes effect in a pagination query.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The time spent in processing the request, in seconds.
     *
     * @example XCVSADGDFSGDFGFDGFDGDFGDFGDFGDFGDSGDS
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total count, which takes effect in a pagination query.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The error details.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'advice'      => 'Advice',
        'code'        => 'Code',
        'cost'        => 'Cost',
        'data'        => 'Data',
        'errorDetail' => 'ErrorDetail',
        'message'     => 'Message',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advice) {
            $res['Advice'] = $this->advice;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorDetail) {
            $res['ErrorDetail'] = null !== $this->errorDetail ? $this->errorDetail->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchOmsOpenAPIMonitorMetricResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Advice'])) {
            $model->advice = $map['Advice'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErrorDetail'])) {
            $model->errorDetail = errorDetail::fromMap($map['ErrorDetail']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
