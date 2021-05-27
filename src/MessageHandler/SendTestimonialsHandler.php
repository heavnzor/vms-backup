<?php

namespace App\MessageHandler;

use App\Message\SendTestimonials;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

final class SendTestimonialsHandler implements MessageHandlerInterface
{
    public function __invoke(SendTestimonials $message)
    {
        // do something with your message
    }
}
