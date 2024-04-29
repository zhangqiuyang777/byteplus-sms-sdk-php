<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_common.proto

namespace Byteplus\Service\Vod\Models\Business;

use UnexpectedValueException;

/**
 * Protobuf type <code>Byteplus.Vod.Models.Business.VodPlayInfoModelVersion</code>
 */
class VodPlayInfoModelVersion
{
    /**
     * 未定义的数据版本
     *
     * Generated from protobuf enum <code>UndefinedVodPlayInfoModelVersion = 0;</code>
     */
    const UndefinedVodPlayInfoModelVersion = 0;
    /**
     * Generated from protobuf enum <code>InternalV1VodPlayInfoModelVersion = 1;</code>
     */
    const InternalV1VodPlayInfoModelVersion = 1;
    /**
     * Generated from protobuf enum <code>InternalV2VodPlayInfoModelVersion = 2;</code>
     */
    const InternalV2VodPlayInfoModelVersion = 2;
    /**
     * Generated from protobuf enum <code>InternalV3VodPlayInfoModelVersion = 3;</code>
     */
    const InternalV3VodPlayInfoModelVersion = 3;
    /**
     * ToB第一版
     *
     * Generated from protobuf enum <code>ToBV1VodPlayInfoModelVersion = 4;</code>
     */
    const ToBV1VodPlayInfoModelVersion = 4;

    private static $valueToName = [
        self::UndefinedVodPlayInfoModelVersion => 'UndefinedVodPlayInfoModelVersion',
        self::InternalV1VodPlayInfoModelVersion => 'InternalV1VodPlayInfoModelVersion',
        self::InternalV2VodPlayInfoModelVersion => 'InternalV2VodPlayInfoModelVersion',
        self::InternalV3VodPlayInfoModelVersion => 'InternalV3VodPlayInfoModelVersion',
        self::ToBV1VodPlayInfoModelVersion => 'ToBV1VodPlayInfoModelVersion',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

