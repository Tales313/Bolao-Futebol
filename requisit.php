<?php
    function trasTime($name){
    $times = ['Grêmio FBPA'=>'Grêmio','Ceará SC'=> 'Ceará','CR Vasco da Gama'=>'Vasco',
              'Botafogo FR'=>'Botafogo','Cruzeiro EC'=>'Cruzeiro','Santos FC'=>'Santos',
              'EC Bahia'=>'Bahia','CA Paranaense'=>'Atletico Pr','SC Corinthians Paulista'=>'Corinthians',
              'Chapecoense AF'=>'Chapecoense','Paraná Clube'=>'Paraná','EC Vitória'=>'Vitória',
              'CR Flamengo'=>'Flamengo','América FC (MG)'=>'America Mg', 'CA Mineiro'=>'Atletico Mg',
              'São Paulo FC'=>'São Paulo','SE Palmeiras'=>'Palmeiras','Fluminense FC'=>'Fluminense',
              'SC Recife'=>'Sport','SC Internacional'=>'Internacional'];
              return $times[$name];
    return $name;

    }
    
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
        <td><span class="time"></span> <span class="name"><?=trasTime($value->homeTeam->name)?></span></td>
        <td><input placeholder="    0" id="placar1"  type="text" class="placar1" value='0'></td>
        <td><input placeholder="    0" id="placar2" type="text" class="placar2" value='0'></td>
        <td><span class="time"></span> <span class="name"><?=trasTime($value->awayTeam->name)?></span></td>
    </tr>
    <?php }
    /*<?=$value->score->fullTime->homeTeam?>
    <?=$value->score->fullTime->awayTeam?>*/
?>