<?php 

require_once __DIR__ . '/vendor/autoload.php';

<<<<<<< Updated upstream
\Sentry\init([
  'dsn' => 'https://fd3f9fdaae5ef40ba0008b5c1705a931@o4508359032700928.ingest.de.sentry.io/4508648038465616',
]);

try {
  $this->functionFailsForSure();
} catch (\Throwable $exception) {
  \Sentry\captureException($exception);
}
=======
Sentry\init([
    'dsn' => 'https://fd3f9fdaae5ef40ba0008b5c1705a931@o4508359032700928.ingest.de.sentry.io/4508648038465616',
    // Specify a fixed sample rate
    'traces_sample_rate' => 1.0,
    // Set a sampling rate for profiling - this is relative to traces_sample_rate
    'profiles_sample_rate' => 1.0,
    'logger' => new \Sentry\Logger\DebugFileLogger('./logfile.log'),
  ]); 
>>>>>>> Stashed changes
