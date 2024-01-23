<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 19,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 20,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 21,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 22,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 23,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 24,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 25,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 26,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 27,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 28,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 29,
                'title' => 'investment_access',
            ],
            [
                'id'    => 30,
                'title' => 'pension_access',
            ],
            [
                'id'    => 31,
                'title' => 'investment_plan_create',
            ],
            [
                'id'    => 32,
                'title' => 'investment_plan_edit',
            ],
            [
                'id'    => 33,
                'title' => 'investment_plan_show',
            ],
            [
                'id'    => 34,
                'title' => 'investment_plan_delete',
            ],
            [
                'id'    => 35,
                'title' => 'investment_plan_access',
            ],
            [
                'id'    => 36,
                'title' => 'investment_type_create',
            ],
            [
                'id'    => 37,
                'title' => 'investment_type_edit',
            ],
            [
                'id'    => 38,
                'title' => 'investment_type_show',
            ],
            [
                'id'    => 39,
                'title' => 'investment_type_delete',
            ],
            [
                'id'    => 40,
                'title' => 'investment_type_access',
            ],
            [
                'id'    => 41,
                'title' => 'pension_type_create',
            ],
            [
                'id'    => 42,
                'title' => 'pension_type_edit',
            ],
            [
                'id'    => 43,
                'title' => 'pension_type_show',
            ],
            [
                'id'    => 44,
                'title' => 'pension_type_delete',
            ],
            [
                'id'    => 45,
                'title' => 'pension_type_access',
            ],
            [
                'id'    => 46,
                'title' => 'pension_plan_create',
            ],
            [
                'id'    => 47,
                'title' => 'pension_plan_edit',
            ],
            [
                'id'    => 48,
                'title' => 'pension_plan_show',
            ],
            [
                'id'    => 49,
                'title' => 'pension_plan_delete',
            ],
            [
                'id'    => 50,
                'title' => 'pension_plan_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
