<?php

namespace Bazofather\Gap;

use Bazofather\Interface\BazofatherBase;
use Bazofather\Interface\BazofatherCommonInterface;

class GapBot extends BazofatherBase implements GapInterface, BazofatherCommonInterface
{
    public function __construct()
    {
        parent::__construct();

        // 272be48d4501a35f8b3b2c042feb4acbcd839d4d433c72c92855ec2174012c89
        $this->setBaseUrl("https://api.gap.im/");
    }

    public function sendText(int|string $chat_id, string $message)
    {
        // TODO: Implement sendText() method.
    }

    public function sendMessages(int|string $chat_id, array $messages, string $type = 'text')
    {
        // TODO: Implement sendMessages() method.
    }

    public function sendImage(int|string $chat_id, $image, ?string $caption)
    {
        // TODO: Implement sendImage() method.
    }

    public function sendVideo(int|string $chat_id, $video, ?string $caption)
    {
        // TODO: Implement sendVideo() method.
    }

    public function sendAudio(int|string $chat_id, $audio, ?string $caption)
    {
        // TODO: Implement sendAudio() method.
    }

    public function sendFile(int|string $chat_id, $file, ?string $caption)
    {
        // TODO: Implement sendFile() method.
    }

    public function sendVoice(int|string $chat_id, $voice, ?string $caption)
    {
        // TODO: Implement sendVoice() method.
    }

    public function sendLocation(int|string $chat_id, int|string $lat, int|string $long, ?string $caption)
    {
        // TODO: Implement sendLocation() method.
    }

    public function sendContact(int|string $chat_id, string $phone, string $name)
    {
        // TODO: Implement sendContact() method.
    }

    public function editTextMessage(int|string $chat_id, int $message_id, string $new_text)
    {
        // TODO: Implement editTextMessage() method.
    }

    public function deleteMessage(int|string $chat_id, int $message_id)
    {
        // TODO: Implement deleteMessage() method.
    }

    public function deleteMessages(int|string $chat_id, array $message_ids)
    {
        // TODO: Implement deleteMessages() method.
    }

    public function sendAction(int|string $chat_id, string $action = 'typing')
    {
        // TODO: Implement sendAction() method.
    }

    public function sendInvoice(int|string $chat_id, int $amount, string $description, string $currency = "IRR")
    {
        // TODO: Implement sendInvoice() method.
    }

    public function invoiceVerify(int|string $chat_id, string $ref_id)
    {
        // TODO: Implement invoiceVerify() method.
    }

    public function invoiceInquiry(int|string $chat_id, string $ref_id)
    {
        // TODO: Implement invoiceInquiry() method.
    }

    public function payVerify(int|string $chat_id, string $ref_id)
    {
        // TODO: Implement payVerify() method.
    }

    public function payInquiry(int|string $chat_id, string $ref_id)
    {
        // TODO: Implement payInquiry() method.
    }

    public function getGameData(int|string $chat_id, string $type)
    {
        // TODO: Implement getGameData() method.
    }

    public function leaderBoard(int|string $chat_id, string $type)
    {
        // TODO: Implement leaderBoard() method.
    }

    public function testtest()
    {
        // TODO: Implement testtest() method.
    }

    public function setGameData(int|string $chat_id, string $type, string $data, bool $force = false)
    {
        // TODO: Implement setGameData() method.
    }

    public function getGameConfig(int|string $chat_id, ?string $key)
    {
        // TODO: Implement getGameConfig() method.
    }

    public function gameEvent(int|string $chat_id, string $event, string $value)
    {
        // TODO: Implement gameEvent() method.
    }
}
