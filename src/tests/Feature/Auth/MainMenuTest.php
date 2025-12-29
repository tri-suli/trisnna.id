<?php

use App\Models\User;

test('unauthenticated users are redirected to login', function (string $route) {
    $this->get($route)->assertRedirect('/login');
})->with([
    'dashboard' => '/dashboard',
    'products' => '/products',
    'cart' => '/cart',
    'profile' => '/profile',
]);

test('authenticated users can access protected routes', function (string $route) {
    $user = User::factory()->create();

    $this->actingAs($user)->get($route)->assertOk();
})->with([
    'dashboard' => '/dashboard',
    'products' => '/products',
    'cart' => '/cart',
    'profile' => '/profile',
]);

test('navigation menu includes products and cart links', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get('/dashboard');

    $response->assertSee(route('products'));
    $response->assertSee(route('cart'));
    $response->assertSee(__('Products'));
    $response->assertSee(__('Cart'));
});
