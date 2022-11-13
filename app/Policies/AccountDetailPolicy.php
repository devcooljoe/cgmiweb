<?php

namespace App\Policies;

use App\Models\AccountDetail;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccountDetailPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AccountDetail  $accountDetail
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, AccountDetail $accountDetail)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AccountDetail  $accountDetail
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, AccountDetail $accountDetail)
    {
        return $user->admin() || $user->id == $accountDetail->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AccountDetail  $accountDetail
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, AccountDetail $accountDetail)
    {
        return $user->admin() || $user->id == $accountDetail->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AccountDetail  $accountDetail
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, AccountDetail $accountDetail)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AccountDetail  $accountDetail
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, AccountDetail $accountDetail)
    {
        return true;
    }
}
