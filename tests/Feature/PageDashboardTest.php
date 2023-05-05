<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\get;

uses(RefreshDatabase::class);

it('cannot be accessed by guest', function () {
    get(route('dashboard'))
        ->assertRedirect(route('login'));
});

it('lists upcoming tournaments', function () {
    // Arrange
    $user = \App\Models\User::factory()
        ->has(Tournament::factory()->count(2)
        ->create());

    // Act
    $this->actingAs($user);
    get(route('dashboard'))
        ->assertOk()
        ->assertSeeText([

        ]);
});
