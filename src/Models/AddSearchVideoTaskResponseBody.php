<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\SDK\Videosearch\V20200225\Models\AddSearchVideoTaskResponseBody\data;
use AlibabaCloud\Tea\Model;

class AddSearchVideoTaskResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @example 1ABBE852-6313-49F9-BF8A-6FDF9A4C0617
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSearchVideoTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}