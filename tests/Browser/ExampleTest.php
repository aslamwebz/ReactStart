<?php

declare(strict_types=1);

it('renders the welcome page with inertia and navigation links', function (): void {
    $page = $this->visit('/');

    $page->assertTitle('Welcome - Laravel')
        ->assertSee('Log in')
        ->assertSee('Register');
});
