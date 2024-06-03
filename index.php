<?php

// Get your bot's token and chat ID.
$botToken = "YOUR_BOT_TOKEN";
$chatId = "YOUR_CHAT_ID";

// Get the form data.
$name = $_POST["name"];
$message = $_POST["message"];

// Prepare the Telegram message.
$telegramMessage = [
  "chat_id" => $chatId,
  "text" => "Form data received:\n\nName: $name\nMessage: $message",
];

// Send the Telegram message.
$ch = curl_init("https://api.telegram.org/bot$botToken/sendMessage");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $telegramMessage);
curl_exec($ch);
curl_close($ch);

// Success!
echo "Data sent successfully!";

?>
