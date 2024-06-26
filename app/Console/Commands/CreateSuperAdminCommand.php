<?php

namespace App\Console\Commands;

use App\Helpers\FormatPhoneNumber;
use App\Models\Admin;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateSuperAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:super-admin {name} {email} {password} {mobile}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a super admin user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $email = $this->argument('email');
        $password = $this->argument('password');
        $mobile = $this->argument('mobile');

        if (Admin::where('email', $email)->first()) {
            $this->error('User already exists');
            return;
        }
        $super_admin = DB::transaction(function () use ($email, $name, $password, $mobile) {
            $admin = Admin::query()->create(
                [
                    "name" => Str::title($name),
                    "email" => $email,
                    "password" => Hash::make($password),
                    "mobile" => FormatPhoneNumber::formatPhoneNumber($mobile),
                    "status" => 1,
                    "type" => "admin",
                ]

            );
            if ($admin) {
                $permissions = [

                    [
                        "module" => "categories",
                        "view_access" => 1,
                        "edit_access" => 1,
                        "full_access" => 1,
                    ],
                    [
                        "module" => "brands",
                        "view_access" => 1,
                        "edit_access" => 1,
                        "full_access" => 1,
                    ],
                    [
                        "module" => "products",
                        "view_access" => 1,
                        "edit_access" => 1,
                        "full_access" => 1,
                    ],
                    [
                        "module" => "cms_pages",
                        "view_access" => 1,
                        "edit_access" => 1,
                        "full_access" => 1,
                    ],
                    [
                        "module" => "orders",
                        "view_access" => 1,
                        "edit_access" => 1,
                        "full_access" => 1,
                    ],
                    [
                        "module" => "subadmin_id",
                        "view_access" => 1,
                        "edit_access" => 1,
                        "full_access" => 1,
                    ],

                ];
                foreach ($permissions as $permission) {
                    $admin->adminRoles()->create($permission);
                }
            }
            return $admin;

        });
        if ($super_admin) {
            $this->info("New Admin Added");
            return;
        }

    }
}
