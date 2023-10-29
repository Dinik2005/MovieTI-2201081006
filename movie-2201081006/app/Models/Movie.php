<?php

namespace App\Models;

class Movie
{

    private static $movieData =[
        [
            'id' => 'tt1746090',
            'judul' => 'Equalizer 3',
            'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he
                        discovers his friends are under the control of local crime bosses. As events turn deadly,
                        McCall knows what he has to do: become his friends protector by taking on the mafia.',
            'tahun' => 2023,
            'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
            'foto_sampul' => 'equalizer.jpg',
        ],
        [
            'id' => 'tt2567856',
            'judul' => 'Mission: Impossible - Dead Reckoning Part One',
            'sinopsis' => 'Ethan Hunt and his IMF team must track down a dangerous weapon
                        before it falls into the wrong hands.',
            'tahun' => 2023,
            'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
            'foto_sampul' => 'mission-imposible.jpg',
        ],
        [
            'id' => 'tt1745564',
            'judul' => 'Openheimer',
            'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role
            in the development of the atomic bomb.',
            'tahun' => 2023,
            'pemain' => [' Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
            'foto_sampul' => 'openheimer.jpg',
        ],
        [
            'id' => 'tt1745960',
            'judul' => 'Top Gun: Maverick',
            'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top
            naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a
            mission that demands the ultimate sacrifice from those chosen to fly it.',
            'tahun' => 2022,
            'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'top-gun.jpg',
        ],
        [
            'id' => 'tt1746005',
            'judul' => 'Gen V (2023)',
            'sinopsis' => 'Di satu-satunya perguruan tinggi khusus pahlawan super di Amerika,
            kesempatan untuk bergabung dengan The Seven yang tim pahlawan super elit Vought International.',
            'tahun' => 2023,
            'pemain' => ['Asa Germann , Chance Perdomo , Derek Luh , Jaz Sinclair'],
            'foto_sampul' => 'genV.jpeg',
        ],
        [
            'id' => 'tt1746006',
            'judul' => 'Old Dads (2023)',
            'sinopsis' => 'Seorang ayah paruh baya yang rewel dan dua sahabatnya mendapati diri mereka tidak
             bisa mengimbangi perubahan dunia yang dipenuhi para CEO milenial dan kepala sekolah yang berkuasa.',
            'tahun' => 2023,
            'pemain' => ['Abbie Cobb , Angela Gulner , Bill Burr , Bobby Cannavale'],
            'foto_sampul' => 'oldDads.jpeg',
        ],
        [
            'id' => 'tt1746007',
            'judul' => 'The Other Zoey (2023)',
            'sinopsis' => 'Zoey Miller, seorang jurusan komputer super pintar yang tidak tertarik pada cinta romantis,
             hidupnya berubah drastis ketika Zack, bintang sepak bola di sekolahnya, mengalami amnesia dan salah mengira Zoey sebagai pacarnya.',
            'tahun' => 2023,
            'pemain' => ['Amalia Yoo, Andie MacDowell, Archie Renaux, Christie Lynn Smith, Drew Starkey'],
            'foto_sampul' => 'theOther.jpg',
        ],
        [
            'id' => 'tt1746008',
            'judul' => 'The Pigeon Tunnel (2023)',
            'sinopsis' => 'Pemenang Academy Award® Errol Morris membuka tabir kisah hidup dan karier David Cornwell, mantan mata-mata yang dikenal di dunia sastra sebagai John le Carré.',
            'tahun' => 2023,
            'pemain' => ['Charlotte Hamblin, Dominik Dervaics, Douglas Rankine, Garry Cooper'],
            'foto_sampul' => 'ThePigeon.jpeg',
        ],
        [
            'id' => 'tt1746009',
            'judul' => 'Searching (2018) Subtitle Indonesia',
            'sinopsis' => 'Bercerita tentang David Kim (John Cho), seorang ayah yang tengah kehilangan anak semata wayangnya bernama Margot Kim (Michelle La). David pun melaporkan peristiwa kehilangan putrinya pada pihak keamanan.',
            'tahun' => 2018,
            'pemain' => ['Alex Jayne Go, John Cho, Megan Liu, Sara Sohn'],
            'foto_sampul' => 'searching.jpeg',
        ],
        [
            'id' => 'tt1746010',
            'judul' => 'Jesus Revolution (2023) Subtitle Indonesia',
            'sinopsis' => 'In the 1970s, aimless teenager Greg Laurie searches for all the right things in all the wrong places until he meets Lonnie Frisbee, a charismatic hippie/street preacher. Together with local pastor Chuck Smith,
             they open the doors of a languishing church to an unexpected revival.',
            'tahun' => 2023,
            'pemain' => ['Brent McCorkle, Jon Erwin'],
            'foto_sampul' => 'JesusRevolution.jpg',
        ],
    ];
    public static function all(){
        return collect (self::$movieData);
    }
    public static function find($id){
        // $movies = self::$movieData;
        // $movie = [];
        // foreach($movies as $m){
        //     if($m['id'] == $id){
        //         $movie = $m;
        //     }
        // }
        $movie = static::all();
        return $movie->firstWhere('id', $id);
    }

    public static function search($query)
    {
        return static::all()->filter(function ($movie) use ($query) {
            return stristr($movie['judul'], $query) !== false ||
                stristr($movie['sinopsis'], $query) !== false;
        });
    }

}


