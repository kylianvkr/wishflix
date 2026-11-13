<?php

namespace Database\Seeders;


use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    private array $games = [
        1 => ['title' => 'Drakengard3', 'synopsis' => 'Résumé de drakengad 3 parce que c\'était trop long', 'release_year' => 2013, 'playtime_hours' => 20, 'rating' => 7.8, 'category_id' => 2, 'status' => 'released', 'cover_url' => 'https://via.assets.so/game.png?id=N&q=67&w=300&h=450&fit=cover'],
        2 => ['title' => 'Monster Hunter Wilds', 'synopsis' => 'Chasse de monstre', 'release_year' => 2025, 'playtime_hours' => 200, 'rating' => 8, 'category_id' => 1, 'status' => 'released', 'cover_url' => 'https://via.assets.so/game.png?id=N&q=12&w=300&h=450&fit=cover'],
        3 => ['title' => 'Vholume', 'synopsis' => 'Courir dans des espaces liminaux', 'release_year' => 2026, 'playtime_hours' => 15, 'rating' => 6.5, 'category_id' => 4, 'status' => 'released', 'cover_url' => 'https://via.assets.so/game.png?id=N&q=80&w=300&h=450&fit=cover'],
        4 => ['title' => 'Sly 2 : Band of Thieves', 'synopsis' => 'Sly cherche à rassembler les morceaux de Clockwerk', 'release_year' => 2004, 'playtime_hours' => 13, 'rating' => 8, 'category_id' => 2, 'status' => 'released', 'cover_url' => 'https://via.assets.so/game.png?id=N&q=68&w=300&h=450&fit=cover'],
        5 => ['title' => 'Sonic Adventure 2', 'synopsis' => 'Sonic vit une aventure', 'release_year' => 2001, 'playtime_hours' => 20, 'rating' => 7, 'category_id' => 2, 'status' => 'released', 'cover_url' => 'https://via.assets.so/game.png?id=N&q=15&w=300&h=450&fit=cover'],
        6 => ['title' => 'League of Legends', 'synopsis' => 'Jeu de con', 'release_year' => 2010, 'playtime_hours' => 2000, 'rating' => 1, 'category_id' => 2, 'status' => 'released', 'cover_url' => 'https://via.assets.so/game.png?id=B&q=15&w=300&h=450&fit=cover'],
    ];
    public function run(): void
    {
        foreach ($this->games as $game) {
            Game::create($game);
        }
    }
}
