<?php
    
    $uri = 'http://api.football-data.org/v2/competitions/BSA/matches/?matchday=1';
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: 99a79e8210c54db280d999538bca5aa3';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    $matches = json_decode($response);
    $currentMatch = $matches->matches[0]->season->currentMatchday;
    if($currentMatch !=1){
        $uri = 'http://api.football-data.org/v2/competitions/BSA/matches/?matchday='.$currentMatch.'';
        $reqPrefs['http']['method'] = 'GET';
        $reqPrefs['http']['header'] = 'X-Auth-Token: 99a79e8210c54db280d999538bca5aa3';
        $stream_context = stream_context_create($reqPrefs);
        $response = file_get_contents($uri, false, $stream_context);
        $matches = json_decode($response);
    }
    foreach ($matches->matches as $key => $value) {?>
    <tr>
        <td><span class="time"></span> <span class="name"><?=$value->homeTeam->name?></span></td>
        <td><input placeholder="    0" id="placar1"  type="text" class="placar1" value='0'></td>
        <td><input placeholder="    0" id="placar2" type="text" class="placar2" value='0'></td>
        <td><span class="time"></span> <span class="name"><?=$value->awayTeam->name?></span></td>
    </tr>
    <?php }
    /*<?=$value->score->fullTime->homeTeam?>
    <?=$value->score->fullTime->awayTeam?>*/
?>