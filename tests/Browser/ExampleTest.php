<?php

declare(strict_types=1);

it('renders the welcome page with inertia and navigation links', function (): void {
    $page = $this->visit('/');

    $page->assertTitle('Welcome - Laravel')
        ->assertSee('Log in')
        ->assertSee('Register')
        ->screenshot(filename: 'welcome');

    if (file_exists(base_path('tests/Browser/Screenshots/welcome.png'))) {
        copy(base_path('tests/Browser/Screenshots/welcome.png'), base_path('docs/welcome.png'));
    }
});

it('renders the login page', function (): void {
    $page = $this->visit('/login');

    $page->assertTitle('Log in - Laravel')
        ->assertSee('Log in to your account')
        ->screenshot(filename: 'login');

    if (file_exists(base_path('tests/Browser/Screenshots/login.png'))) {
        copy(base_path('tests/Browser/Screenshots/login.png'), base_path('docs/login.png'));
    }
});
