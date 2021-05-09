<?php
//Параметры GET
//$adName = $_GET['utm_creative'];
//$campaignName = $_GET['utm_campaign'];
//$siteSourceName = $_GET['siteSourceName'];
//$placement = $_GET['utm_placement'];

//$campaignId = $_GET['campaign_id'];
//$adsetId = $_GET['adset_id'];
//$adId = $_GET['ad_id'];
//$adsetName = $_GET['adset_name'];

//$AllLinks = '?utm_creative='.$adName.'&utm_campaign='.$campaignName.'&utm_source='.$siteSourceName.'&utm_placement='.$placement.'&campaign_id='.$campaignId.'&adset_id'.$adsetId.'&ad_id='.$adId.'&adset_name='.$adsetName;

//$NewLinks = '';

//if($NewLinks!='')
//{
//	$AllLinks = $allUrl;
//}

//Передача полного пути
// Query params are: utm_creative={{ad.name}}&utm_campaign={{campaign.name}}&utm_source={{site_source_name}}&utm_placement={{placement}}&campaign_id={{campaign.id}}&adset_id={{adset.id}}&ad_id={{ad.id}}&adset_name={{adset.name}}&fbclid={{fbclid}}&fbp={{fbp}}

require_once dirname(__FILE__) . '/kclient.php';
$client = new KClickClient('https://komariksystem.pro/api.php', 'hPJd33KGd2vxKVJw');
$client->sendAllParams();       // to send all params from page query
//$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->debug();              // to enable debug mode and show the errors
$client->execute();             // request to api, show the output and continue
//$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>
