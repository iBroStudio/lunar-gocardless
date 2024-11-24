<?php

use IBroStudio\GoCardless\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

pest()
    ->extends(TestCase::class, RefreshDatabase::class)
    ->in(__DIR__);
