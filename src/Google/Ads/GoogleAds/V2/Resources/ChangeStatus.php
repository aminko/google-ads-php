<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/change_status.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the status of returned resource.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.ChangeStatus</code>
 */
class ChangeStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the change status.
     * Change status resource names have the form:
     * `customers/{customer_id}/changeStatus/{change_status_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * Time at which the most recent change has occurred on this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue last_change_date_time = 3;</code>
     */
    protected $last_change_date_time = null;
    /**
     * Represents the type of the changed resource. This dictates what fields
     * will be set. For example, for AD_GROUP, campaign and ad_group fields will
     * be set.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ChangeStatusResourceTypeEnum.ChangeStatusResourceType resource_type = 4;</code>
     */
    protected $resource_type = 0;
    /**
     * The Campaign affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 5;</code>
     */
    protected $campaign = null;
    /**
     * The AdGroup affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 6;</code>
     */
    protected $ad_group = null;
    /**
     * Represents the status of the changed resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ChangeStatusOperationEnum.ChangeStatusOperation resource_status = 8;</code>
     */
    protected $resource_status = 0;
    /**
     * The AdGroupAd affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 9;</code>
     */
    protected $ad_group_ad = null;
    /**
     * The AdGroupCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 10;</code>
     */
    protected $ad_group_criterion = null;
    /**
     * The CampaignCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_criterion = 11;</code>
     */
    protected $campaign_criterion = null;
    /**
     * The Feed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 12;</code>
     */
    protected $feed = null;
    /**
     * The FeedItem affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_item = 13;</code>
     */
    protected $feed_item = null;
    /**
     * The AdGroupFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_feed = 14;</code>
     */
    protected $ad_group_feed = null;
    /**
     * The CampaignFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_feed = 15;</code>
     */
    protected $campaign_feed = null;
    /**
     * The AdGroupBidModifier affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_bid_modifier = 16;</code>
     */
    protected $ad_group_bid_modifier = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the change status.
     *           Change status resource names have the form:
     *           `customers/{customer_id}/changeStatus/{change_status_id}`
     *     @type \Google\Protobuf\StringValue $last_change_date_time
     *           Time at which the most recent change has occurred on this resource.
     *     @type int $resource_type
     *           Represents the type of the changed resource. This dictates what fields
     *           will be set. For example, for AD_GROUP, campaign and ad_group fields will
     *           be set.
     *     @type \Google\Protobuf\StringValue $campaign
     *           The Campaign affected by this change.
     *     @type \Google\Protobuf\StringValue $ad_group
     *           The AdGroup affected by this change.
     *     @type int $resource_status
     *           Represents the status of the changed resource.
     *     @type \Google\Protobuf\StringValue $ad_group_ad
     *           The AdGroupAd affected by this change.
     *     @type \Google\Protobuf\StringValue $ad_group_criterion
     *           The AdGroupCriterion affected by this change.
     *     @type \Google\Protobuf\StringValue $campaign_criterion
     *           The CampaignCriterion affected by this change.
     *     @type \Google\Protobuf\StringValue $feed
     *           The Feed affected by this change.
     *     @type \Google\Protobuf\StringValue $feed_item
     *           The FeedItem affected by this change.
     *     @type \Google\Protobuf\StringValue $ad_group_feed
     *           The AdGroupFeed affected by this change.
     *     @type \Google\Protobuf\StringValue $campaign_feed
     *           The CampaignFeed affected by this change.
     *     @type \Google\Protobuf\StringValue $ad_group_bid_modifier
     *           The AdGroupBidModifier affected by this change.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\ChangeStatus::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the change status.
     * Change status resource names have the form:
     * `customers/{customer_id}/changeStatus/{change_status_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the change status.
     * Change status resource names have the form:
     * `customers/{customer_id}/changeStatus/{change_status_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Time at which the most recent change has occurred on this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue last_change_date_time = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLastChangeDateTime()
    {
        return $this->last_change_date_time;
    }

    /**
     * Returns the unboxed value from <code>getLastChangeDateTime()</code>

     * Time at which the most recent change has occurred on this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue last_change_date_time = 3;</code>
     * @return string|null
     */
    public function getLastChangeDateTimeUnwrapped()
    {
        return $this->readWrapperValue("last_change_date_time");
    }

    /**
     * Time at which the most recent change has occurred on this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue last_change_date_time = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLastChangeDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->last_change_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Time at which the most recent change has occurred on this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue last_change_date_time = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLastChangeDateTimeUnwrapped($var)
    {
        $this->writeWrapperValue("last_change_date_time", $var);
        return $this;}

    /**
     * Represents the type of the changed resource. This dictates what fields
     * will be set. For example, for AD_GROUP, campaign and ad_group fields will
     * be set.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ChangeStatusResourceTypeEnum.ChangeStatusResourceType resource_type = 4;</code>
     * @return int
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * Represents the type of the changed resource. This dictates what fields
     * will be set. For example, for AD_GROUP, campaign and ad_group fields will
     * be set.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ChangeStatusResourceTypeEnum.ChangeStatusResourceType resource_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setResourceType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\ChangeStatusResourceTypeEnum_ChangeStatusResourceType::class);
        $this->resource_type = $var;

        return $this;
    }

    /**
     * The Campaign affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Returns the unboxed value from <code>getCampaign()</code>

     * The Campaign affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 5;</code>
     * @return string|null
     */
    public function getCampaignUnwrapped()
    {
        return $this->readWrapperValue("campaign");
    }

    /**
     * The Campaign affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->campaign = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The Campaign affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCampaignUnwrapped($var)
    {
        $this->writeWrapperValue("campaign", $var);
        return $this;}

    /**
     * The AdGroup affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroup()
    {
        return $this->ad_group;
    }

    /**
     * Returns the unboxed value from <code>getAdGroup()</code>

     * The AdGroup affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 6;</code>
     * @return string|null
     */
    public function getAdGroupUnwrapped()
    {
        return $this->readWrapperValue("ad_group");
    }

    /**
     * The AdGroup affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The AdGroup affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 6;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group", $var);
        return $this;}

    /**
     * Represents the status of the changed resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ChangeStatusOperationEnum.ChangeStatusOperation resource_status = 8;</code>
     * @return int
     */
    public function getResourceStatus()
    {
        return $this->resource_status;
    }

    /**
     * Represents the status of the changed resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ChangeStatusOperationEnum.ChangeStatusOperation resource_status = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setResourceStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\ChangeStatusOperationEnum_ChangeStatusOperation::class);
        $this->resource_status = $var;

        return $this;
    }

    /**
     * The AdGroupAd affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 9;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroupAd()
    {
        return $this->ad_group_ad;
    }

    /**
     * Returns the unboxed value from <code>getAdGroupAd()</code>

     * The AdGroupAd affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 9;</code>
     * @return string|null
     */
    public function getAdGroupAdUnwrapped()
    {
        return $this->readWrapperValue("ad_group_ad");
    }

    /**
     * The AdGroupAd affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 9;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroupAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group_ad = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The AdGroupAd affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 9;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupAdUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group_ad", $var);
        return $this;}

    /**
     * The AdGroupCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 10;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroupCriterion()
    {
        return $this->ad_group_criterion;
    }

    /**
     * Returns the unboxed value from <code>getAdGroupCriterion()</code>

     * The AdGroupCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 10;</code>
     * @return string|null
     */
    public function getAdGroupCriterionUnwrapped()
    {
        return $this->readWrapperValue("ad_group_criterion");
    }

    /**
     * The AdGroupCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 10;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroupCriterion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group_criterion = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The AdGroupCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 10;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupCriterionUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group_criterion", $var);
        return $this;}

    /**
     * The CampaignCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_criterion = 11;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaignCriterion()
    {
        return $this->campaign_criterion;
    }

    /**
     * Returns the unboxed value from <code>getCampaignCriterion()</code>

     * The CampaignCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_criterion = 11;</code>
     * @return string|null
     */
    public function getCampaignCriterionUnwrapped()
    {
        return $this->readWrapperValue("campaign_criterion");
    }

    /**
     * The CampaignCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_criterion = 11;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaignCriterion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->campaign_criterion = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The CampaignCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_criterion = 11;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCampaignCriterionUnwrapped($var)
    {
        $this->writeWrapperValue("campaign_criterion", $var);
        return $this;}

    /**
     * The Feed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 12;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getFeed()
    {
        return $this->feed;
    }

    /**
     * Returns the unboxed value from <code>getFeed()</code>

     * The Feed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 12;</code>
     * @return string|null
     */
    public function getFeedUnwrapped()
    {
        return $this->readWrapperValue("feed");
    }

    /**
     * The Feed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 12;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->feed = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The Feed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 12;</code>
     * @param string|null $var
     * @return $this
     */
    public function setFeedUnwrapped($var)
    {
        $this->writeWrapperValue("feed", $var);
        return $this;}

    /**
     * The FeedItem affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_item = 13;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getFeedItem()
    {
        return $this->feed_item;
    }

    /**
     * Returns the unboxed value from <code>getFeedItem()</code>

     * The FeedItem affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_item = 13;</code>
     * @return string|null
     */
    public function getFeedItemUnwrapped()
    {
        return $this->readWrapperValue("feed_item");
    }

    /**
     * The FeedItem affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_item = 13;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->feed_item = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The FeedItem affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_item = 13;</code>
     * @param string|null $var
     * @return $this
     */
    public function setFeedItemUnwrapped($var)
    {
        $this->writeWrapperValue("feed_item", $var);
        return $this;}

    /**
     * The AdGroupFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_feed = 14;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroupFeed()
    {
        return $this->ad_group_feed;
    }

    /**
     * Returns the unboxed value from <code>getAdGroupFeed()</code>

     * The AdGroupFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_feed = 14;</code>
     * @return string|null
     */
    public function getAdGroupFeedUnwrapped()
    {
        return $this->readWrapperValue("ad_group_feed");
    }

    /**
     * The AdGroupFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_feed = 14;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroupFeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group_feed = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The AdGroupFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_feed = 14;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupFeedUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group_feed", $var);
        return $this;}

    /**
     * The CampaignFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_feed = 15;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaignFeed()
    {
        return $this->campaign_feed;
    }

    /**
     * Returns the unboxed value from <code>getCampaignFeed()</code>

     * The CampaignFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_feed = 15;</code>
     * @return string|null
     */
    public function getCampaignFeedUnwrapped()
    {
        return $this->readWrapperValue("campaign_feed");
    }

    /**
     * The CampaignFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_feed = 15;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaignFeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->campaign_feed = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The CampaignFeed affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_feed = 15;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCampaignFeedUnwrapped($var)
    {
        $this->writeWrapperValue("campaign_feed", $var);
        return $this;}

    /**
     * The AdGroupBidModifier affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_bid_modifier = 16;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroupBidModifier()
    {
        return $this->ad_group_bid_modifier;
    }

    /**
     * Returns the unboxed value from <code>getAdGroupBidModifier()</code>

     * The AdGroupBidModifier affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_bid_modifier = 16;</code>
     * @return string|null
     */
    public function getAdGroupBidModifierUnwrapped()
    {
        return $this->readWrapperValue("ad_group_bid_modifier");
    }

    /**
     * The AdGroupBidModifier affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_bid_modifier = 16;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroupBidModifier($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group_bid_modifier = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The AdGroupBidModifier affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_bid_modifier = 16;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupBidModifierUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group_bid_modifier", $var);
        return $this;}

}

