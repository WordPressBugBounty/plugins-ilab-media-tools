<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/geometry.proto

namespace MediaCloud\Vendor\GPBMetadata\Google\Cloud\Vision\V1;

class Geometry
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \MediaCloud\Vendor\Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        } \MediaCloud\Vendor\GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%google/cloud/vision/v1/geometry.protogoogle.cloud.vision.v1"
Vertex	
x (	
y ("(
NormalizedVertex	
x (	
y ("�
BoundingPoly0
vertices (2.google.cloud.vision.v1.VertexE
normalized_vertices (2(.google.cloud.vision.v1.NormalizedVertex"+
Position	
x (	
y (	
z (Bu
com.google.cloud.vision.v1B
GeometryProtoPZ<google.golang.org/genproto/googleapis/cloud/vision/v1;vision��GCVNbproto3'
        , true);

        static::$is_initialized = true;
    }
}
