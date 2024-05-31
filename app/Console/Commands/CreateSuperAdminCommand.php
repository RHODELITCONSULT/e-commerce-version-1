<?php

namespace App\Console\Commands;

use App\Models\Admin;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Helpers\FormatPhoneNumber;

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

        $admin = Admin::query()->create(
            [
                "name"      => Str::title($name),
                "email"     => $email,
                "password"  => Hash::make($password),
                "mobile"    => FormatPhoneNumber::formatPhoneNumber($mobile),
                "status"    => 1
            ]
        );
        if($admin){
            $this->info("Great, New Admin Added");
            return;
        }

    }
}
