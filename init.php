<?php 

require_once __DIR__ . '/vendor/autoload.php';

\Sentry\init([
  'dsn' => 'https://fd3f9fdaae5ef40ba0008b5c1705a931@o4508359032700928.ingest.de.sentry.io/4508648038465616',
]);

try {
  $this->functionFailsForSure();
} catch (\Throwable $exception) {
  \Sentry\captureException($exception);
}
