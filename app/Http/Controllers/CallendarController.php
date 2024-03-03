<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CallendarController extends Controller
{
    public function calendar($date = null)
    {
        $date = empty($date) ? Carbon::now() : Carbon::createFromDate($date);
        $startOfCalendar = $date->copy()->firstOfMonth()->startOfWeek(Carbon::MONDAY);
        $endOfCalendar = $date->copy()->lastOfMonth()->endOfWeek(Carbon::SUNDAY);

        // Tailwind CSS for .calendar
        $html = '<div class="flex relative p-4 mx-auto max-w-xs bg-white rounded-lg shadow-xl">';

        // Tailwind CSS for .month-year
        $html .= '<div class="absolute bottom-16 right-[-27px] text-5xl font-light text-blue-400 transform rotate-90">';
        $html .= '<span class="month">' . $date->format('M') . '</span> ';
        $html .= '<span class="year text-gray-300 ml-1">' . $date->format('Y') . '</span>';
        $html .= '</div>';

        // Tailwind CSS for .days
        $html .= '<div class="flex flex-wrap grow mr-12">';

        $dayLabels = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
        foreach ($dayLabels as $dayLabel) {
            // Tailwind CSS for .day-label
            $html .= '<span class="relative flex-basis[14.28%] m-1 font-bold text-xs uppercase text-gray-800">' . $dayLabel . '</span>';
        }

        while ($startOfCalendar <= $endOfCalendar) {
            $extraClass = $startOfCalendar->format('m') != $date->format('m') ? 'text-blue-400' : '';
            $extraClass .= $startOfCalendar->isToday() ? ' bg-red-500' : '';

            // Tailwind CSS for .day and .day::before (approximation)
            $html .= '<span class="relative flex-basis[14.28%] m-1 rounded-full cursor-pointer font-light ' . $extraClass . '">';
            $html .= '<span class="content absolute top-0 left-0 h-full w-full flex justify-center items-center">' . $startOfCalendar->format('j') . '</span></span>';
            $startOfCalendar->addDay();
        }
        $html .= '</div></div>';
        return $html;
    }
}
