<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantUsersResponseBody\tenantUsers;

use AlibabaCloud\Tea\Model;

class databases extends Model
{
    /**
     * @description The name of the database (MySQL mode) or schema (Oracle mode).
     *
     * @example db_pay1
     *
     * @var string
     */
    public $database;

    /**
     * @description The role of the account.
     * > <br>By default, an Oracle account has the read and write privileges on its own schema, which are not listed here.
     * @example ReadOnly
     *
     * @var string
     */
    public $role;

    /**
     * @description The name of the table.
     *
     * @example tbl_pay1
     *
     * @var string
     */
    public $table;
    protected $_name = [
        'database' => 'Database',
        'role'     => 'Role',
        'table'    => 'Table',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->table) {
            $res['Table'] = $this->table;
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
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }

        return $model;
    }
}
