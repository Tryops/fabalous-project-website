<?php

require_once 'clockify_keys.php';

/**
 * Fetches the total hours tracked in the clockify workspace via the clockify api
 * @return int total tracked hours
 */
function fetchTotalHours() {
    global $workspace_id, $clockify_api_key; // from keys.php
    
    $url = 'https://reports.api.clockify.me/v1/workspaces/'.$workspace_id.'/reports/summary';
    $payload = '{"dateRangeStart": "2021-04-01T00:00:00.000","dateRangeEnd": "2022-04-01T23:59:59.000","summaryFilter": {"groups": ["USER","PROJECT","TIMEENTRY"]}}';
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json', 'X-Api-Key: '.$clockify_api_key]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    $total_time = json_decode($result)->totals[0]->totalTime; // total time in seconds

    return round($total_time/60/60); // total time in hours
}

// echo fetchTotalHours() ?? 200;

?>