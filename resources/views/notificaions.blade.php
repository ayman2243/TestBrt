@extends('layouts.app')

@section('content')

<?php

$cats = ['subscriptions', 'recommended', 'trend', 'games', 'movies', 'lifestyle', 'music', 'vlogs'];

$pis = [
'https://i.ytimg.com/vi/Salz7uGp72c/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCY5eXW-_pLfndusP0teT1uqqvKmw',
'https://i.ytimg.com/vi/KzIimQkl6og/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDkPcdlj55FDYroltcQAgrWGW60eg',
'https://i.ytimg.com/vi/8DMnAAvakh0/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDM-NKltrQuQBzteKaPkBIop8McvA',
'https://i.ytimg.com/vi/nQSUw0MO9BM/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBJpOOnHqZVKdc2aM-8fy_hX10QRw',
'https://i.ytimg.com/vi/lM80vOSacys/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLB2bnymuBvmXnWo2RA81mbwObBBhA',
'https://i.ytimg.com/vi/XeEYaX82jSE/hqdefault.jpg?custom=true&w=336&h=188&stc=true&jpg444=true&jpgq=90&sp=68&sigh=a1Ga9Wwd9-rX5USrdnW1a_JslJI',
'https://i.ytimg.com/vi/mYAahN1G8Y8/hqdefault.jpg?custom=true&w=336&h=188&stc=true&jpg444=true&jpgq=90&sp=68&sigh=Q7G9ExtZGWBKTZ7eC42c--VW7Rk',
];

$icons = [
  '<i class="fa fa-etsy trend green" aria-hidden="true"  title="Etsy"></i>',
  '<i class="fa fa-film trend blue" aria-hidden="true"  title="film"></i>',
  '<i class="fa fa-gamepad trend yellow" aria-hidden="true"  title="gamepad"></i>',
  '<i class="fa fa-fire trend red" aria-hidden="true"  title="Trend"></i>',
  ''
];

$randcat = array_rand($cats, 1);

?>

<div class="container userNotifyer">
    <div class="row">
        
        <div class="notify1">

            <h3>
                <span style=" display: inline-block; border-bottom: solid 1px red; padding-bottom: 10px;">Subscription Notifcations</span>
                <a class="waves-effect waves-light btn clearHistoryBtn">Make as Read</a>
            </h3>
        
            <div class="goldnotify1">
                
                @for($i = 0; $i <= 5; $i++)

                      <div class="card">
                        <div class="card-image" title="channel name also chech if big what will do.">
                          <a href="{{url('/v/12')}}"><img src="{{asset('/images/bgTh.png')}}" data-src="{{$pis[array_rand($pis)]}}"></a>
                          <span class="card-title">
                              <span class="time">{{rand(01,59)}}:11</span>
                              <a href="#"><span class="category">{{$cats[array_rand($cats)]}}</span></a>
                              <span class="views">{{rand(1,99)}}M views</span>
                          </span> 
                          <div class="cardIcons">
                            <?php echo $icons[array_rand($icons)]; ?>
                          </div>
                          <div class="cardActions">
                            <?php $ix = rand(1,99999999).rand(1,99999999).rand(1,99999999); ?>
                            <a class="videoAction21" data-activates='videoAction{{$ix}}' href="#"><i class="material-icons">keyboard_arrow_down</i></a>
                            <div id='videoAction{{$ix}}' class='dropdown-content videoAction'>
                                <ul>
                                    <li>    
                                        <form action="#">
                                            <input type="checkbox" id="test6" checked="checked" /> 
                                            <label for="test6">Watch Later <span><i style="font-size: 15px; color: #999;" class="fa fa-lock" aria-hidden="true"></i></span></label>
                                        </form>
                                    </li>
                                    <li>    
                                        <form action="#">
                                            <input type="checkbox" id="test3" checked="checked" class="checkbtr" /> 
                                            <label for="test3">My Private List <span><i style="font-size: 15px; color: #999;" class="fa fa-globe" aria-hidden="true"></i></span></label>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                          </div>
                          <div class="colorBorder">
                          </div>
                        </div>
                        <div class="card-content">
                          <h4 class="ellipsis" title="A Beautiful Mind Trailer">Turbo Official Trailer #2 (2013) - Ryan Reynolds, Bill Hader Movie HD</h4>
                          <a href="#"><p class="userInfo ellipsis"><img class="responsive-img userAvatar" src="{{asset('/images/bgTh.png')}}" data-src="{{ url('public/uploads/us_avatars/df.jpg') }}"> <span>Ayman Aljohary</span></p>
                          </a>
                          <span style="font-size: 10px; color: #666; margin-left: 33px; position: relative; top: -10px;">02/11/2018 20:11am</span>

                        </div>
                      </div>
                          
                @endfor

            </div>

            <div class="LoadMoreBtn">
                  <a class="waves-effect waves-light btn" style="background-color: #2d2d2d !important; margin-top: 0 ;">Load More</a>
            </div>


        </div>
        
    </div>
</div>
@endsection
