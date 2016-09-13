<?php

namespace Bestmomo\Installer\Http\Controllers;

use Illuminate\Http\Request;
use AppController;
use Bestmomo\Installer\Repositories\EnvironmentRepository;
use Artisan;
use Exception;

class DatabaseController extends AppController
{
    /**
     * Show form.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $host = env('DB_HOST');
        $database = env('DB_DATABASE');
        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');

        return view('vendor.installer.database', compact('host', 'database', 'username', 'password'));
    }

    /**
     * Manage form submission.
     *
     * @param Illuminate\Http\Request  $request
     * @param Bestmomo\Installer\Repositories\EnvironmentRepository $environmentRepository
     * @return redirection
     */
    public function store(Request $request, EnvironmentRepository $environmentRepository)
    {
        // Set config for migrations and seeds
        $connection = config('database.default');
        config([
            'database.connections.'.$connection.'.host' => $request->host,
            'database.connections.'.$connection.'.database' => $request->dbname,
            'database.connections.'.$connection.'.password' => $request->password,
            'database.connections.'.$connection.'.username' => $request->username,
        ]);

        // Migrations and seeds
        try {
            Artisan::call('migrate');
            Artisan::call('db:seed');
        } catch(Exception $e) {
            return view('vendor.installer.database-error');
        }

        // Update .env file
        $environmentRepository->SetDatabaseSetting($request);

        if(config('installer.administrator')) {
            return redirect('install/register');
        }

        return redirect('install/end');
    }

}