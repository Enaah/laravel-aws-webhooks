<?php

Route::any('/ses', 'RenokiCo\AwsWebhooks\Test\Controllers\SesController@handle')
    ->name('ses');

Route::any('/cloudwatch', 'RenokiCo\AwsWebhooks\Test\Controllers\CloudwatchController@handle')
    ->name('cloudwatch');
