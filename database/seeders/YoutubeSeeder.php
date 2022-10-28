<?php

namespace Database\Seeders;

use App\Models\youtube;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class YoutubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $vid1 = [
        "title" => "Batman interrogates the Joker | The Dark Knight [4k, HDR]",
        "link" => "https://www.youtube.com/watch?v=jane6C4rIwc&list=PLBIXqArYK9iDshqc37MZEYFeSupl2JTQC&index=44",
        "desc" => "The Dark Knight (2008) Scene: Batman interrogates the Joker",
        "likes" => "306000",
        "dislikes" => "4800",
        "date" => "Nov 12, 2019",
        ];
        $vid2 = [
        "title" => "Quicksilver Saves Everyone - Sweet Dreams - X-Men: Apocalypse (2016) Movie Clip HD",
        "link" => "https://www.youtube.com/watch?v=ZnZqB5Z75zI&list=PLBIXqArYK9iDshqc37MZEYFeSupl2JTQC&index=37",
        "desc" => "Quicksilver Saves Everyone From Exploding X-Mansion Scene - Sweet Dreams - X-Men: Apocalypse (2016) Movie Clip HD",
        "likes" => "1300000",
        "dislikes" => "19000",
        "date" => "Feb 6, 2021",
        ];
        $vid3 = [
        "title" => "QuickSilver Kitchen Scene - X-Men: Days Of Future Past (2014) Movie Clip HD",
        "link" => "https://www.youtube.com/watch?v=T9GFyZ5LREQ&list=PLBIXqArYK9iDshqc37MZEYFeSupl2JTQC&index=36&t=3s",
        "desc" => "QuickSilver Scene Kitchen - Peter Maximoff (Evan Peters) - X-Men: Days Of Future Past (2014) Movie Clip HD",
        "likes" => "765000",
        "dislikes" => "11000",
        "date" => "Feb 10, 2017",
        ];
        $vid4 = [
        "title" => "Blade Runner 2049 | After Dark - Mr.Kitty",
        "link" => "https://www.youtube.com/watch?v=m9QU69958JU&list=PLBIXqArYK9iDshqc37MZEYFeSupl2JTQC&index=9",
        "desc" => " ",
        "likes" => "56000",
        "dislikes" => "450",
        "date" => "Jan 30, 2022",
        ];
        $vid5 = [
        "title" => "Split | Anya Taylor-Joy vs. the Beast in 4K HDR",
        "link" => "https://www.youtube.com/watch?v=hyHPKlbkUZI&list=PLBIXqArYK9iDshqc37MZEYFeSupl2JTQC&index=48",
        "desc" => "One of Kevin's (James McAvoy) many personalities is The Beast, an unstoppable juggernaut who wants to rid the world of people who have not suffered",
        "likes" => "4700",
        "dislikes" => "132",
        "date" => "Jun 12, 2021",
        ];
        $youtube_info = array($vid1, $vid2, $vid3, $vid4, $vid5);
        foreach ($youtube_info as $each) {
            echo ($each['title']);
            youtube::create([
                'title' => $each['title'],
                'link' => $each['link'],
                'description' => $each['desc'],
                'likes' => $each['likes'],
                'dislikes' => $each['dislikes'],
                'date' => $each['date'],
            ]);
        }
    }
}
