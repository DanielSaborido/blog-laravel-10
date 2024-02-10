<?php

use App\Models\{Category, User};
use function Pest\Laravel\{actingAs, get};
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(fn () => User::factory()->create());

it('has author')->assertDatabaseHas('users', ['id' => 1]);

it('user not logged cannot access to articles page', function () {
    get('/articles')->assertRedirect('/login');
});

it('user logged can access to articles page', function () {
    actingAs(User::first())->get('/articles')->assertStatus(200);
});