<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\ContentCategory;
use App\Models\User;

class ContentCategoryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any ContentCategory');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ContentCategory $contentcategory): bool
    {
        return $user->checkPermissionTo('view ContentCategory');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create ContentCategory');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ContentCategory $contentcategory): bool
    {
        return $user->checkPermissionTo('update ContentCategory');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ContentCategory $contentcategory): bool
    {
        return $user->checkPermissionTo('delete ContentCategory');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any ContentCategory');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ContentCategory $contentcategory): bool
    {
        return $user->checkPermissionTo('restore ContentCategory');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any ContentCategory');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, ContentCategory $contentcategory): bool
    {
        return $user->checkPermissionTo('replicate ContentCategory');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder ContentCategory');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ContentCategory $contentcategory): bool
    {
        return $user->checkPermissionTo('force-delete ContentCategory');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any ContentCategory');
    }
}