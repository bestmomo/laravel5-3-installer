<?php

namespace Bestmomo\Installer\Repositories;

use Illuminate\Http\Request;

class EnvironmentRepository
{
    /**
     * @var string
     */
    private $envPath;

    /**
     * @var array
     */
    private $env;

    /**
     * Create a new EnvironmentRepository instance.
     */
    public function __construct()
    {
        $this->envPath = base_path('.env');
        $this->env = $this->all();
    }

    /**
     * Get the content of the .env file.
     *
     * @return array
     */
    private function all()
    {
        return file($this->envPath);
    }

    /**
     * Set the database setting of the .env file.
     *
     * @param Illuminate\Http\Request $request
     * @return string
     */
    public function SetDatabaseSetting(Request $request)
    {
        $this->set('DB_DATABASE', $request->dbname);
        $this->set('DB_USERNAME', $request->username);
        $this->set('DB_PASSWORD',$request->password);
        $this->set('DB_HOST', $request->host);

        $this->saveFile();
    }

    /**
     * Set .env element.
     *
     * @param string $key
     * @param string $value
     * @return void
     */
    private function set($key, $value)
    {
        $this->env = array_map(function($item) use($key, $value){
            if(strpos($item, $key) !== false) {
                $start = strpos($item, '=') + 1;
                $item = substr_replace($item, $value . "\n", $start);
            };
            return $item;
        }, $this->env);
    }

    /**
     * Save the edited content to the .env file.
     *
     * @return void
     */
    private function saveFile()
    {
        file_put_contents($this->envPath, implode($this->env));
    }
}