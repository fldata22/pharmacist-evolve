<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Google\Client;

class ImportMembers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'members:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import members from Google Sheets';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $client = new Client();
        
        // Validate environment variable before using it
        $serviceAccountJson = env('GOOGLE_SERVICE_ACCOUNT_JSON');
        if (empty($serviceAccountJson)) {
            $this->error('GOOGLE_SERVICE_ACCOUNT_JSON environment variable is not set.');
            return 1;
        }
        
        $client->setAuthConfig(json_decode($serviceAccountJson, true));
        
        // ... rest of the import logic
        
        $this->info('Members imported successfully.');
        return 0;
    }
}
