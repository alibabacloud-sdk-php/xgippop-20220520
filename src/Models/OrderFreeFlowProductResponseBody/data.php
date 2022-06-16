<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\OrderFreeFlowProductResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bizCode;

    /**
     * @description C端免流订单ID
     *
     * @var string
     */
    public $customerFlowOrderId;

    /**
     * @var string
     */
    public $customerFlowRequestId;

    /**
     * @description 执行中ordering、成功success、失败fail
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'bizCode'               => 'BizCode',
        'customerFlowOrderId'   => 'CustomerFlowOrderId',
        'customerFlowRequestId' => 'CustomerFlowRequestId',
        'status'                => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->customerFlowOrderId) {
            $res['CustomerFlowOrderId'] = $this->customerFlowOrderId;
        }
        if (null !== $this->customerFlowRequestId) {
            $res['CustomerFlowRequestId'] = $this->customerFlowRequestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['CustomerFlowOrderId'])) {
            $model->customerFlowOrderId = $map['CustomerFlowOrderId'];
        }
        if (isset($map['CustomerFlowRequestId'])) {
            $model->customerFlowRequestId = $map['CustomerFlowRequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
