<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class ImageBlindPicWatermarkRequest extends Model
{
    /**
     * @example encode_pic
     *
     * @var string
     */
    public $functionType;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xxxxx.jpg
     *
     * @var string
     */
    public $logoURL;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xxxxx.jpg
     *
     * @var string
     */
    public $originImageURL;

    /**
     * @example jpg
     *
     * @var string
     */
    public $outputFileType;

    /**
     * @example 100
     *
     * @var int
     */
    public $qualityFactor;

    /**
     * @example https://viapi-doc.oss-cn-shanghai.aliyuncs.com/imageenhan/xxxxx.jpg
     *
     * @var string
     */
    public $watermarkImageURL;
    protected $_name = [
        'functionType'      => 'FunctionType',
        'logoURL'           => 'LogoURL',
        'originImageURL'    => 'OriginImageURL',
        'outputFileType'    => 'OutputFileType',
        'qualityFactor'     => 'QualityFactor',
        'watermarkImageURL' => 'WatermarkImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
        }
        if (null !== $this->logoURL) {
            $res['LogoURL'] = $this->logoURL;
        }
        if (null !== $this->originImageURL) {
            $res['OriginImageURL'] = $this->originImageURL;
        }
        if (null !== $this->outputFileType) {
            $res['OutputFileType'] = $this->outputFileType;
        }
        if (null !== $this->qualityFactor) {
            $res['QualityFactor'] = $this->qualityFactor;
        }
        if (null !== $this->watermarkImageURL) {
            $res['WatermarkImageURL'] = $this->watermarkImageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageBlindPicWatermarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
        }
        if (isset($map['LogoURL'])) {
            $model->logoURL = $map['LogoURL'];
        }
        if (isset($map['OriginImageURL'])) {
            $model->originImageURL = $map['OriginImageURL'];
        }
        if (isset($map['OutputFileType'])) {
            $model->outputFileType = $map['OutputFileType'];
        }
        if (isset($map['QualityFactor'])) {
            $model->qualityFactor = $map['QualityFactor'];
        }
        if (isset($map['WatermarkImageURL'])) {
            $model->watermarkImageURL = $map['WatermarkImageURL'];
        }

        return $model;
    }
}
