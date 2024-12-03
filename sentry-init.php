<?php
require_once __DIR__ . '/vendor/autoload.php';

\Sentry\init([
    'dsn' => 'https://4125cd0237959af9dce6fef6561ee257@o4508359032700928.ingest.de.sentry.io/4508363729272912',
    'logger' => new \Sentry\Logger\DebugFileLogger('./logfile.log'),
    // Specify a fixed sample rate
    'traces_sample_rate' => 1.0,
    // Set a sampling rate for profiling - this is relative to traces_sample_rate
    'profiles_sample_rate' => 1.0,
  ]);

