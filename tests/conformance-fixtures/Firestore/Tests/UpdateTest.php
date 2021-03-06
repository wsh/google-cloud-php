<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: test.proto

namespace Tests;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A call to the form of DocumentRef.Update that represents the data as a map
 * or dictionary.
 * </pre>
 *
 * Protobuf type <code>tests.UpdateTest</code>
 */
class UpdateTest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * path of doc
     * </pre>
     *
     * <code>string doc_ref_path = 1;</code>
     */
    private $doc_ref_path = '';
    /**
     * <pre>
     * precondition in call, if any
     * </pre>
     *
     * <code>.google.firestore.v1beta1.Precondition precondition = 2;</code>
     */
    private $precondition = null;
    /**
     * <pre>
     * data (see CreateTest.json_data)
     * </pre>
     *
     * <code>string json_data = 3;</code>
     */
    private $json_data = '';
    /**
     * <pre>
     * expected request
     * </pre>
     *
     * <code>.google.firestore.v1beta1.CommitRequest request = 4;</code>
     */
    private $request = null;
    /**
     * <pre>
     * call signals an error
     * </pre>
     *
     * <code>bool is_error = 5;</code>
     */
    private $is_error = false;

    public function __construct() {
        \GPBMetadata\Test::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * path of doc
     * </pre>
     *
     * <code>string doc_ref_path = 1;</code>
     */
    public function getDocRefPath()
    {
        return $this->doc_ref_path;
    }

    /**
     * <pre>
     * path of doc
     * </pre>
     *
     * <code>string doc_ref_path = 1;</code>
     */
    public function setDocRefPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->doc_ref_path = $var;
    }

    /**
     * <pre>
     * precondition in call, if any
     * </pre>
     *
     * <code>.google.firestore.v1beta1.Precondition precondition = 2;</code>
     */
    public function getPrecondition()
    {
        return $this->precondition;
    }

    /**
     * <pre>
     * precondition in call, if any
     * </pre>
     *
     * <code>.google.firestore.v1beta1.Precondition precondition = 2;</code>
     */
    public function setPrecondition(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Firestore\V1beta1\Precondition::class);
        $this->precondition = $var;
    }

    /**
     * <pre>
     * data (see CreateTest.json_data)
     * </pre>
     *
     * <code>string json_data = 3;</code>
     */
    public function getJsonData()
    {
        return $this->json_data;
    }

    /**
     * <pre>
     * data (see CreateTest.json_data)
     * </pre>
     *
     * <code>string json_data = 3;</code>
     */
    public function setJsonData($var)
    {
        GPBUtil::checkString($var, True);
        $this->json_data = $var;
    }

    /**
     * <pre>
     * expected request
     * </pre>
     *
     * <code>.google.firestore.v1beta1.CommitRequest request = 4;</code>
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * <pre>
     * expected request
     * </pre>
     *
     * <code>.google.firestore.v1beta1.CommitRequest request = 4;</code>
     */
    public function setRequest(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Firestore\V1beta1\CommitRequest::class);
        $this->request = $var;
    }

    /**
     * <pre>
     * call signals an error
     * </pre>
     *
     * <code>bool is_error = 5;</code>
     */
    public function getIsError()
    {
        return $this->is_error;
    }

    /**
     * <pre>
     * call signals an error
     * </pre>
     *
     * <code>bool is_error = 5;</code>
     */
    public function setIsError($var)
    {
        GPBUtil::checkBool($var);
        $this->is_error = $var;
    }

}

