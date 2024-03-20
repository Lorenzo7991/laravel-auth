<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition()
    {
        return [
            'title' => $this->fake()->sentence,
            'description' => $this->fake()->paragraph,
            'start_date' => now(), //  data e ora attuali come data di inizio
            'end_date' => now()->addDays($this->fake()->numberBetween(30, 365)), // Aggiunge un numero casuale di giorni alla data di inizio per ottenere una data di fine casuale
            'technologies_used' => $this->fake()->words(3, true),
            'status' => $this->fake()->randomElement(['In corso', 'Completato', 'Sospeso']),
            'thumb' => $this->fake()->imageUrl(),
            'documentation' => $this->fake()->url,
        ];
    }
}
