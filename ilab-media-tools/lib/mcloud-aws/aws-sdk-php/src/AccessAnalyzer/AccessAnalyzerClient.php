<?php

namespace MediaCloud\Vendor\Aws\AccessAnalyzer;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Access Analyzer** service.
 * @method \MediaCloud\Vendor\Aws\Result applyArchiveRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise applyArchiveRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result cancelPolicyGeneration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise cancelPolicyGenerationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createAccessPreview(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createAccessPreviewAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createAnalyzer(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createAnalyzerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createArchiveRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createArchiveRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteAnalyzer(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteAnalyzerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteArchiveRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteArchiveRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getAccessPreview(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getAccessPreviewAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getAnalyzedResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getAnalyzedResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getAnalyzer(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getAnalyzerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getArchiveRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getArchiveRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getFinding(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getFindingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getGeneratedPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getGeneratedPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAccessPreviewFindings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAccessPreviewFindingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAccessPreviews(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAccessPreviewsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAnalyzedResources(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAnalyzedResourcesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAnalyzers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAnalyzersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listArchiveRules(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listArchiveRulesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listFindings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listFindingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPolicyGenerations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPolicyGenerationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startPolicyGeneration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startPolicyGenerationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startResourceScan(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startResourceScanAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateArchiveRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateArchiveRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateFindings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateFindingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result validatePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise validatePolicyAsync(array $args = [])
 */
class AccessAnalyzerClient extends AwsClient {}
