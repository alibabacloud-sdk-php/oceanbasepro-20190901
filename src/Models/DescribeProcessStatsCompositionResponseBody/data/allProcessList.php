<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody\data;

use AlibabaCloud\Tea\Model;

class allProcessList extends Model
{
    /**
     * @description The IP address of the client.
     *
     * @example 127.*.*.*
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The type of command executed on the current session.
     *
     * @example Sleep
     *
     * @var string
     */
    public $command;

    /**
     * @description The CPU time.
     *
     * @example 257.943
     *
     * @var int
     */
    public $cpuTime;

    /**
     * @description The name of the database.
     *
     * @example database1
     *
     * @var string
     */
    public $database;

    /**
     * @description The execution time.
     *
     * @example 18.23
     *
     * @var int
     */
    public $executeTime;

    /**
     * @description The ID of the plan.
     *
     * @example af621fe01e064743bd37e7c9a41aa139
     *
     * @var string
     */
    public $planId;

    /**
     * @description The ID of the proxy session.
     *
     * @example ab***-********-90ab-c***-***********b
     *
     * @var string
     */
    public $proxySessId;

    /**
     * @description The IP address of the server.
     *
     * @example 127.*.*.*
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description The ID of the session.
     *
     * @example 1***************90L
     *
     * @var int
     */
    public $sessionId;

    /**
     * @description The ID of the SQL statement.
     *
     * @example 8D6E84****0B8FB1823D199E2CA1****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The SQL statement.
     *
     * @example SELECT * FROM table_name;
     *
     * @var string
     */
    public $sqlText;

    /**
     * @description The state of the session.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the tenant.
     *
     * @example t33h8y08k****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The ID of the trace.
     *
     * @example 3c6e****-cb**-11**-a5**-4201ac1****f
     *
     * @var string
     */
    public $traceId;

    /**
     * @description The username that you use to log in to the database.
     *
     * @example test1
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'clientIp'    => 'ClientIp',
        'command'     => 'Command',
        'cpuTime'     => 'CpuTime',
        'database'    => 'Database',
        'executeTime' => 'ExecuteTime',
        'planId'      => 'PlanId',
        'proxySessId' => 'ProxySessId',
        'serverIp'    => 'ServerIp',
        'sessionId'   => 'SessionId',
        'sqlId'       => 'SqlId',
        'sqlText'     => 'SqlText',
        'status'      => 'Status',
        'tenantId'    => 'TenantId',
        'traceId'     => 'TraceId',
        'user'        => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->cpuTime) {
            $res['CpuTime'] = $this->cpuTime;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->proxySessId) {
            $res['ProxySessId'] = $this->proxySessId;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->sqlText) {
            $res['SqlText'] = $this->sqlText;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allProcessList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['CpuTime'])) {
            $model->cpuTime = $map['CpuTime'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['ProxySessId'])) {
            $model->proxySessId = $map['ProxySessId'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['SqlText'])) {
            $model->sqlText = $map['SqlText'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
