<?php

// Composer�ǥ��󥹥ȡ��뤷���饤�֥������ɤ߹���
require_once __DIR__ . '/vendor/autoload.php';

// ���������ȡ������Ȥ�CurlHTTPClient�򥤥󥹥��󥹲�
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient(getenv('CHANNEL_ACCESS_TOKEN'));
// CurlHTTPClient�ȥ�������åȤ�Ȥ�LINEBot�򥤥󥹥��󥹲�
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => getenv('CHANNEL_SECRET')]);
// LINE Messaging API���ꥯ�����Ȥ���Ϳ������̾�����
$signature = $_SERVER['HTTP_' . \LINE\LINEBot\Constant\HTTPHeader::LINE_SIGNATURE];

// ��̾�������������å��������Ǥ���Хꥯ�����Ȥ�ѡ����������
$events = $bot->parseEventRequest(file_get_contents('php://input'), $signature);
// ����˳�Ǽ���줿�ƥ��٥�Ȥ�롼�פǽ���
foreach ($events as $event) {
    // �ƥ����Ȥ��ֿ�
    $bot->replyText($event->getReplyToken(), 'TextMessage');
}

function replyTextMessage($bot,$replyToken,$text){
	$response = $bot->replyMessage($replyToken, new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($text));
	if(!$reponse->isSucceeded(){
		error_log('Failed! ',$response->getHTTPStatus,' ',$response->getRawBody());
	}
}
?>
