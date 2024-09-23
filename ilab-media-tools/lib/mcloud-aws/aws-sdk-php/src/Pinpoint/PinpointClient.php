<?php

namespace MediaCloud\Vendor\Aws\Pinpoint;
use MediaCloud\Vendor\Aws\Api\ApiProvider;
use MediaCloud\Vendor\Aws\Api\DocModel;
use MediaCloud\Vendor\Aws\Api\Service;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Pinpoint** service.
 * @method \MediaCloud\Vendor\Aws\Result createApp(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createAppAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createCampaign(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createCampaignAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createEmailTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createEmailTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createExportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createExportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createImportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createImportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createInAppTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createInAppTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createJourney(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createJourneyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createPushTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createPushTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createRecommenderConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createRecommenderConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createSegment(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createSegmentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createSmsTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createSmsTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createVoiceTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createVoiceTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteAdmChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteAdmChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteApnsChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteApnsChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteApnsSandboxChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteApnsSandboxChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteApnsVoipChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteApnsVoipChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteApnsVoipSandboxChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteApnsVoipSandboxChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteApp(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteAppAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteBaiduChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteBaiduChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteCampaign(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteCampaignAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteEmailChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteEmailChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteEmailTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteEmailTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteEndpoint(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteEndpointAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteEventStream(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteEventStreamAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteGcmChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteGcmChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteInAppTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteInAppTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteJourney(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteJourneyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deletePushTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deletePushTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRecommenderConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRecommenderConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSegment(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSegmentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSmsChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSmsChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSmsTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSmsTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteUserEndpoints(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteUserEndpointsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteVoiceChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteVoiceChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteVoiceTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteVoiceTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getAdmChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getAdmChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getApnsChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getApnsChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getApnsSandboxChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getApnsSandboxChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getApnsVoipChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getApnsVoipChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getApnsVoipSandboxChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getApnsVoipSandboxChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getApp(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getAppAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getApplicationDateRangeKpi(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getApplicationDateRangeKpiAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getApplicationSettings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getApplicationSettingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getApps(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getAppsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getBaiduChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getBaiduChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCampaign(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCampaignAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCampaignActivities(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCampaignActivitiesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCampaignDateRangeKpi(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCampaignDateRangeKpiAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCampaignVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCampaignVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCampaignVersions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCampaignVersionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCampaigns(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCampaignsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getChannels(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getChannelsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getEmailChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getEmailChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getEmailTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getEmailTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getUserEndpoint(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getUserEndpointAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getEventStream(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getEventStreamAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getExportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getExportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getExportJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getExportJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getGcmChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getGcmChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getImportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getImportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getImportJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getImportJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getInAppMessages(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getInAppMessagesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getInAppTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getInAppTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getJourney(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getJourneyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getJourneyDateRangeKpi(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getJourneyDateRangeKpiAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getJourneyExecutionActivityMetrics(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getJourneyExecutionActivityMetricsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getJourneyExecutionMetrics(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getJourneyExecutionMetricsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getPushTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getPushTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getRecommenderConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getRecommenderConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getRecommenderConfigurations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getRecommenderConfigurationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSegment(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSegmentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSegmentExportJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSegmentExportJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSegmentImportJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSegmentImportJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSegmentVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSegmentVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSegmentVersions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSegmentVersionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSegments(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSegmentsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSmsChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSmsChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSmsTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSmsTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getUserEndpoints(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getUserEndpointsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getVoiceChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getVoiceChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getVoiceTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getVoiceTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listJourneys(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listJourneysAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTemplateVersions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTemplateVersionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTemplates(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTemplatesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result phoneNumberValidate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise phoneNumberValidateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putEventStream(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putEventStreamAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putEvents(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putEventsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result removeAttributes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise removeAttributesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result sendMessages(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise sendMessagesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result sendOTPMessage(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise sendOTPMessageAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result sendUsersMessages(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise sendUsersMessagesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateAdmChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateAdmChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateApnsChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateApnsChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateApnsSandboxChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateApnsSandboxChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateApnsVoipChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateApnsVoipChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateApnsVoipSandboxChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateApnsVoipSandboxChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateApplicationSettings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateApplicationSettingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateBaiduChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateBaiduChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateCampaign(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateCampaignAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateEmailChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateEmailChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateEmailTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateEmailTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateUserEndpoint(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateUserEndpointAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateUserEndpointsBatch(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateUserEndpointsBatchAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateGcmChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateGcmChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateInAppTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateInAppTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateJourney(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateJourneyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateJourneyState(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateJourneyStateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updatePushTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updatePushTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateRecommenderConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateRecommenderConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateSegment(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateSegmentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateSmsChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateSmsChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateSmsTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateSmsTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateTemplateActiveVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateTemplateActiveVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateVoiceChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateVoiceChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateVoiceTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateVoiceTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result verifyOTPMessage(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise verifyOTPMessageAsync(array $args = [])
 */
class PinpointClient extends AwsClient {}