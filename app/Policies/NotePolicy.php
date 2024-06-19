<?php

namespace App\Policies;

use App\Models\Note;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

namespace App\Policies;

use App\Models\Note;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NotePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Logic to determine if user can view any notes
        return true; // Modify this according to your logic
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Note $note): bool
    {
        // Logic to determine if user can view the specific note
        return $user->id === $note->user_id; // Example logic
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Logic to determine if user can create a note
        return true; // Modify this according to your logic
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Note $note): bool
    {
        // Logic to determine if user can update the specific note
        return $user->id === $note->user_id; // Example logic
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Note $note): bool
    {
        // Logic to determine if user can delete the specific note
        return $user->id === $note->user_id; // Example logic
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Note $note): bool
    {
        // Logic to determine if user can restore the specific note
        return $user->id === $note->user_id; // Example logic
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Note $note): bool
    {
        // Logic to determine if user can permanently delete the specific note
        return $user->id === $note->user_id; // Example logic
    }
}
