<?php

namespace App\Console\Commands;

use App\Models\Users\User;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\Hash;

class AddUser extends Command implements PromptsForMissingInput
{
    protected $signature = 'app:adduser {email} {password}';

    protected $description = 'Создать админ пользователя для первого входа';


    public function handle()
    {
        try {
            User::create([
                'name' => 'Admin User from Console command',
                'email' => $this->argument('email'),
                'password' => Hash::make($this->argument('password'))
            ]);

            $this->alert('Успешно создали пользователя!');
            $this->info('E-MAIL: '.$this->argument('email'));
            $this->info('Пароль: '. $this->argument('password'));
        } catch(\Throwable $exception) {
            $this->error('Ошибка создания админ пользователя.');
        }
    }

    protected function promptForMissingArgumentsUsing()
    {
        return [
            'email' => 'E-MAIL для входа в систему:',
            'password' => 'Пароль для входа:',
        ];
    }
}
