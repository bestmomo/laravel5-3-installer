<?php

namespace Bestmomo\Installer\Helpers;

class RequirementsChecker
{
    /**
     * Check for the server requirements.
     *
     * @return mixed
     */
    public function check()
    {
        // PHP version check
        if (version_compare(PHP_VERSION, config('installer.php-version')) < 0) {
            return 'PHP';
        }

        // Requirements check
        foreach(config('installer.requirements') as $requirement) {
            if(!extension_loaded($requirement)) {
                return $requirement;
            }
        }

        return true;
    }
}