<?php
$instagramclass = '/usr/local/var/www/kirby/vendor/cosenary/instagram/src/Instagram.php';
require_once($instagramclass);
use MetzWeb\Instagram\Instagram;

# do this:
// https://instagram.com/oauth/authorize/?client_id=d4fef67f99454158bb2e440d06164e22&redirect_uri=http://kirby.dev&response_type=token
# get this:
// http://kirby.dev/#access_token=528727108.d4fef67.1bbe2457646b45fbbfe8d1330d8f41df

$client_id  ='d4fef67f99454158bb2e440d06164e22';
$user_id    ='528727108';
$token      ='528727108.d4fef67.1bbe2457646b45fbbfe8d1330d8f41df';

function instagrambadge($tag='MetroPresents',$count=100,$client_id='d4fef67f99454158bb2e440d06164e22',$token='528727108.d4fef67.1bbe2457646b45fbbfe8d1330d8f41df') {

    // Initialize class with client_id
    // Register at http://instagram.com/developer/ and replace client_id with your own
    $instagram = new Instagram($client_id);

    // set user access token
    $instagram->setAccessToken($token);

    // get all user likes
    $likes = $instagram->getUserLikes($count);

    // Get latest photos according to #hashtag keyword
    $media = $instagram->getTagMedia($tag,$count);

    // echo "<pre>";
    // print_r($likes);
    // echo "</pre>";

    // $media = $likes->getTagMedia($tag,$count);

    // Show results
    // Using for loop will cause error if there are less photos than the limit
    // foreach(array_slice($media->data, 0, $count) as $data)
    // {
    //   print_r($data->images);
    // }

    return $media->data;

  }
?>
