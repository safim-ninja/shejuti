<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Experience::insert([
            [
                'position' => 'Program Officer',
                'organization' => 'Oxfam in Bangladesh',
                'organization_url' => 'https://bangladesh.oxfam.org/',
                'period' => 'Jan 2024 – Present',
                'description' => 'Climate justice, energy transition, resource rights.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'position' => 'Adjunct Faculty',
                'organization' => 'University of South Asia',
                'organization_url' => 'https://southasiauni.edu.bd/',
                'period' => 'Apr 2022 – Present',
                'description' => 'Teaching environmental science courses.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'position' => 'Green Response Officer',
                'organization' => 'Bangladesh Red Crescent Society (BDRCS)',
                'organization_url' => 'https://bdrcs.org/',
                'period' => 'Oct 2023 – Jan 2024',
                'description' => 'Swedish Red Cross supported climate response.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'position' => 'Assistant Manager (Project Development)',
                'organization' => 'Grameen Shakti',
                'organization_url' => 'https://www.gshakti.org/',
                'period' => 'Oct 2022 – Nov 2023',
                'description' => 'Renewable energy and project management.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'position' => 'Research Officer',
                'organization' => 'Ministry of Environment, Forest and Climate Change Research-CECCR',
                'organization_url' => 'https://ceccr.gov.bd/',
                'period' => 'Nov 2022 – Dec 2022',
                'description' => 'Climate change adaptation research.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'position' => 'Program Officer',
                'organization' => 'Bangladesh Institute of ICT in Development (BIID)',
                'organization_url' => 'https://biid.org.bd/',
                'period' => 'Aug 2022 – Oct 2022',
                'description' => 'Sustainable agriculture, climate change, fundraising.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'position' => 'Rapporteur',
                'organization' => 'Sightsavers',
                'organization_url' => 'https://www.sightsavers.org/',
                'period' => 'Mar 2022 – Apr 2022',
                'description' => 'Report writing and documentation.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'position' => 'Assistant Director (Environment Development Officer)',
                'organization' => 'TMSS',
                'organization_url' => 'https://tmss-bd.org/',
                'period' => 'Feb 2020 – Feb 2022',
                'description' => 'Environmental project support and training.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'position' => 'Volunteer',
                'organization' => 'Oxfam in Bangladesh',
                'organization_url' => 'https://bangladesh.oxfam.org/',
                'period' => 'Dec 2018 – May 2019',
                'description' => 'Climate project support and event facilitation.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
