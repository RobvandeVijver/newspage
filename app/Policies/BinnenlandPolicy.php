<?php

namespace App\Policies;

use App\Models\Binnenland;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BinnenlandPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Binnenland  $binnenland
     * @return mixed
     */
    public function view(User $user, Binnenland $binnenland)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Binnenland  $binnenland
     * @return mixed
     */
    public function update(User $user, Binnenland $binnenland)
    {
        auth()->check() && $binnenland->id === auth()->id();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Binnenland  $binnenland
     * @return mixed
     */
    public function delete(User $user, Binnenland $binnenland)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Binnenland  $binnenland
     * @return mixed
     */
    public function restore(User $user, Binnenland $binnenland)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Binnenland  $binnenland
     * @return mixed
     */
    public function forceDelete(User $user, Binnenland $binnenland)
    {
        //
    }
}
