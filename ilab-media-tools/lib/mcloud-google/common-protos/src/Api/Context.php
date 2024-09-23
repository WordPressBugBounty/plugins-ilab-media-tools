<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/context.proto

namespace MediaCloud\Vendor\Google\Api;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * `Context` defines which contexts an API requests.
 * Example:
 *     context:
 *       rules:
 *       - selector: "*"
 *         requested:
 *         - google.rpc.context.ProjectContext
 *         - google.rpc.context.OriginContext
 * The above specifies that all methods in the API request
 * `google.rpc.context.ProjectContext` and
 * `google.rpc.context.OriginContext`.
 * Available context types are defined in package
 * `google.rpc.context`.
 *
 * Generated from protobuf message <code>google.api.Context</code>
 */
class Context extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    /**
     * A list of RPC context rules that apply to individual API methods.
     * **NOTE:** All service configuration rules follow "last one wins" order.
     *
     * Generated from protobuf field <code>repeated .google.api.ContextRule rules = 1;</code>
     */
    private $rules;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MediaCloud\Vendor\Google\Api\ContextRule[]|\Google\Protobuf\Internal\RepeatedField $rules
     *           A list of RPC context rules that apply to individual API methods.
     *           **NOTE:** All service configuration rules follow "last one wins" order.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Api\Context::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of RPC context rules that apply to individual API methods.
     * **NOTE:** All service configuration rules follow "last one wins" order.
     *
     * Generated from protobuf field <code>repeated .google.api.ContextRule rules = 1;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * A list of RPC context rules that apply to individual API methods.
     * **NOTE:** All service configuration rules follow "last one wins" order.
     *
     * Generated from protobuf field <code>repeated .google.api.ContextRule rules = 1;</code>
     * @param \MediaCloud\Vendor\Google\Api\ContextRule[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \MediaCloud\Vendor\Google\Protobuf\Internal\GPBType::MESSAGE, \MediaCloud\Vendor\Google\Api\ContextRule::class);
        $this->rules = $arr;

        return $this;
    }

}

