<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/enums/policy_review_status.proto

namespace Google\Ads\GoogleAds\V0\Enums\PolicyReviewStatusEnum;

/**
 * The possible policy review statuses.
 *
 * Protobuf type <code>google.ads.googleads.v0.enums.PolicyReviewStatusEnum.PolicyReviewStatus</code>
 */
class PolicyReviewStatus
{
    /**
     * No value has been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received value is not known in this version.
     * This is a response-only value.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Currently under review.
     *
     * Generated from protobuf enum <code>REVIEW_IN_PROGRESS = 2;</code>
     */
    const REVIEW_IN_PROGRESS = 2;
    /**
     * Primary review complete. Other reviews may be continuing.
     *
     * Generated from protobuf enum <code>REVIEWED = 3;</code>
     */
    const REVIEWED = 3;
    /**
     * The resource has been resubmitted for approval or its policy decision has
     * been appealed.
     *
     * Generated from protobuf enum <code>UNDER_APPEAL = 4;</code>
     */
    const UNDER_APPEAL = 4;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PolicyReviewStatus::class, \Google\Ads\GoogleAds\V0\Enums\PolicyReviewStatusEnum_PolicyReviewStatus::class);
