<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }

    // public function ResetPassword::toMailUsing(function ($notifiable, $url) {
    //     return (new MailMessage)
    //         ->subject(Lang::get('Reset Password Notification'))
    //         ->line(Lang::get('Anda menerima email ini karena kami menerima permintaan setel ulang sandi untuk akun Anda.'))
    //         ->action(Lang::get('Setel Ulang Kata Sandi'), $url)
    //         ->line(Lang::get('Tautan pengaturan ulang kata sandi ini akan kedaluwarsa dalam :hitungan menit.', ['count' => config('auth.passwords.' . config('auth.defaults.passwords') . '.expire')]))
    //         ->line(Lang::get('Jika Anda tidak meminta pengaturan ulang kata sandi, tidak ada tindakan lebih lanjut yang diperlukan.'));
    // });
}
