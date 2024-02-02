<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use GeoIp2\Database\Reader;

class RecordVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $ip = $request->ip();

        // Membuat instance Reader untuk membaca file GeoLite2-City.mmdb
        $reader = new Reader('/path/to/GeoLite2-City.mmdb');
    
        // Membuat instance Record menggunakan IP address pengunjung
        $record = $reader->city($ip);
    
        // Mendapatkan nama kota dari Record
        $cityName = $record->city->name;
    
        // Mendapatkan kode negara dari Record
        $countryCode = $record->country->isoCode;
    
        // Mendapatkan nama negara dari Record
        $countryName = $record->country->name;
    
        // Mendapatkan latitude dan longitude dari Record
        // $latitude = $record->location->latitude;

        // $longitude = $record->location->longitude;

    // Menyimpan data lokasi pengunjung ke dalam tabel 'visitors'
    DB::table('visitors')->insert([
        'ip' => $ip,
        'city' => $cityName,
        'country_code' => $countryCode,
        'country_name' => $countryName,
        'created_at' => now(),
    ]);

        
        return $next($request);
    }
}
