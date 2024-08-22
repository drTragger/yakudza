<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitRequest;
use Exception;
use Illuminate\Support\Facades\Log;
use TelegramBot\Api\BotApi;

class FormController extends Controller
{
    public function submit(SubmitRequest $request)
    {
        try {
            $tgBot = new BotApi(config('telegram.bot_token'));

            $tgBot->sendMessage(
                config('telegram.group_id'),
                sprintf(
                    "‼️Новий запис‼️\n\n🙍🏽‍ Імʼя: %s\n📱 Телефон: %s\n\n 🚗 Тип кузова: %s\n⛽️ Тип палива: %s\n💵 Бюджет: %s",
                    $request->input('name'),
                    str_replace(' ', '', $request->input('phone')),
                    $request->input('bodyType'),
                    $request->input('fuelType'),
                    $request->input('budget')
                ));
        } catch (Exception $e) {
            Log::error(
                'Something went wrong while sending telegram message.',
                ['error' => $e->getMessage()]
            );

            return redirect()->back()->with('error', 'Щось пішло не так.');
        }

        return redirect()->back()->with('success', 'Ми отримали ваші побажання і найближчим часом звʼяжемось з вами');
    }
}
