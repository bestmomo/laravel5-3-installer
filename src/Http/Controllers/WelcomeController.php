<?php

namespace Bestmomo\Installer\Http\Controllers;

use AppController;
use Bestmomo\Installer\Helpers\RequirementsChecker;
use Bestmomo\Installer\Helpers\PermissionsChecker;
use Bestmomo\Installer\Helpers\FileSystem;

class WelcomeController extends AppController
{
    /**
     * Check requirements and permissions and display the installer welcome page.
     *
     * @param  Bestmomo\Installer\Helpers\RequirementsChecker $requirementsChecker
     * @param  Bestmomo\Installer\Helpers\PermissionsChecker $permissionsChecker
     * @param  Bestmomo\Installer\Helpers\PermissionsChecker $filesystem
     * @return \Illuminate\View\View
     */
    public function welcome(
        RequirementsChecker $requirementsChecker, 
        PermissionsChecker $permissionsChecker,
        FileSystem $filesystem)
    {
        $permissionCheck = $permissionsChecker->check();

        if($permissionCheck !== true) {
            return view('vendor.installer.permission-error', compact('permissionCheck'));
        }       

        $requirementCheck = $requirementsChecker->check();

        if($requirementCheck !== true) {
            return view('vendor.installer.requirement-error', compact('requirementCheck'));
        }

        $publishPath = config('installer.publish-path');
        if($publishPath) {
            $filesystem->recurse_copy($publishPath, base_path());
        }

        return view('vendor.installer.welcome');
    }

}