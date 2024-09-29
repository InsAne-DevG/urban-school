<?php

namespace App\Traits;

use App\Models\UserRole;

trait Role
{
    /**
     * Assign a role to the user.
     *
     * @param string $roleName
     * @return void
     */
    public function assignRole(string $roleName)
    {
        $role = UserRole::where('name', $roleName)->first();
        if ($role) {
            $this->roles()->attach($role->id);
        }
    }

    /**
     * Check if the user has a specific role.
     *
     * @param string $roleName
     * @return bool
     */
    public function hasRole(string $roleName): bool
    {
        return $this->roles()->where('name', $roleName)->exists();
    }

    /**
     * Check if the user has any of the given roles.
     *
     * @param array $roleNames
     * @return bool
     */
    public function hasAnyRole(array $roleNames): bool
    {
        return $this->roles()->whereIn('name', $roleNames)->exists();
    }

    /**
     * Check if the user has all of the given roles.
     *
     * @param array $roleNames
     * @return bool
     */
    public function hasAllRoles(array $roleNames): bool
    {
        $rolesCount = $this->roles()->whereIn('name', $roleNames)->count();
        return $rolesCount == count($roleNames);
    }

    /**
     * Get all the roles assigned to the user.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getRoles()
    {
        return $this->roles()->get();
    }

    /**
     * Define the relationship between the user and roles through the pivot table.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(UserRole::class, 'user_has_roles', 'user_id', 'role_id');
    }

    // /**
    //  * Get all roles for the user associated with a specific school.
    //  *
    //  * @param string $schoolId
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    //  */
    // public function rolesWithSchool($schoolId)
    // {
    //     return $this->belongsToMany(UserRole::class, 'user_has_roles', 'user_id', 'role_id')
    //                 ->where('school_id', $schoolId);
    // }

    // /**
    //  * Get all users associated with the given school.
    //  *
    //  * @param string $schoolId
    //  * @return \Illuminate\Database\Eloquent\Collection
    //  */
    // public static function getUsersForSchool($schoolId)
    // {
    //     return self::with(['roles' => function ($query) use ($schoolId) {
    //         $query->where('school_id', $schoolId);
    //     }]);
    // }
}
