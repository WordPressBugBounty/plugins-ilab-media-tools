<?php

namespace MediaCloud\Vendor\Aws\Budgets;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Budgets** service.
 * @method \MediaCloud\Vendor\Aws\Result createBudget(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createBudgetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createBudgetAction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createBudgetActionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createNotification(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createNotificationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createSubscriber(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createSubscriberAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteBudget(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteBudgetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteBudgetAction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteBudgetActionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteNotification(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteNotificationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSubscriber(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSubscriberAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeBudget(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeBudgetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeBudgetAction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeBudgetActionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeBudgetActionHistories(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeBudgetActionHistoriesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeBudgetActionsForAccount(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeBudgetActionsForAccountAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeBudgetActionsForBudget(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeBudgetActionsForBudgetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeBudgetNotificationsForAccount(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeBudgetNotificationsForAccountAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeBudgetPerformanceHistory(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeBudgetPerformanceHistoryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeBudgets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeBudgetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeNotificationsForBudget(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeNotificationsForBudgetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeSubscribersForNotification(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeSubscribersForNotificationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result executeBudgetAction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise executeBudgetActionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateBudget(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateBudgetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateBudgetAction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateBudgetActionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateNotification(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateNotificationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateSubscriber(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateSubscriberAsync(array $args = [])
 */
class BudgetsClient extends AwsClient {}
