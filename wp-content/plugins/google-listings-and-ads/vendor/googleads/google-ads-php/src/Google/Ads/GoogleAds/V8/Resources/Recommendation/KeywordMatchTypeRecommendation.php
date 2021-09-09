<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V8\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The keyword match type recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.resources.Recommendation.KeywordMatchTypeRecommendation</code>
 */
class KeywordMatchTypeRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The existing keyword where the match type should be more broad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.KeywordInfo keyword = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $keyword = null;
    /**
     * Output only. The recommended new match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.KeywordMatchTypeEnum.KeywordMatchType recommended_match_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $recommended_match_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V8\Common\KeywordInfo $keyword
     *           Output only. The existing keyword where the match type should be more broad.
     *     @type int $recommended_match_type
     *           Output only. The recommended new match type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The existing keyword where the match type should be more broad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.KeywordInfo keyword = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V8\Common\KeywordInfo|null
     */
    public function getKeyword()
    {
        return isset($this->keyword) ? $this->keyword : null;
    }

    public function hasKeyword()
    {
        return isset($this->keyword);
    }

    public function clearKeyword()
    {
        unset($this->keyword);
    }

    /**
     * Output only. The existing keyword where the match type should be more broad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.common.KeywordInfo keyword = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V8\Common\KeywordInfo $var
     * @return $this
     */
    public function setKeyword($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Common\KeywordInfo::class);
        $this->keyword = $var;

        return $this;
    }

    /**
     * Output only. The recommended new match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.KeywordMatchTypeEnum.KeywordMatchType recommended_match_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getRecommendedMatchType()
    {
        return $this->recommended_match_type;
    }

    /**
     * Output only. The recommended new match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.KeywordMatchTypeEnum.KeywordMatchType recommended_match_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setRecommendedMatchType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V8\Enums\KeywordMatchTypeEnum\KeywordMatchType::class);
        $this->recommended_match_type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeywordMatchTypeRecommendation::class, \Google\Ads\GoogleAds\V8\Resources\Recommendation_KeywordMatchTypeRecommendation::class);

