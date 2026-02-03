<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginBrowserTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    // tests/Browser/LoginBrowserTest.php
    public function test_user_can_login_successfully()
    {
        // 1. Criar um usuário de teste
        $user = \App\Models\User::factory()->create([
            'email' => 'lucas@exemplo.com',
        ]);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', 'password') // Senha padrão das factories
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard')
                    ->assertSee('You\'re logged in!');
        });
    }
}
