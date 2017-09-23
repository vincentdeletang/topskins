<?php

use Illuminate\Database\Seeder;

class WeaponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /* Bayonet */
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Vanilla',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_vanilla.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Lore',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_lore.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Gamma Doppler',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_gamma_doppler.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Autotronic',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_autotronic.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Black Laminate',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_black_laminate.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Free Hand',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_freehand.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Bright Water',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_bright_water.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Marble Fade',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_marble_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Doppler',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_doppler.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Tiger Tooth',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_tiger_tooth.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Ultraviolet',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_ultraviolet.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Damascus Steel',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_damascus_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Rust Coat',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_rust_coat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Fade',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Slaughter',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_slaughter.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Crimson Web',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_crimson_web.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Case Hardened',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_case_hardened.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Safari Mesh',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_safari_mesh.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Blue Steel',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_blue_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Night',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_night.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Stained',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_stained.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Forest DDPAT',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_forest_ddpat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Urban Masked',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_urban_masked.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Scorched',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_scorched.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bayonet | Boreal Forest',
        'type' => 'bayonet',
        'image' => 'img/knife/bayonet/bayonet_boreal_forest.png'
      ]);

      /* Bowie */
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Vanilla',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_vanilla.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Doppler',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_doppler.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Marble Fade',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_marble_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Tiger Tooth',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_tiger_tooth.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Ultraviolet',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_ultraviolet.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Damascus Steel',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_damascus_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Rust Coat',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_rust_coat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Fade',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Slaughter',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_slaughter.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Crimson Web',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_crimson_web.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Case Hardened',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_case_hardened.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Forest DDPAT',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_forest_ddpat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Scorched',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_scorched.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Blue Steel',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_blue_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Night',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_night.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Stained',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_stained.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Urban Masked',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_urban_masked.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Boreal Forest',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_boreal_forest.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Bowie Knife | Safari Mesh',
        'type' => 'bowie',
        'image' => 'img/knife/bowie/bowie_safari_mesh.png'
      ]);

      /* Butterfly */
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Vanilla',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_vanilla.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Doppler',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_doppler.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Marble Fade',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_marble_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Tiger Tooth',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_tiger_tooth.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Ultraviolet',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_ultraviolet.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Damascus Steel',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_damascus_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Rust Coat',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_rust_coat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Fade',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Slaughter',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_slaughter.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Crimson Web',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_crimson_web.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Case Hardened',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_case_hardened.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Forest DDPAT',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_forest_ddpat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Scorched',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_scorched.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Blue Steel',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_blue_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Night',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_night.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Stained',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_stained.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Urban Masked',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_urban_masked.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Boreal Forest',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_boreal_forest.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Butterfly Knife | Safari Mesh',
        'type' => 'butterfly',
        'image' => 'img/knife/butterfly/butterfly_safari_mesh.png'
      ]);

      /* Flachion Knife */
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Vanilla',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_vanilla.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Doppler',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_doppler.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Marble Fade',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_marble_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Tiger Tooth',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_tiger_tooth.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Ultraviolet',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_ultraviolet.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Damascus Steel',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_damascus_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Rust Coat',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_rust_coat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Fade',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Slaughter',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_slaughter.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Crimson Web',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_crimson_web.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Case Hardened',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_case_hardened.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Forest DDPAT',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_forest_ddpat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Scorched',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_scorched.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Blue Steel',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_blue_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Night',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_night.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Stained',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_stained.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Urban Masked',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_urban_masked.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Boreal Forest',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_boreal_forest.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Falchion Knife | Safari Mesh',
        'type' => 'falchion',
        'image' => 'img/knife/falchion/falchion_safari_mesh.png'
      ]);

      /* Flip Knife */
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Vanilla',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_vanilla.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Lore',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_lore.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Gamma Doppler',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_gamma_doppler.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Autotronic',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_autotronic.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Black Laminate',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_black_laminate.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Free Hand',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_freehand.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Bright Water',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_bright_water.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Marble Fade',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_marble_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Doppler',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_doppler.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Tiger Tooth',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_tiger_tooth.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Ultraviolet',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_ultraviolet.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Damascus Steel',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_damascus_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Rust Coat',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_rust_coat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Fade',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Slaughter',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_slaughter.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Crimson Web',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_crimson_web.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Case Hardened',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_case_hardened.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Safari Mesh',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_safari_mesh.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Blue Steel',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_blue_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Night',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_night.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Stained',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_stained.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Forest DDPAT',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_forest_ddpat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Urban Masked',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_urban_masked.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Scorched',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_scorched.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Flip Knife | Boreal Forest',
        'type' => 'flip',
        'image' => 'img/knife/flip/flip_boreal_forest.png'
      ]);

      /* Gut */
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Vanilla',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_vanilla.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Lore',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_lore.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Gamma Doppler',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_gamma_doppler.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Autotronic',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_autotronic.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Black Laminate',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_black_laminate.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Free Hand',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_freehand.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Bright Water',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_bright_water.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Marble Fade',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_marble_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Doppler',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_doppler.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Tiger Tooth',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_tiger_tooth.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Ultraviolet',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_ultraviolet.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Damascus Steel',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_damascus_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Rust Coat',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_rust_coat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Fade',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Slaughter',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_slaughter.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Crimson Web',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_crimson_web.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Case Hardened',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_case_hardened.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Safari Mesh',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_safari_mesh.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Blue Steel',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_blue_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Night',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_night.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Stained',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_stained.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Forest DDPAT',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_forest_ddpat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Urban Masked',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_urban_masked.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Scorched',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_scorched.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Gut Knife | Boreal Forest',
        'type' => 'gut',
        'image' => 'img/knife/gut/gut_boreal_forest.png'
      ]);

      /* Huntsman */
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Vanilla',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_vanilla.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Doppler',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_doppler.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Marble Fade',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_marble_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Tiger Tooth',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_tiger_tooth.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Ultraviolet',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_ultraviolet.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Damascus Steel',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_damascus_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Rust Coat',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_rust_coat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Fade',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Slaughter',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_slaughter.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Crimson Web',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_crimson_web.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Case Hardened',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_case_hardened.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Forest DDPAT',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_forest_ddpat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Scorched',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_scorched.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Blue Steel',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_blue_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Night',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_night.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Stained',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_stained.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Urban Masked',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_urban_masked.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Boreal Forest',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_boreal_forest.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Huntsman Knife | Safari Mesh',
        'type' => 'huntsman',
        'image' => 'img/knife/huntsman/huntsman_safari_mesh.png'
      ]);

      /* Karambit */
      DB::table('weapons')->insert([
        'name' => 'Karambit | Vanilla',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_vanilla.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Gamma Doppler',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_gamma_doppler_phase1.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Lore',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_lore.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Autotronic',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_autotronic.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Black Laminate',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_black_laminate.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Freehand',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_freehand.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Bright Water',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_bright_water.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Marble Fade',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_marble_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Damascus Steel',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_damascus_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Ultraviolet',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_ultraviolet.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Rust Coat',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_rust_coat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Fade',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Case Hardened',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_case_hardened.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Crimson Web',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_crimson_web.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Slaughter',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_slaughter.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Stained',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_stained.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Blue Steel',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_blue_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Night',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_night.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Boreal Forest',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_boreal_forest.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Safari Mesh',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_safari_mesh.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Scorched',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_scorched.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Forest DDPAT',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_forest_ddpat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Urban Marsked',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_urban_masked.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Doppler',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_doppler_phase1.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Karambit | Tiger Tooth',
        'type' => 'karambit',
        'image' => 'img/knife/karambit/karambit_tiger_tooth.png'
      ]);

      /* M9 Bayonet */
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Vanilla',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_vanilla.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Lore',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_lore.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Gamma Doppler',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_gamma_doppler.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Autotronic',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_autotronic.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Black Laminate',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_black_laminate.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Free Hand',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_freehand.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Bright Water',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_bright_water.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Marble Fade',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_marble_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Doppler',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_doppler.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Tiger Tooth',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_tiger_tooth.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Ultraviolet',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_ultraviolet.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Damascus Steel',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_damascus_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Rust Coat',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_rust_coat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Fade',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Slaughter',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_slaughter.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Crimson Web',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_crimson_web.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Case Hardened',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_case_hardened.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Safari Mesh',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_safari_mesh.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Blue Steel',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_blue_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Night',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_night.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Stained',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_stained.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Forest DDPAT',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_forest_ddpat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Urban Masked',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_urban_masked.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Scorched',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_scorched.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'M9 Bayonet | Boreal Forest',
        'type' => 'm9',
        'image' => 'img/knife/m9/m9_boreal_forest.png'
      ]);

      /* Shadow daggers */
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Vanilla',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_vanilla.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Doppler',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_doppler.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Marble Fade',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_marble_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Tiger Tooth',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_tiger_tooth.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Ultraviolet',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_ultraviolet.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Damascus Steel',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_damascus_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Rust Coat',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_rust_coat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Fade',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_fade.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Slaughter',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_slaughter.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Crimson Web',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_crimson_web.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Case Hardened',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_case_hardened.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Forest DDPAT',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_forest_ddpat.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Scorched',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_scorched.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Blue Steel',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_blue_steel.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Night',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_night.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Stained',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_stained.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Urban Masked',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_urban_masked.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Boreal Forest',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_boreal_forest.png'
      ]);
      DB::table('weapons')->insert([
        'name' => 'Shadow Daggers | Safari Mesh',
        'type' => 'shadowdaggers',
        'image' => 'img/knife/shadowdaggers/shadowdaggers_safari_mesh.png'
      ]);
    }
}
