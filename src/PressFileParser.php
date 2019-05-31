<?php


namespace NikulinIlya\press;


use Illuminate\Support\Facades\File;

class PressFileParser
{
    protected $filename;

    protected $data;

    public function __construct($filename)
    {
        $this->filename = $filename;

        $this->splitFile();
    }

    public function getData()
    {
        return $this->data;
    }

    public function splitFile()
    {
        preg_match('/^\-{3}(.*?)\-{3}(.*)/s',
            File::get($this->filename),
            $this->data
        );
    }
}