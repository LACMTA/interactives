<?php
// let's add a helper function to see if a snippet exists
// drg 6/15
// function snippetExists($apage)
// {
//   try {
//     $uid = $apage->uid();
//     $snippetdir = kirby()->roots()->snippets();
//     $sname = $snippetdir . '/' . $uid . '.php';
//     return file_exists($sname);
//   } catch (Exception $e) {
//     return 0;
//   }
//
// }

// more direct approach -- return a snippet
function getSnippet($apage,$default="item")
{
  if ( is_array($apage) ):
    // sent an array -- get out fast!
    return $default;
  endif;

  $uid = $apage->uid();
  $snippetdir = kirby()->roots()->snippets();
  $sname = $snippetdir . '/' . $uid . '.php';

  if ($apage->mysnippet()!= ""):
    $mysnippet = $apage->mysnippet()->text();
  else:
    // null page, get out fast!
    return $default;
  endif;

  if ( isset($mysnippet) ):
    // return the override
    return $apage->mysnippet();
  endif;

  if ( file_exists($sname) ):
    // no override? check for snippet named for uid
    return $apage->uid();
  else:
    // nothing here, send the default snippet
    return $default;
  endif;
}

function setVars($apage,$asnippet="item")
{

  if ( is_array($apage) ):
    // sent an array -- get out fast!
    return array('error','error');
  endif;

  $mysnippet = getSnippet($apage,$asnippet);
  
  if ( $apage->subtitle() != null ):
    $displaytitle = $apage->subtitle();
  else:
    $displaytitle = $apage->title();
  endif;

  return array($displaytitle,$mysnippet);
 
}


?>
