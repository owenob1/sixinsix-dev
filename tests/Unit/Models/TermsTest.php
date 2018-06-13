<?php

namespace Tests\Unit\Models;

use App\User;
use App\Terms;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\BrowserKitTest as TestCase;

class TermsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_terms_has_name_link_method()
    {
        $terms = factory(Terms::class)->create();

        $this->assertEquals(
            link_to_route('terms.show', $terms->name, [$terms], [
                'title' => trans(
                    'app.show_detail_title',
                    ['name' => $terms->name, 'type' => trans('terms.terms')]
                ),
            ]), $terms->nameLink()
        );
    }

    /** @test */
    public function a_terms_has_belongs_to_creator_relation()
    {
        $terms = factory(Terms::class)->make();

        $this->assertInstanceOf(User::class, $terms->creator);
        $this->assertEquals($terms->creator_id, $terms->creator->id);
    }
}
