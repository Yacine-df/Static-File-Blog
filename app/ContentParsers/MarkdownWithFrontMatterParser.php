<?php

namespace App\ContentParsers;

use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\HtmlString;
use Spatie\LaravelMarkdown\MarkdownRenderer;
use Spatie\Sheets\ContentParser;

class MarkdownWithFrontMatterParser implements ContentParser
{


    public function parse(string $contents): array
    {
        $document = YamlFrontMatter::parse($contents);

        $htmlContents = app(MarkdownRenderer::class)->toHtml($document->body());

        return array_merge(
            $document->matter(),
            ['contents' => new HtmlString($htmlContents)]
        );
    }
}
