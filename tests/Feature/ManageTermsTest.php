<?php

namespace Tests\Feature;

use App\Terms;
use Tests\BrowserKitTest as TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ManageTermsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function user_can_see_terms_list_in_terms_index_page()
    {
        $terms = factory(Terms::class)->create();

        $this->loginAsUser();
        $this->visit(route('terms.index'));
        $this->see($terms->name);
    }

    private function getCreateFields(array $overrides = [])
    {
        return array_merge([
            'name'        => 'Terms 1 name',
            'description' => 'Terms 1 description',
        ], $overrides);
    }

    /** @test */
    public function user_can_create_a_terms()
    {
        $this->loginAsUser();
        $this->visit(route('terms.index'));

        $this->click(trans('terms.create'));
        $this->seePageIs(route('terms.create'));

        $this->submitForm(trans('terms.create'), $this->getCreateFields());

        $this->seePageIs(route('terms.show', Terms::first()));

        $this->seeInDatabase('terms', $this->getCreateFields());
    }

    /** @test */
    public function create_terms_action_must_pass_validations()
    {
        $this->loginAsUser();

        // Name empty
        $this->post(route('terms.store'), $this->getCreateFields(['name' => '']));
        $this->assertSessionHasErrors('name');

        // Name 70 characters
        $this->post(route('terms.store'), $this->getCreateFields([
            'name' => str_repeat('Test Title', 7),
        ]));
        $this->assertSessionHasErrors('name');

        // Description 256 characters
        $this->post(route('terms.store'), $this->getCreateFields([
            'description' => str_repeat('Long description', 16),
        ]));
        $this->assertSessionHasErrors('description');
    }

    private function getEditFields(array $overrides = [])
    {
        return array_merge([
            'name'        => 'Terms 1 name',
            'description' => 'Terms 1 description',
        ], $overrides);
    }

    /** @test */
    public function user_can_edit_a_terms()
    {
        $this->loginAsUser();
        $terms = factory(Terms::class)->create(['name' => 'Testing 123']);

        $this->visit(route('terms.show', $terms));
        $this->click('edit-terms-'.$terms->id);
        $this->seePageIs(route('terms.edit', $terms));

        $this->submitForm(trans('terms.update'), $this->getEditFields());

        $this->seePageIs(route('terms.show', $terms));

        $this->seeInDatabase('terms', [
            'id' => $terms->id,
        ] + $this->getEditFields());
    }

    /** @test */
    public function edit_terms_action_must_pass_validations()
    {
        $this->loginAsUser();
        $terms = factory(Terms::class)->create(['name' => 'Testing 123']);

        // Name empty
        $this->patch(route('terms.update', $terms), $this->getEditFields(['name' => '']));
        $this->assertSessionHasErrors('name');

        // Name 70 characters
        $this->patch(route('terms.update', $terms), $this->getEditFields([
            'name' => str_repeat('Test Title', 7),
        ]));
        $this->assertSessionHasErrors('name');

        // Description 256 characters
        $this->patch(route('terms.update', $terms), $this->getEditFields([
            'description' => str_repeat('Long description', 16),
        ]));
        $this->assertSessionHasErrors('description');
    }

    /** @test */
    public function user_can_delete_a_terms()
    {
        $this->loginAsUser();
        $terms = factory(Terms::class)->create();

        $this->visit(route('terms.edit', $terms));
        $this->click('del-terms-'.$terms->id);
        $this->seePageIs(route('terms.edit', [$terms, 'action' => 'delete']));

        $this->press(trans('app.delete_confirm_button'));

        $this->dontSeeInDatabase('terms', [
            'id' => $terms->id,
        ]);
    }
}
