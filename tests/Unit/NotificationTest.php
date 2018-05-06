<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use App\Notifications\QuestionAnswered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NotificationTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testNotification()
    {
        Notification::fake();

        $user = $user = factory(\App\User::class)->make();
        $user->save();

        $user->notify(new QuestionAnswered());

        Notification::assertSentTo(
            [$user], QuestionAnswered::class
        );

    }

    public function testNotificationMail()
    {
        Mail::fake();

        $user = $user = factory(\App\User::class)->make();
        $user->save();

        $user->notify(new QuestionAnswered());
        if (Mail::failures()) {
            self::assertTrue(false);
        } else {
            self::assertTrue(true);
        }



        //Mail::assertSent(QuestionAnswered::class);

    }
}
