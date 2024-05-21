<?php

namespace App\Policies;

use App\Models\Tournament;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TournamentPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {

    }

    public function view(User $user, Tournament $tournament)
    {
    }

    public function create(User $user)
    {
    }

    public function update(User $user, Tournament $tournament)
    {
    }

    public function delete(User $user, Tournament $tournament)
    {
    }

    public function restore(User $user, Tournament $tournament)
    {
    }

    public function forceDelete(User $user, Tournament $tournament)
    {
    }
}
