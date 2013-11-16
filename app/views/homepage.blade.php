<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stylesheets('bootstrap')
    @javascripts('startup')
</head>
<body itemscope itemtype="http://schema.org/WebPage">
<header class="topbar">
    <!-- Static navbar -->
    <div class="navbar container" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"><i class="fa fa-home fa-2x"></i></a></li>
                <li><a href="#"><i class="fa fa-users"></i> Members</a></li>
                <li><a href="#"><i class="fa fa-money"></i> Donate</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-cogs"></i> Administration</a></li>
                <li><a href="#" class="btn btn-success"><div style="font-weight: bold;">Login</div></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</header>
<div class="container wrap">
    <div class="row">
        <div class="col-md-8">
			<!-- Main content -->
			<section class="post">
			<div class="well">
				<div class="row">
					<div class = "col-xs-2">
						<div class = "date-section">
							<div class = "date-day">
								<div class = "big-text">15th</div>
							</div>
							<div class="date-month">
								<h1 class = "single-title">Nov</h1>
							</div>
						</div>
					</div>
					<div class="col-xs-10">
						<h1 class="single-title">What's in the box?</h1>
						<div class = "subtitle-single">Further updates being pushed to CS:GO</div>
						<p>
                            Today’s update includes gameplay adjustments and spectator features, along with map changes driven by pro feedback.
                            We’re counting down the days until the 2013 DreamHack SteelSeries CS:GO Championship. Are you ready?
                            Don’t forget to link your Steam and Twitch accounts for a chance to receive keyless DreamHack Winter 2013 Souvenir Packages.
						</p>
                        <img src="http://blog.counter-strike.net/wp-content/uploads//2013/11/SouvenirPackageStickers.png" class="thumbnail" />
                        <p>
                            These keyless Souvenir Packages are the only way to get souvenir weapons, marked by one of several exclusive event stickers.
                            There’s more to come, so stay tuned as we approach the big event!
                            Speaking of events, CS:GO fans should tune in this weekend for the TECHLABS Cup 2013 Grand Final in Moscow. Four teams will compete for the $20,000 cup – Ukraine Astana Dragons, Poland Universal Soldiers, Ukraine Natus Vincere and Germany 3DMAX.
                            There’s even more than money on the line for the latter two, as they will be vying for one of the last remaining DreamHack Winter spots.
                        </p>
                    </div>       
				</div>
			</div>
			</section>
            <section class="post">
                <div class="well">
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="date-section">
                                <div class="date-day">
                                    <div class="big-text">29th</div>
                                </div>
                                <div class="date-month">
                                    <h1 class="single-title">Oct</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-10">
                            <h1 class="single-title">Scream Fortress 2013 is LIVE!</h1>
                            <div class="subtitle-single">Scream is finally here</div>
                            <img src="http://media.steampowered.com/steam/news/11726/blog_imageh2013.jpg" class="thumbnail" />
                            <p>
                                Ahoy, buoys and gulls, it’s almost Docktober 31st, and that means it’s time for the Fifth Annual Team Fortress Tort-urous Halloween Special, which this year is based entirely around the terrifyingly complex legal questions that haunt maritime law. AWOOOOOOOO! [Sound of receiving a jury summons]
                                <br /><br />
                                And that horrifying description of an obviously terrible idea for a Halloween update — an idea so dreadful that we gave up on it almost fourteen hours ago — was just the FIRST of this year’s many spine-chilling, spine-tingling, all-around spinal cord-injuring shocks. We have one word of advice to those of you who survived our previous four Halloween Specials: Stop lying. These updates will kill you — GUARANTEED! [sound of our lawyers reading that sentence]
                                <br /><br />
                                This year's Scream Fortress map is Helltower, a Payload Race variation, with at least one major difference: You're all powerful magicians. Everybody gets a spellbook gifted to them automatically, which you can equip in your Action Slot in order to pick up and cast spells. The team that wins the race will be granted a buff for the final climactic battle, where you will fight for the ultimate Halloween reward: Your own lives. And a reward.
                                <br /><br />
                                So, fear fans, it’s time to put aside your precious laws of the sea, because this year anything can happen. Ghosts? Yes! Forbidden magic? Yes! Skeletons? Oh, yes. A Hellmouth? Obviously. A corpse? Yours. Really? Check your pulse. The murderer? You. Anyway, we’d love to sit here and shock you to death all day, but the update’s live.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-4">
            <div class="sidebar">
                <h4><i class="fa fa-cloud"></i> Stay Connected</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Server Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jailbreak</td>
                            <td>Offline <i style="color:#00FF00" class="fa fa-chain-broken"></i></td>
                        </tr>
                        <tr>
                            <td>DayZ</td>
                            <td>Online <i style="color:#FF0000" class="fa fa-link"></i></td>
                        </tr>
                        <tr>
                            <td>Minigames</td>
                            <td>Offline <i style="color:#00FF00" class="fa fa-chain-broken"></i></td>
                        </tr>
                    </tbody>
                </table>
                <h4><i class="fa fa-ellipsis-v"></i> Latest Activity</h4>
                <ul class="nav nav-tabs">
                    <li><a href="#Applications" data-toggle="tab">Apps</a></li>
                    <li><a href="#Bans" data-toggle="tab">Bans</a></li>
                    <li><a href="#Logins" data-toggle="tab">Logins</a></li>
                    <li><a href="#Donations" data-toggle="tab">Donations</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="Applications">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th><i class="fa fa-comments-o"></i> Comments</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Citrix</td>
                                    <td>50</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default"><i class="fa fa-book"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>B20</td>
                                    <td>254</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default"><i class="fa fa-book"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>RoXide</td>
                                    <td>13</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default"><a href="#" data-toggle="tooltip" title="View Comments"><i class="fa fa-book"></i></a></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="Bans">...</div>
                    <div class="tab-pane" id="Logins">...</div>
                    <div class="tab-pane" id="Donations">...</div>
                </div>
                <h4><i class="fa fa-twitter"></i> Twitter</h4>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <span>Our mission is to bring affordable Technology education to people everywhere, in order to help them achieve their dreams and change the world.</span>
            </div>
            <div class="col-md-3">
                <ul>
                    <li>About</li>
                    <li>Link Teamspeak</li>
                    <li>Rules</li>
                    <li>About</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li>About</li>
                    <li>Link Teamspeak</li>
                    <li>Rules</li>
                    <li>About</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li>About</li>
                    <li>Link Teamspeak</li>
                    <li>Rules</li>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@javascripts('kickstart')
</body>
</html>
