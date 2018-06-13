<?php

namespace Tests\Unit\Policies;

use App\Terms;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\BrowserKitTest as TestCase;

class TermsPolicyTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function user_can_create_terms()
    {
        $user = $this->loginAsUser();
        $this->assertTrue($user->can('create', new Terms));
    }

    /** @test */
    public function user_can_view_terms()
    {
        $user = $this->loginAsUser();
        $terms = factory(Terms::class)->create(['name' => 'Terms 1 name']);
        $this->assertTrue($user->can('view', $terms));
    }

    /** @test */
    public function user_can_update_terms()
    {
        $user = $this->loginAsUser();
        $terms = factory(Terms::class)->create(['name' => 'Terms 1 name']);
        $this->assertTrue($user->can('update', $terms));
    }

    /** @test */
    public function user_can_delete_terms()
    {
        $user = $this->loginAsUser();
        $terms = factory(Terms::class)->create(['name' => 'Terms 1 name']);
        $this->assertTrue($user->can('delete', $terms));
    }
}
