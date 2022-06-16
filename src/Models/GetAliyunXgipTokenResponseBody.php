<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models;

use AlibabaCloud\Tea\Model;

class GetAliyunXgipTokenResponseBody extends Model
{
    /**
     * @description 结果码
     *
     * @var string
     */
    public $code;

    /**
     * @description 结果
     *
     * @var string
     */
    public $data;

    /**
     * @description 结果描述
     *
     * @var string
     */
    public $message;

    /**
     * @description 请求链路ID，如POP请求进来的requestId，返回时原样返回
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 服务端处理耗时，ms
     *
     * @var int
     */
    public $rt;

    /**
     * @description 是否成功
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'rt'        => 'Rt',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rt) {
            $res['Rt'] = $this->rt;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAliyunXgipTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Rt'])) {
            $model->rt = $map['Rt'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
