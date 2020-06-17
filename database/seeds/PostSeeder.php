<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'titulo' => 'Nossa experiência na Off-Season Brasil!',
            'conteudo' => 'Oi! Eu sou um post do blog.',
            'url' => 'offseason',
            'post_foto' => 'post_fotos/offseason.jpeg',
        ]);

        DB::table('posts')->insert([
            'titulo' => 'Nossa experiência na Rocket City Regional!',
            'conteudo' => 'Oi! Eu sou um post do blog.',
            'url' => 'offseason',
            'post_foto' => 'post_fotos/offseason.jpeg',
        ]);

        DB::table('posts')->insert([
            'titulo' => 'Ajude o time!',
            'conteudo' => 'Oi! Eu sou um post do blog.',
            'url' => 'offseason',
            'post_foto' => 'post_fotos/offseason.jpeg',
        ]);

        DB::table('posts')->insert([
            'titulo' => 'Estamos organizando a Off-Season Brasil 2020',
            'conteudo' => 'Oi! Eu sou um post do blog.',
            'url' => 'offseason',
            'post_foto' => 'post_fotos/offseason.jpeg',
        ]);




        DB::table('post_fotos')->insert([
            'post_id' => 1,
            'caminho' => 'post_fotos/offseason.jpeg',
        ]);
    }
}
