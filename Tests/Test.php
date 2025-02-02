<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class Test extends TestCase {

    public function test() {
        ob_start();
        include_once __DIR__ . '/../accueil/home.php';
        $output = ob_get_clean();

        $this->assertStringContainsString('Le SIAO 115', $output);
        $this->assertStringContainsString('Service intégré d\'accueil et d\'orientation', $output);
        $this->assertStringContainsString('<a href="https://www.itinova.org/"', $output);
    }
}
