<?php

namespace App\Models;

require '../vendor/autoload.php';

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'work_start_time', 'work_end_time'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rests()
    {
        return $this->hasMany(Rest::class);
    }

    public function getRestTotal()
    {
        $rest_total = 0;

        foreach ($this->rests as $rest) {
            $rest_start_time = new Carbon($rest->rest_start_time);
            $rest_end_time = new Carbon($rest->rest_end_time);
            $rest_time = $rest_start_time->diffInSeconds($rest_end_time);
            $rest_total = $rest_total + $rest_time;
        }

        return $rest_total;
        // return $this->secToTime($rest_total);

    }

    public function getWorkTime()
    {
        $work_start_time = new Carbon($this->work_start_time);
        $work_end_time = new Carbon($this->work_end_time);
        $work_time = $work_start_time->diffInSeconds($work_end_time) - $this->getRestTotal();

        return $work_time;
        // return $this->secToTime($work_time);

    }

    public function secToTime($seconds)
    {
        $hour = floor($seconds / 3600);
        $min = floor(($seconds % 3600) / 60);
        $sec = $seconds % 60;

        //一桁の場合、先頭に0をつけて二桁にする
        $hour = sprintf('%02d', $hour);
        $min = sprintf('%02d', $min);
        $sec = sprintf('%02d', $sec);

        return $hour . ':' . $min . ':' . $sec;
    }

    public function datetimeToDate($datetime)
    {
        $datetime = new Carbon($datetime);
        $date = $datetime->format('Y-m-d');

        return $date;
    }

    public function datetimeToTime($datetime)
    {
        $datetime = new Carbon($datetime);
        $time = $datetime->format('H:i:s');

        return $time;
    }

    // public function scopeUserSearch($query, $user_id)
    // {
    //     if (!empty($user_id)) {
    //         $query->where('user_id', $user_id);
    //     }
    // }

    // public function scopeFirst_nameSearch($query, $keyword)
    // {
    //     if (!empty($keyword)) {
    //         $query->where('first_name', 'like', '%' . $keyword . '%');
    //     }
    // }

    // public function scopeLast_nameSearch($query, $keyword)
    // {
    //     if (!empty($keyword)) {
    //         $query->where('last_name', 'like', '%' . $keyword . '%');
    //     }
    // }

    // public function scopeEmailSearch($query, $keyword)
    // {
    //     if (!empty($keyword)) {
    //         $query->where('email', 'like', '%' . $keyword . '%');
    //     }
    // }

    // public function scopeGenderSearch($query, $gender)
    // {
    //     if (!empty($gender)) {
    //         $query->where('gender', $gender);
    //     }
    // }

    // public function scopeCategorySearch($query, $category_id)
    // {
    //     if (!empty($category_id)) {
    //         $query->where('category_id', $category_id);
    //     }
    // }

    // public function scopeDateSearch($query, $date)
    // {
    //     if (!empty($date)) {
    //         $query->where('created_at', 'like', '%' . $date . '%');
    //     }
    // }

}
