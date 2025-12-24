<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Package;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

class SitemapController extends Controller
{
    /**
     * Generate the sitemap.xml
     */
    public function index(): Response
    {
        $sitemap = Cache::remember('sitemap', 3600, function () {
            $packages = Package::active()
                ->select('slug', 'updated_at')
                ->get();

            $destinations = Destination::active()
                ->select('slug', 'updated_at')
                ->get();

            $content = view('sitemap', [
                'packages' => $packages,
                'destinations' => $destinations,
            ])->render();

            return $content;
        });

        return response($sitemap)
            ->header('Content-Type', 'application/xml');
    }

    /**
     * Generate the robots.txt
     */
    public function robots(): Response
    {
        $content = "User-agent: *\n";
        $content .= "Allow: /\n\n";
        $content .= "# Disallow admin area\n";
        $content .= "Disallow: /admin\n";
        $content .= "Disallow: /admin/*\n\n";
        $content .= "# Sitemap\n";
        $content .= "Sitemap: " . url('sitemap.xml') . "\n";

        return response($content)
            ->header('Content-Type', 'text/plain');
    }
}


