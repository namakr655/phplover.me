<?php

namespace Phplover\Libraries;

/**
 * This class will fetch the file
 * and return its content, title, description
 */
class ContentFetcher
{
    public function fetch(string $fileUrl)
    {
        // get page content
        $content = file_get_contents($fileUrl);

        // get title
        $title = explode("title:", $content)[1];
        $title = explode("\n", $title)[0];
        $title = str_replace("-", " ", $title);
        $title = ucwords($title);
        $title = str_replace('"', "", $title);
        $title = trim($title);

        // get description
        $description = explode("description:", $content)[1];
        $description = explode("\n", $description)[0];
        $description = ucwords($description);
        $description = str_replace('"', "", $description);
        $description = trim($description);

        // get content
        $content = explode("---", $content)[2];
        $content = trim($content);

        // markdown parser
        $parser = new \League\CommonMark\CommonMarkConverter();

        // parse content
        $content = $parser->convert($content);

        // return array
        return [
            'title' => $title,
            'description' => $description,
            'content' => $content,
            'slug' => basename($fileUrl)
        ];
    }
}