<?php

use App\Models\User;

it('gives back successful response for dashboard page', function () {
    // Arrange
    $user = User::factory()->create();

    // Act
    $this->actingAs($user)
        ->get('/dashboard')
        ->assertStatus(200);
});
