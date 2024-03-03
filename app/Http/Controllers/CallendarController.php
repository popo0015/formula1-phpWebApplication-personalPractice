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
        $html = '<div class="flex justify-center items-center w-full h-full p-4 my-0 max-w-md rounded-lg shadow-xl">';

        // Tailwind CSS for .month-year
        $html .= '<div class="relative bottom-62 right-0" style="transform: rotate(-90deg); font-size: 2rem; font-weight: 300; color: #94A3B8;">';
        $html .= '<span>' . $date->format('M') . ' </span>';
        $html .= '<span style="margin-left: 4px; color: #CBD5E1;">' . $date->format('Y') . '</span>';
        $html .= '</div>';

        // Tailwind CSS for .days
        $html .= '<div class="flex-wrap grow mr-46 grid grid-cols-7 gap-1 w-full">';

        $dayLabels = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
        foreach ($dayLabels as $dayLabel) {
            // Tailwind CSS for .day-label
            $html .= '<span class="relative flex-basis[14.28%] mt-1  mr-1  mb-12  ml-1 font-bold text-xs uppercase text-gray-800">' . $dayLabel . '</span>';
        }

        while ($startOfCalendar <= $endOfCalendar) {
            $extraClass = $startOfCalendar->format('m') != $date->format('m') ? 'text-gray-400' : 'text-gray-800';
            $extraClass .= $startOfCalendar->isToday() ? 'text-white bg-formula1-red rounded-full' : '';

            $hoverClass = 'hover:bg-formula1-red hover:bg-opacity-80'; // Soft red background on hover

            // Tailwind CSS for .day and .day::before (approximation)
            $html .= '<div class="relative cursor-pointer rounded-full text-center p-2 hover:bg-nav-color' . $extraClass . ' ' . $hoverClass . '">';
            $html .= '<span class="content">' . $startOfCalendar->format('j') . '</span></div>';
            $startOfCalendar->addDay();
        }

        $html .= '</div></div>';
        return $html;
    }
}
