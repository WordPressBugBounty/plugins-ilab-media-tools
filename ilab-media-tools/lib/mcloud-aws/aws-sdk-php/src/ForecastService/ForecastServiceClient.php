<?php

namespace MediaCloud\Vendor\Aws\ForecastService;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Forecast Service** service.
 * @method \MediaCloud\Vendor\Aws\Result createAutoPredictor(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createAutoPredictorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createDataset(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createDatasetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createDatasetGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createDatasetGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createDatasetImportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createDatasetImportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createExplainability(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createExplainabilityAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createExplainabilityExport(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createExplainabilityExportAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createForecast(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createForecastAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createForecastExportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createForecastExportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createPredictor(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createPredictorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createPredictorBacktestExportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createPredictorBacktestExportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteDataset(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteDatasetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteDatasetGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteDatasetGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteDatasetImportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteDatasetImportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteExplainability(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteExplainabilityAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteExplainabilityExport(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteExplainabilityExportAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteForecast(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteForecastAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteForecastExportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteForecastExportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deletePredictor(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deletePredictorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deletePredictorBacktestExportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deletePredictorBacktestExportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteResourceTree(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteResourceTreeAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAutoPredictor(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAutoPredictorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeDataset(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeDatasetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeDatasetGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeDatasetGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeDatasetImportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeDatasetImportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeExplainability(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeExplainabilityAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeExplainabilityExport(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeExplainabilityExportAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeForecast(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeForecastAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeForecastExportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeForecastExportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describePredictor(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describePredictorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describePredictorBacktestExportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describePredictorBacktestExportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getAccuracyMetrics(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getAccuracyMetricsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDatasetGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDatasetGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDatasetImportJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDatasetImportJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDatasets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDatasetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listExplainabilities(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listExplainabilitiesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listExplainabilityExports(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listExplainabilityExportsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listForecastExportJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listForecastExportJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listForecasts(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listForecastsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPredictorBacktestExportJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPredictorBacktestExportJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPredictors(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPredictorsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateDatasetGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateDatasetGroupAsync(array $args = [])
 */
class ForecastServiceClient extends AwsClient {}
