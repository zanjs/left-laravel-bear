@extends('layouts.app')

@section('title', ' ')

@section('content')

    <main class="page-content section-75 section-md-top-103 section-md-bottom-103">
        <!-- Events-->
        <section>
            <div class="shell">
                <div class="range range-xs-center">
                    <div class="cell-sm-10 cell-lg-8">
                        <!-- List inline marked-->
                        <ul class="list-inline list-marked list-marked-type-2 list-inline-13 list-silver-chalice list-marked-silver-chalice font-accent text-bold text-spacing-inverse-25">
                            <li><a href="#" class="text-turquoise">Yacht shows</a></li>
                            <li><a href="#" class="text-turquoise">Luxury events</a></li>
                            <li><a href="#" class="text-turquoise">Sporting events</a></li>
                            <li><a href="#" class="text-turquoise">Regattas</a></li>
                            <li><a href="#" class="text-turquoise">Business events</a></li>
                        </ul>
                    </div>
                </div>
                <div class="offset-top-44"><svg width="135" height="4" viewBox="0 0 135 4"><path style="fill:#efefef" d="M 2.3227821,2.0449621 -0.03800192,0.07659815 3.1569295,1.2434136 c 2.5401262,0.9276753 3.7227371,0.8843425 5.7702062,-0.2114297 1.9784883,-1.05885455 2.8486773,-1.10484315 3.7550683,-0.19845145 1.484362,1.48436175 5.031902,1.52768545 6.480446,0.079141 0.80087,-0.80087 2.091954,-0.7421935 4.740217,0.21543085 2.979173,1.0772827 4.014876,1.0816979 5.707987,0.024332 1.636053,-1.02173165 2.672814,-1.04140395 4.959784,-0.09411 2.271014,0.9406851 3.546951,0.926086 5.946995,-0.068045 2.294075,-0.95023691 3.340846,-0.9804738 4.2,-0.1213203 1.486272,1.48627181 5.021657,1.46707331 6.524159,-0.035429 0.906391,-0.9063917 1.77658,-0.8604031 3.755068,0.19845151 1.998288,1.0694512 3.235083,1.1291955 5.520207,0.2666579 2.160373,-0.81544991 3.729489,-0.81544991 5.889862,0 2.285124,0.8625376 3.521919,0.8027933 5.520207,-0.2666579 1.978488,-1.05885461 2.848677,-1.10484321 3.755068,-0.19845151 1.484362,1.48436181 5.031902,1.52768551 6.480446,0.079141 0.80087,-0.80087 2.071309,-0.7496588 4.664419,0.18802211 2.948695,1.0662618 4.004871,1.0526028 6.119554,-0.079141 1.963517,-1.05084213 2.82919,-1.09441383 3.735581,-0.18802223 1.484362,1.48436183 5.031906,1.52768553 6.480446,0.079141 0.80087,-0.80087 2.07131,-0.7496587 4.66442,0.18802203 2.90135,1.0491408 4.00935,1.0502085 5.96095,0.00574 1.95708,-1.04739773 2.78238,-1.04236583 4.49536,0.027409 1.72387,1.0765766 2.7384,1.078836 5.68684,0.012665 2.7988,-1.01205733 3.90688,-1.03357323 5.03447,-0.097755 0.7952,0.6599557 2.61547,0.976326 4.04505,0.703045 2.37877,-0.4547301 2.464,-0.3616463 1.00491,1.097441 -1.45908,1.4590874 -1.84642,1.4453923 -4.56661,-0.1614625 -2.74627,-1.6222625 -3.15865,-1.6336716 -5.42297,-0.1500332 -2.18024,1.4285487 -2.76388,1.4437811 -5.28891,0.1380357 -2.47017,-1.2773717 -3.19253,-1.2820786 -5.57019,-0.036295 -2.37022,1.241885 -3.09846,1.241885 -5.5,0 -2.40452,-1.2434263 -3.13028,-1.2416208 -5.52624,0.013748 C 99.763844,3.9190467 99.15734,3.9133435 97.292676,2.607281 95.404183,1.2845297 94.833305,1.2870756 92.236706,2.6298291 89.597447,3.9946429 89.064352,3.982798 86.815628,2.5093781 84.52735,1.0100401 84.120628,1.0069808 81.884292,2.4722843 79.735334,3.8803355 79.122431,3.8992836 76.704532,2.6324181 74.291896,1.3683104 73.641159,1.3851356 71.292806,2.7723415 68.845881,4.2177761 68.408458,4.2082649 66.042738,2.6581862 63.671614,1.1045661 63.264662,1.0965199 61.032448,2.5591227 58.880523,3.969118 58.285419,3.9846813 55.824584,2.69532 53.371101,1.4098101 52.768844,1.4213922 50.673394,2.7943834 48.512048,4.2105516 48.042674,4.1968405 45.408131,2.6405778 42.740652,1.0648591 42.325185,1.0568632 40.065069,2.5377482 37.884828,3.9662969 37.30119,3.9815293 34.776157,2.6757839 32.280231,1.3850906 31.599207,1.3855448 29.12951,2.6795501 26.631592,3.9883412 26.052244,3.9748646 23.889307,2.5576544 21.678633,1.1091646 21.182621,1.1064374 18.434276,2.5276615 15.749926,3.9157928 15.172991,3.9243054 13.287423,2.6036024 11.426177,1.2999346 10.817722,1.295134 8.3625636,2.5647457 4.8669338,4.3724061 5.142697,4.3961383 2.3227821,2.0449621 Z"/></svg></div>
                <div class="range range-xs-center offset-top-53">
                    <div class="cell-sm-10 cell-lg-10">
                        <h5 class="text-spacing-0">July 28 to August 03</h5>
                        <div class="offset-top-10">
                            <h1 class="text-spacing-inverse-50">Sydney International Boat Show</h1>
                        </div>
                        <div class="offset-top-30 offset-md-top-50"><img src="/anl/images/blog/post-12-970x456.jpg" width="970" height="456" alt="" class="img-responsive center-block"></div>
                        <div class="range range-xs-center offset-top-25 offset-md-top-44 text-left">
                            <div class="cell-sm-6">
                                <p class="text-spacing-0">The Sydney International Boat Show is the largest recreational marine event in the southern hemisphere. It first ran in 1968 and since then has played host to over three million visitors who arrive to be entertained, educated, and to meet experts.</p>
                            </div>
                            <div class="cell-sm-6 offset-top-25 offset-sm-top-0">
                                <p class="text-spacing-0">The Show is located at two great waterfront sites on Sydney Harbour. This year it wil take place at the in-water exhibits in Cockle Bay Marina in Darling Harbour. The undercover exhibits will be located at the Sydney Exhibition Centre @ Glebe Island.</p>
                            </div>
                        </div>
                        <div class="offset-top-35">
                            <div>
                                <p class="font-accent text-spacing-inverse-25 text-mine-shaft text-bold">Learn more at</p>
                            </div>
                            <div class="offset-top-4">
                                <p class="font-accent text-bold"><a href="#" class="text-turquoise">WWW.demolink.org</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-top-25"><svg width="135" height="4" viewBox="0 0 135 4"><path style="fill:#efefef" d="M 2.3227821,2.0449621 -0.03800192,0.07659815 3.1569295,1.2434136 c 2.5401262,0.9276753 3.7227371,0.8843425 5.7702062,-0.2114297 1.9784883,-1.05885455 2.8486773,-1.10484315 3.7550683,-0.19845145 1.484362,1.48436175 5.031902,1.52768545 6.480446,0.079141 0.80087,-0.80087 2.091954,-0.7421935 4.740217,0.21543085 2.979173,1.0772827 4.014876,1.0816979 5.707987,0.024332 1.636053,-1.02173165 2.672814,-1.04140395 4.959784,-0.09411 2.271014,0.9406851 3.546951,0.926086 5.946995,-0.068045 2.294075,-0.95023691 3.340846,-0.9804738 4.2,-0.1213203 1.486272,1.48627181 5.021657,1.46707331 6.524159,-0.035429 0.906391,-0.9063917 1.77658,-0.8604031 3.755068,0.19845151 1.998288,1.0694512 3.235083,1.1291955 5.520207,0.2666579 2.160373,-0.81544991 3.729489,-0.81544991 5.889862,0 2.285124,0.8625376 3.521919,0.8027933 5.520207,-0.2666579 1.978488,-1.05885461 2.848677,-1.10484321 3.755068,-0.19845151 1.484362,1.48436181 5.031902,1.52768551 6.480446,0.079141 0.80087,-0.80087 2.071309,-0.7496588 4.664419,0.18802211 2.948695,1.0662618 4.004871,1.0526028 6.119554,-0.079141 1.963517,-1.05084213 2.82919,-1.09441383 3.735581,-0.18802223 1.484362,1.48436183 5.031906,1.52768553 6.480446,0.079141 0.80087,-0.80087 2.07131,-0.7496587 4.66442,0.18802203 2.90135,1.0491408 4.00935,1.0502085 5.96095,0.00574 1.95708,-1.04739773 2.78238,-1.04236583 4.49536,0.027409 1.72387,1.0765766 2.7384,1.078836 5.68684,0.012665 2.7988,-1.01205733 3.90688,-1.03357323 5.03447,-0.097755 0.7952,0.6599557 2.61547,0.976326 4.04505,0.703045 2.37877,-0.4547301 2.464,-0.3616463 1.00491,1.097441 -1.45908,1.4590874 -1.84642,1.4453923 -4.56661,-0.1614625 -2.74627,-1.6222625 -3.15865,-1.6336716 -5.42297,-0.1500332 -2.18024,1.4285487 -2.76388,1.4437811 -5.28891,0.1380357 -2.47017,-1.2773717 -3.19253,-1.2820786 -5.57019,-0.036295 -2.37022,1.241885 -3.09846,1.241885 -5.5,0 -2.40452,-1.2434263 -3.13028,-1.2416208 -5.52624,0.013748 C 99.763844,3.9190467 99.15734,3.9133435 97.292676,2.607281 95.404183,1.2845297 94.833305,1.2870756 92.236706,2.6298291 89.597447,3.9946429 89.064352,3.982798 86.815628,2.5093781 84.52735,1.0100401 84.120628,1.0069808 81.884292,2.4722843 79.735334,3.8803355 79.122431,3.8992836 76.704532,2.6324181 74.291896,1.3683104 73.641159,1.3851356 71.292806,2.7723415 68.845881,4.2177761 68.408458,4.2082649 66.042738,2.6581862 63.671614,1.1045661 63.264662,1.0965199 61.032448,2.5591227 58.880523,3.969118 58.285419,3.9846813 55.824584,2.69532 53.371101,1.4098101 52.768844,1.4213922 50.673394,2.7943834 48.512048,4.2105516 48.042674,4.1968405 45.408131,2.6405778 42.740652,1.0648591 42.325185,1.0568632 40.065069,2.5377482 37.884828,3.9662969 37.30119,3.9815293 34.776157,2.6757839 32.280231,1.3850906 31.599207,1.3855448 29.12951,2.6795501 26.631592,3.9883412 26.052244,3.9748646 23.889307,2.5576544 21.678633,1.1091646 21.182621,1.1064374 18.434276,2.5276615 15.749926,3.9157928 15.172991,3.9243054 13.287423,2.6036024 11.426177,1.2999346 10.817722,1.295134 8.3625636,2.5647457 4.8669338,4.3724061 5.142697,4.3961383 2.3227821,2.0449621 Z"/></svg></div>
                <div class="offset-top-55">
                    <h5 class="text-spacing-0">latest events</h5>
                    <div class="range range-xs-center offset-top-40">
                        <div class="cell-sm-6 cell-md-4">
                            <!-- Post Event-->
                            <div class="post-inspiration post-inspiration-visible post-inspiration-event">
                                <div class="post-inspiration-img-wrap"><img src="/anl/images/blog/post-16-370x282.jpg" width="370" height="282" alt=""></div>
                                <div class="post-inspiration-body">
                                    <div>
                                        <p class="font-accent text-bold text-spacing-inverse-25">September 06 to 11</p>
                                    </div>
                                    <div class="offset-top-4">
                                        <h5 class="text-capitalize">Cannes Yachting Festival 2016</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-20 offset-md-top-40">
                                <p class="text-spacing-0">First gathering of the season, the Cannes Yachting Festival show brings together the key players in pleasure boating and international luxury yachting to showcase their new vessels.</p>
                            </div>
                            <div class="btn-both-lines btn-both-lines-gray-lighter offset-top-15 offset-md-top-35"><a href="single-inspiration.html" class="btn-link text-spacing-inverce-25 text-turquoise">read more</a></div>
                        </div>
                        <div class="cell-sm-6 cell-md-4 offset-top-64 offset-sm-top-0">
                            <!-- Post Event-->
                            <div class="post-inspiration post-inspiration-visible post-inspiration-event">
                                <div class="post-inspiration-img-wrap"><img src="/anl/images/blog/post-17-370x282.jpg" width="370" height="282" alt=""></div>
                                <div class="post-inspiration-body">
                                    <div>
                                        <p class="font-accent text-bold text-spacing-inverse-25">September 15 to 18</p>
                                    </div>
                                    <div class="offset-top-4">
                                        <h5 class="text-capitalize">Newport Boat <br> Show 2016</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-20 offset-md-top-40">
                                <p class="text-spacing-0">The Newport International Boat Show encompasses 13 acres of historic Newport Harbor allowing you to enjoy everything the City-by-the-Sea has to offer.</p>
                            </div>
                            <div class="btn-both-lines btn-both-lines-gray-lighter offset-top-15 offset-md-top-35"><a href="single-inspiration.html" class="btn-link text-spacing-inverce-25 text-turquoise">read more</a></div>
                            <div class="veil reveal-lg-inline-block offset-lg-top-20">
                                <h5 class="text-spacing-20 text-silver-chalice">...</h5>
                            </div>
                        </div>
                        <div class="cell-sm-6 cell-md-4 offset-top-64 offset-md-top-0">
                            <!-- Post Event-->
                            <div class="post-inspiration post-inspiration-visible post-inspiration-event">
                                <div class="post-inspiration-img-wrap"><img src="/anl/images/blog/post-18-370x282.jpg" width="370" height="282" alt=""></div>
                                <div class="post-inspiration-body">
                                    <div>
                                        <p class="font-accent text-bold text-spacing-inverse-25">October 06 to 08</p>
                                    </div>
                                    <div class="offset-top-4">
                                        <h5 class="text-capitalize">Yachtec Palma <br> Regatta 2016</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-20 offset-md-top-40">
                                <p class="text-spacing-0">Yachtec owners are invited to take part in the 2016 Palma Regatta which will follow a similar format to our previous events, with the emphasis on a fun and friendly occasion for all the family.</p>
                            </div>
                            <div class="btn-both-lines btn-both-lines-gray-lighter offset-top-15 offset-md-top-35"><a href="single-inspiration.html" class="btn-link text-spacing-inverce-25 text-turquoise">read more</a></div>
                        </div>
                        <div class="cell-sm-6 cell-md-4 offset-top-64 offset-md-top-40">
                            <!-- Post Event-->
                            <div class="post-inspiration post-inspiration-visible post-inspiration-event">
                                <div class="post-inspiration-img-wrap"><img src="/anl/images/blog/post-19-370x282.jpg" width="370" height="282" alt=""></div>
                                <div class="post-inspiration-body">
                                    <div>
                                        <p class="font-accent text-bold text-spacing-inverse-25">October 06 to 11</p>
                                    </div>
                                    <div class="offset-top-4">
                                        <h5 class="text-capitalize">United States Sailboat Show 2016</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-20 offset-md-top-40">
                                <p class="text-spacing-0">In October, sailors from around the globe gather on miles of docks in beautiful downtown historic Annapolis for the United States Sailboat Show, which is recognized as the largest boat show.</p>
                            </div>
                            <div class="btn-both-lines btn-both-lines-gray-lighter offset-top-15 offset-md-top-35"><a href="single-inspiration.html" class="btn-link text-spacing-inverce-25 text-turquoise">read more</a></div>
                        </div>
                        <div class="cell-sm-6 cell-md-4 offset-top-64 offset-md-top-40">
                            <!-- Post Event-->
                            <div class="post-inspiration post-inspiration-visible post-inspiration-event">
                                <div class="post-inspiration-img-wrap"><img src="/anl/images/blog/post-20-370x282.jpg" width="370" height="282" alt=""></div>
                                <div class="post-inspiration-body">
                                    <div>
                                        <p class="font-accent text-bold text-spacing-inverse-25">January 06 to 15</p>
                                    </div>
                                    <div class="offset-top-4">
                                        <h5 class="text-capitalize">London <br> Boat Show 2017</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-20 offset-md-top-40">
                                <p class="text-spacing-0">Begin your own journey of discovery at the 2017 London Boat Show. Europe's first Boat Show and the world’s renowned event, now in its 63rd year will be taking place from 6 - 15 January 2017.</p>
                            </div>
                            <div class="btn-both-lines btn-both-lines-gray-lighter offset-top-15 offset-md-top-35"><a href="single-inspiration.html" class="btn-link text-spacing-inverce-25 text-turquoise">read more</a></div>
                            <div class="veil reveal-lg-inline-block offset-lg-top-20">
                                <h5 class="text-spacing-20 text-silver-chalice">...</h5>
                            </div>
                        </div>
                        <div class="cell-sm-6 cell-md-4 offset-top-64 offset-md-top-40">
                            <!-- Post Event-->
                            <div class="post-inspiration post-inspiration-visible post-inspiration-event">
                                <div class="post-inspiration-img-wrap"><img src="/anl/images/blog/post-21-370x282.jpg" width="370" height="282" alt=""></div>
                                <div class="post-inspiration-body">
                                    <div>
                                        <p class="font-accent text-bold text-spacing-inverse-25">April 27 to May 07</p>
                                    </div>
                                    <div class="offset-top-4">
                                        <h5 class="text-capitalize">Palma Superyacht <br> Show 2017</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-20 offset-md-top-40">
                                <p class="text-spacing-0">The Palma Superyacht Show offers a quality selection of yachts above 24 metres for sale and charter and has become an important event in the yachting calendar.</p>
                            </div>
                            <div class="btn-both-lines btn-both-lines-gray-lighter offset-top-15 offset-md-top-35"><a href="single-inspiration.html" class="btn-link text-spacing-inverce-25 text-turquoise">read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection