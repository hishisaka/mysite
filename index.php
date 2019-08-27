<?php
DEFINE("ACCESS_TOKEN","�����˥��������ȡ�����");
DEFINE("SECRET_TOKEN","�����˥�������åȥȡ�����");

use \LINE\LINEBot\HTTPClient\CurlHTTPClient;
use \LINE\LINEBot;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;
use LINE\LINEBot\MessageBuilder\MultiMessageBuilder;
use \LINE\LINEBot\Constant\HTTPHeader;

//LINESDK���ɤ߹���
require_once(__DIR__."/vendor/autoload.php");

//LINE���������Ƥ�����true�ˤʤ�
if(isset($_SERVER["HTTP_".HTTPHeader::LINE_SIGNATURE])){

//LINEBOT��POST�������Ƥ������ǡ����μ���
  $inputData = file_get_contents("php://input");

//LINEBOTSDK������
  $httpClient = new CurlHTTPClient(ACCESS_TOKEN);
  $Bot = new LINEBot($HttpClient, ['channelSecret' => SECRET_TOKEN]);
  $signature = $_SERVER["HTTP_".HTTPHeader::LINE_SIGNATURE]; 
  $Events = $Bot->parseEventRequest($InputData, $Signature);

//���̤˥�å��������������ʣ��ʬ�Υǡ�����Ʊ���������Ƥ��뤿�ᡢforeach�򤷤Ƥ��롣
��������foreach($Events as $event){
    $SendMessage = new MultiMessageBuilder();
    $TextMessageBuilder = new TextMessageBuilder("���ݤ�");
    $SendMessage->add($TextMessageBuilder);
    $Bot->replyMessage($event->getReplyToken(), $SendMessage);
  }
}