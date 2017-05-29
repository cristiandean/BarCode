<?php

use Cake\Core\Configure;
use Cake\Core\Configure\Engine\PhpConfig;

try {
    Configure::config('default', new PhpConfig());
    Configure::load('app', 'default', false);
} catch (\Exception $e) {
    exit($e->getMessage() . "\n");
}

Configure::write('Barcode.disallowHotlinking', false);
