<?
class Movie
{
    public $genre;
    public $release;
    public $studio;


    public function __construct($genre, $release, $studio)
    {
        $this->genre = $genre;
        $this->setYear($release);
        $this->studio = $studio;
    }

    public function setYear($release)
    {
        if (is_integer($release) && $release >= 0) {
            $this->release = $release;
        }
        return $release;
    }

    public function getRelease()
    {
        return $this->release;
    }
}

$avatar = new Movie('Fantasy', 2009, 'Paramount');
$titanic = new Movie('Romance', 1997, 'Warner Bros');

var_dump($avatar);
var_dump($titanic);
