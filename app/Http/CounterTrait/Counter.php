<?php

namespace App\Http\CounterTrait;
use Illuminate\Support\Facades\Cache;
class Counter
{
    public function userCounter()
    {
        $sessionId = session()->getId();
        $now = now();
        $counterKey = "mycareers_counter_key";
        $userKey = "mycareers_user_key";

        $users = Cache::get($userKey, []);
        $userUpdate = [];

        $difference = 0;

        foreach($users as $session => $lastVisit) {
            if($now->diffInMinutes($lastVisit) >= 1) {
                $difference;
                // dd($now->diffInMinutes($lastVisit));
            } else {
                $userUpdate[$session] = $lastVisit;
            }
        }

        if(!array_key_exists($sessionId, $users)) {
            $difference++;
        }

        $userUpdate[$sessionId] = $now;
        Cache::forever($userKey, $userUpdate);

        if(!Cache::has($counterKey)) {
            Cache::forever($counterKey, 1);
        } else {
            Cache::increment($counterKey, $difference);
        }

        // Cache::forget($counterKey);

        $counter = Cache::get($counterKey);
        return $counter;
    }
}

