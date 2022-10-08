<?php

namespace Bazofather\Gap;

interface GapInterface
{
    public function sendAction(string|int $chat_id, string $action = 'typing');

    /**
     * $currency : IRR - USD
     */
    public function sendInvoice(string|int $chat_id, int $amount, string $description, string $currency = "IRR");

    public function invoiceVerify(string|int $chat_id, string $ref_id);

    public function invoiceInquiry(string|int $chat_id, string $ref_id);

    public function payVerify(string|int $chat_id, string $ref_id);

    public function payInquiry(string|int $chat_id, string $ref_id);

    public function setGameData(string|int $chat_id, string $type, string $data, bool $force = false);

    public function getGameData(string|int $chat_id, string $type);

    public function leaderBoard(string|int $chat_id, string $type);

    public function getGameConfig(string|int $chat_id, ?string $key);

    public function gameEvent(string|int $chat_id, string $event, string $value);
}