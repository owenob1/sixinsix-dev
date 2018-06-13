<?php

namespace App\Policies;

use App\User;
use App\Terms;
use Illuminate\Auth\Access\HandlesAuthorization;

class TermsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the project.
     *
     * @param  \App\User  $user
     * @param  \App\Terms  $terms
     * @return mixed
     */
    public function view(User $user, Terms $terms)
    {
        // Update $user authorization to view $terms here.
        return true;
    }

    /**
     * Determine whether the user can create projects.
     *
     * @param  \App\User  $user
     * @param  \App\Terms  $terms
     * @return mixed
     */
    public function create(User $user, Terms $terms)
    {
        // Update $user authorization to create $terms here.
        return true;
    }

    /**
     * Determine whether the user can update the project.
     *
     * @param  \App\User  $user
     * @param  \App\Terms  $terms
     * @return mixed
     */
    public function update(User $user, Terms $terms)
    {
        // Update $user authorization to update $terms here.
        return true;
    }

    /**
     * Determine whether the user can delete the project.
     *
     * @param  \App\User  $user
     * @param  \App\Terms  $terms
     * @return mixed
     */
    public function delete(User $user, Terms $terms)
    {
        // Update $user authorization to delete $terms here.
        return true;
    }
}
