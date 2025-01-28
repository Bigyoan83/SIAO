<?php 

require_once __DIR__ . '/vendor/autoload.php';

Sentry\init([
    'dsn' => 'https://9770748e6476547680df98c12a4ebf15@o4508363333959680.ingest.de.sentry.io/4508363545575504',
    // Specify a fixed sample rate
    'traces_sample_rate' => 1.0,
    // Set a sampling rate for profiling - this is relative to traces_sample_rate
    'profiles_sample_rate' => 1.0,
    'logger' => new \Sentry\Logger\DebugFileLogger('./logfile.log'),
  ]); 



  try {
    $this->functionFailsForSure();
  } catch (\Throwable $exception) {
    echo("ok");
    \Sentry\captureException($exception);
    echo("test");
  }