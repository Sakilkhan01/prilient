<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class CheckUrl {

    public function handle($request, Closure $next){
    	$response = $next($request);

	    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
	        $url = "https";
		else $url = "http";
		    $url .= "://";
		    $url .= $_SERVER['HTTP_HOST'];
		    $url .= $_SERVER['REQUEST_URI'];
			$pattern = '/p=324/i';

			if(preg_match($pattern, $url) == 1){
            	return redirect('/');
			}
			$pattern = '/www./i';
			$new_site_url = preg_replace($pattern, '', $url);
			return redirect()->intended($new_site_url);
    }



}