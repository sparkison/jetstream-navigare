<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Navigare\Middleware;
use Navigare\Response as NavigareResponse;

class HandleNavigareRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://navigarejs.github.io/framework/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Extend response, i.e. with shared fragments.
     *
     * @see https://navigarejs.github.io/framework/extend-response
     * @param  \Illuminate\Http\Request  $request
     * @param  \Navigare\Response  $response
     * @return void
     */
    public function extend(Request $request, NavigareResponse $response): void
    {
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://navigarejs.github.io/framework/guide/basics/shared-properties.html#sharing-data
     * @param  \Illuminate\Http\Request  $request
     * @param \Navigare\Response $response
     * @return array
     */
    public function share(Request $request, NavigareResponse $response)
    {
        return [
            // ...
        ];
    }
}
