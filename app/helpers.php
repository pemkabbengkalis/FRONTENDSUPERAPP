<?php

   function GetApi($url, $params = [])
    {
        $response = Http::get($url, $params);
        if ($response->successful()) {
            return $response->json();
        } else {
            return null;
        }
    }


    function GetApiToken($url, $bearerToken, $params = [])
    {
        $response = Http::withToken($bearerToken)->get($url, $params);
        if ($response->successful()) {
            return $response->json();
        } else {
            return null;
        }
    }
    function PostApiToken($url, $bearerToken, $data = [])
    {
        $response = Http::withToken($bearerToken)->post($url, $data);
        if ($response->successful()) {
            return $response->json();
        } else {
            return null;
        }
    }