<?php

namespace Tests\Set;

use Illuminate\Support\Facades\File;
use Tests\TestCase;

class FrontendSetupTest extends TestCase
{
    public function test_checks_if_npm_install_is_run()
    {
        $this->assertTrue(File::exists(base_path('node_modules')), 'Frontend assets are not installed (run `npm install`).');
    }

    /** production test */
    // public function test_checks_if_npm_run_dev_has_been_executed()
    // {
    //     $this->assertFileExists(public_path('http://localhost:5174/build/manifest.json'), 'Frontend assets are not built (run `npm run dev`).');
    // }
}
