<?php
include "indexClass.php";
?>
<!DOCTYPE html>
<html>

  <head>
    <title>Material Design for Bootstrap</title>

    <!-- Mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Twitter Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design for Bootstrap -->
    <link href="css/roboto.min.css" rel="stylesheet">
    <link href="css/material-fullpalette.min.css" rel="stylesheet">
    <link href="css/ripples.min.css" rel="stylesheet">

    <!-- Dropdown.js -->
    <link href="css/jquery.dropdown.css" rel="stylesheet">

	<!-- ex inline css -->
	<link href="css/index.css" rel="stylesheet">


  </head>
  <body>

    <!--<a href="https://github.com/MTRNord/gluon-web-remote" style="position: absolute; top: 0; left: 0; border: 0; z-index: 10;"><img src="images/forkme_left_darkblue_121621.png" alt="Fork me on GitHub" data-canonical-src="images/forkme_right_darkblue_121621.png"></a>-->

    <div class="header-panel shadow-z-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-3">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseNav" aria-expanded="false" aria-controls="collapseNav" style="position: absolute;bottom: 6px;padding-left: 20px;background-color:#dc0067;">
  Collapse Menu
</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid main">
      <div class="row">
        <nav class="col-xs-3 menu collapse" id="collapseNav" style:"z-index:1000 !important;">
          <ul>
            <li class="active withripple" data-target="#welcome">Welcome to the Gluon Admin</li>
            <li class="withripple" data-target="#getting-started">Getting Started</li>
            <li><a href="http://fezvrasta.github.com/bootstrap-material-design/bootstrap-elements.html" target="_blank">Bootstrap elements <i class="mdi-action-open-in-new"></i></a></li>
            <li class="withripple" data-target="#material-colors">Material Colors</li>
            <li class="withripple" data-target="#checkbox">Checkbox</li>
            <li class="withripple" data-target="#radio-button">Radio Button</li>
            <li class="withripple" data-target="#toggle-button">Toggle Button</li>
            <li class="withripple" data-target="#input">Input</li>
            <li class="withripple" data-target="#navbar">Navbar</li>
            <li class="withripple" data-target="#progress-bar">Progress Bar</li>
            <li class="withripple" data-target="#slider">Slider</li>
            <li class="withripple">Tabs (To do)</li>
            <li class="withripple" data-target="#button">Button</li>
            <li class="withripple">Icon button (To do)</li>
            <li class="withripple" data-target="#floating-action-button">Floating Action Button</li>
            <li class="withripple" data-target="#dropdown">Dropdown (Work in progress)</li>
            <li class="withripple" data-target="#dropdown-menu">Dropdown Menu</li>
            <li class="withripple" data-target="#dialog">Dialog</li>
            <li class="withripple" data-target="#shadow">Shadow</li>
          </ul>
        </nav>
        <div class="pages col-xs-9">
          <div class="col-xs-10">
            <div class="well page active" id="welcome">
              <h1 class="header">Welcome to the Gluon Admin</h1>
              <p>
				<?php
					main::openConnection();
				?>
			  </p>
            </div>
            <div class="well page" id="getting-started">
              <h1 class="header">Getting Started</h1>
			  <p></p>
            </div>
            <div class="well page" id="checkbox">
              <h1 class="header">Checkbox</h1>
			  <p></p>
            </div>
            <div class="well page" id="radio-button">
              <h1 class="header">Checkbox</h1>
              <h2>Keep Wi-Fi on during sleep</h2>
              <div class="sample1">
                <div class="radio radio-success">
                  <label>
                    <input type="radio" name="sample1" value="option1" checked="">
                    Always
                  </label>
                </div>
                <div class="radio radio-success">
                  <label>
                    <input type="radio" name="sample1" value="option1">
                    Only when plugged in
                  </label>
                </div>
                <div class="radio radio-success">
                  <label>
                    <input type="radio" name="sample1" value="option1">
                    Never
                  </label>
                </div>
              </div>


              <h2>Wi-Fi frequency band</h2>
              <div class="sample2">
                <div class="radio radio-primary">
                  <label>
                    <input type="radio" name="sample2" value="option1" checked="">
                    Auto
                  </label>
                </div>
                <div class="radio radio-primary">
                  <label>
                    <input type="radio" name="sample2" value="option1">
                    5 GHz only
                  </label>
                </div>
                <div class="radio radio-primary">
                  <label>
                    <input type="radio" name="sample2" value="option1">
                    2.4 GHz only
                  </label>
                </div>
              </div>
            </div>
            <div class="well page" id="toggle-button">

              <h1 class="header">Toggle Button</h1>
              <div class="togglebutton">
                <label>
                  Wi-Fi
                  <input type="checkbox" checked>
                </label>
              </div>
              <div class="togglebutton">
                <label>
                  Bluetooth
                  <input type="checkbox">
                </label>
              </div>

              <h1 class="header">Toggle Button Variations</h1>
              <div class="togglebutton togglebutton-material-pink">
                <label>
                  Wi-Fi
                  <input type="checkbox" checked>
                </label>
              </div>
              <div class="togglebutton togglebutton-material-deep-orange">
                <label>
                  Bluetooth
                  <input type="checkbox" checked>
                </label>
              </div>
            </div>
            <div class="well page" id="input">
              <h1 class="header">Input</h1>
              <div class="inputs">
                <h2>Input</h2>
                <input type="text" class="form-control" placeholder="label">
                <input type="text" class="form-control floating-label" placeholder="floating label">

                <h2>Textarea</h2>
                <textarea class="form-control" placeholder="textarea label"></textarea>
                <textarea class="form-control floating-label" placeholder="textarea floating label"></textarea>

                <h2>Validation</h2>
                <input type="email" class="form-control floating-label" placeholder="email">
                <input type="number" class="form-control floating-label" placeholder="number">

                <h2>Disabled</h2>
                <input disabled type="text" class="form-control floating-label" placeholder="email">
                <input disabled type="text" class="form-control floating-label" placeholder="number">

                <h2>Hints</h2>
                <input type="text" class="form-control floating-label" data-hint="Write here something cool" placeholder="label">
                <input type="email" class="form-control floating-label" data-hint="A valid email should contain an @ symbol" placeholder="label">


                <h2>Styling</h2>
                <div class="form-group has-error">
                  <input type="text" class="form-control form-control-success" placeholder="label">
                  <input type="text" class="form-control form-control-success floating-label" placeholder="floating label">
                </div>
              </div>
            </div>
            <div class="well page" id="navbar">
              <h1 class="header">Navbar</h1>

              <div class="navbar navbar-default">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="javascript:void(0)">Brand</a>
                </div>
                <div class="navbar-collapse collapse navbar-responsive-collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="javascript:void(0)">Active</a></li>
                    <li><a href="javascript:void(0)">Link</a></li>
                    <li class="dropdown">
                      <a  href="http://fezvrasta.github.io/bootstrap-material-design/bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Dropdown header</li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                        <li><a href="javascript:void(0)">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="navbar-form navbar-left">
                    <input type="text" class="form-control col-lg-8" placeholder="Search">
                  </form>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="javascript:void(0)">Link</a></li>
                    <li class="dropdown">
                      <a href="http://fezvrasta.github.io/bootstrap-material-design/bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="navbar navbar-warning">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-warning-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="javascript:void(0)">Brand</a>
                </div>
                <div class="navbar-collapse collapse navbar-warning-collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="javascript:void(0)">Active</a></li>
                    <li><a href="javascript:void(0)">Link</a></li>
                    <li class="dropdown">
                      <a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Dropdown header</li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                        <li><a href="javascript:void(0)">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="navbar-form navbar-left">
                    <input type="text" class="form-control col-lg-8" placeholder="Search">
                  </form>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="javascript:void(0)">Link</a></li>
                    <li class="dropdown">
                      <a  href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="navbar navbar-inverse">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="javascript:void(0)">Brand</a>
                </div>
                <div class="navbar-collapse collapse navbar-inverse-collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="javascript:void(0)">Active</a></li>
                    <li><a href="javascript:void(0)">Link</a></li>
                    <li class="dropdown">
                      <a  href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Dropdown header</li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                        <li><a href="javascript:void(0)">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="navbar-form navbar-left">
                    <input type="text" class="form-control col-lg-8" placeholder="Search">
                  </form>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="javascript:void(0)">Link</a></li>
                    <li class="dropdown">
                      <a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="navbar navbar-material-light-blue-300">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-material-light-blue-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="javascript:void(0)">Brand</a>
                </div>
                <div class="navbar-collapse collapse navbar-material-light-blue-collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="javascript:void(0)">Active</a></li>
                    <li><a href="javascript:void(0)">Link</a></li>
                    <li class="dropdown">
                      <a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Dropdown header</li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                        <li><a href="javascript:void(0)">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="navbar-form navbar-left">
                    <input type="text" class="form-control col-lg-8" placeholder="Search">
                  </form>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="javascript:void(0)">Link</a></li>
                    <li class="dropdown">
                      <a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
            <div class="well page" id="progress-bar">
              <h1 class="header">Progress Bar</h1>
              <h2>Basic</h2>
              <div class="progress">
                <div class="progress-bar" style="width: 60%;"></div>
              </div>

              <h2>Contextual alternatives</h2>
              <div class="progress">
                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
              </div>

              <h2>Striped</h2>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
              </div>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
              </div>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
              </div>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
              </div>

              <h2>Animated</h2>
              <div class="progress progress-striped active">
                <div class="progress-bar" style="width: 45%"></div>
              </div>

              <h2>Stacked</h2>
              <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 35%"></div>
                <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
                <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
              </div>
			</div>
            <div class="well page" id="slider">
              <h1 class="header">Slider</h1>
              <div class="sample1">
                <h2>Music, video, games &amp; other media</h2>
                <div class="slider shor slider-material-orange"></div>

                <h2>Notifications</h2>
                <div class="slider shor slider-material-orange"></div>

                <h2>Alarms</h2>
                <div class="slider shor slider-material-orange"></div>
              </div>

              <div class="sample2">
                <div class="slider svert"></div>
                <div class="slider svert"></div>
                <div class="slider svert"></div>
              </div>

              <p>Sliders are powered by <a href="http://refreshless.com/nouislider/" target="_blank">noUiSlider</a></p>
            </div>
            <div class="well page" id="material-colors">
              <h1 class="header">Material Color Samples</h1>
              <p>This is the list of all the supported color variations. Each color can be applied to every element that supports variations.</p>

              <pre>.btn-material-{{color}}<br>.navbar-material-{{color}}<br>.well-material-{{color}}<br>etc...</pre>

              <p><b>material.css</b> includes only the primary color shades (red, pink, purple, deep-purple, etc...), if you want the entire palette please use <b>material-fullpalette.css</b></p>
              <div class="sampleOthers">
                <button class="btn btn-black btn-lg">Black</button>
                <button class="btn btn-white btn-lg">White</button>
              </div>
              <div class="sampleRed">
                <h2><button class="btn btn-material-red btn-lg">Red</button></h2>
                <button class="btn btn-material-red-50">050</button>
                <button class="btn btn-material-red-100">100</button>
                <button class="btn btn-material-red-200">200</button>
                <button class="btn btn-material-red-300">300</button>
                <button class="btn btn-material-red-400">400</button>
                <button class="btn btn-material-red-500">500</button>
                <button class="btn btn-material-red-600">600</button>
                <button class="btn btn-material-red-700">700</button>
                <button class="btn btn-material-red-800">800</button>
                <button class="btn btn-material-red-900">900</button><br>
                <button class="btn btn-material-red-A100">A100</button>
                <button class="btn btn-material-red-A200">A200</button>
                <button class="btn btn-material-red-A400">A400</button>
                <button class="btn btn-material-red-A700">A700</button>
              </div>
              <div class="samplePink">
                <h2><button class="btn btn-material-pink btn-lg">Pink</button></h2>
                <button class="btn btn-material-pink-50">050</button>
                <button class="btn btn-material-pink-100">100</button>
                <button class="btn btn-material-pink-200">200</button>
                <button class="btn btn-material-pink-300">300</button>
                <button class="btn btn-material-pink-400">400</button>
                <button class="btn btn-material-pink-500">500</button>
                <button class="btn btn-material-pink-600">600</button>
                <button class="btn btn-material-pink-700">700</button>
                <button class="btn btn-material-pink-800">800</button>
                <button class="btn btn-material-pink-900">900</button><br>
                <button class="btn btn-material-pink-A100">A100</button>
                <button class="btn btn-material-pink-A200">A200</button>
                <button class="btn btn-material-pink-A400">A400</button>
                <button class="btn btn-material-pink-A700">A700</button>
              </div>
              <div class="samplePurple">
                <h2><button class="btn btn-material-purple btn-lg">Purple</button></h2>
                <button class="btn btn-material-purple-50">050</button>
                <button class="btn btn-material-purple-100">100</button>
                <button class="btn btn-material-purple-200">200</button>
                <button class="btn btn-material-purple-300">300</button>
                <button class="btn btn-material-purple-400">400</button>
                <button class="btn btn-material-purple-500">500</button>
                <button class="btn btn-material-purple-600">600</button>
                <button class="btn btn-material-purple-700">700</button>
                <button class="btn btn-material-purple-800">800</button>
                <button class="btn btn-material-purple-900">900</button><br>
                <button class="btn btn-material-purple-A100">A100</button>
                <button class="btn btn-material-purple-A200">A200</button>
                <button class="btn btn-material-purple-A400">A400</button>
                <button class="btn btn-material-purple-A700">A700</button>
              </div>
              <div class="sampleDeepPurple">
                <h2><button class="btn btn-material-deep-purple btn-lg">Deep Purple</button></h2>
                <button class="btn btn-material-deep-purple-50">050</button>
                <button class="btn btn-material-deep-purple-100">100</button>
                <button class="btn btn-material-deep-purple-200">200</button>
                <button class="btn btn-material-deep-purple-300">300</button>
                <button class="btn btn-material-deep-purple-400">400</button>
                <button class="btn btn-material-deep-purple-500">500</button>
                <button class="btn btn-material-deep-purple-600">600</button>
                <button class="btn btn-material-deep-purple-700">700</button>
                <button class="btn btn-material-deep-purple-800">800</button>
                <button class="btn btn-material-deep-purple-900">900</button><br>
                <button class="btn btn-material-deep-purple-A100">A100</button>
                <button class="btn btn-material-deep-purple-A200">A200</button>
                <button class="btn btn-material-deep-purple-A400">A400</button>
                <button class="btn btn-material-deep-purple-A700">A700</button>
              </div>
              <div class="sampleIndigo">
                <h2><button class="btn btn-material-indigo btn-lg">Indigo</button></h2>
                <button class="btn btn-material-indigo-50">050</button>
                <button class="btn btn-material-indigo-100">100</button>
                <button class="btn btn-material-indigo-200">200</button>
                <button class="btn btn-material-indigo-300">300</button>
                <button class="btn btn-material-indigo-400">400</button>
                <button class="btn btn-material-indigo-500">500</button>
                <button class="btn btn-material-indigo-600">600</button>
                <button class="btn btn-material-indigo-700">700</button>
                <button class="btn btn-material-indigo-800">800</button>
                <button class="btn btn-material-indigo-900">900</button><br>
                <button class="btn btn-material-indigo-A100">A100</button>
                <button class="btn btn-material-indigo-A200">A200</button>
                <button class="btn btn-material-indigo-A400">A400</button>
                <button class="btn btn-material-indigo-A700">A700</button>
              </div>
              <div class="sampleBlue">
                <h2><button class="btn btn-material-blue btn-lg">Blue</button></h2>
                <button class="btn btn-material-blue-50">050</button>
                <button class="btn btn-material-blue-100">100</button>
                <button class="btn btn-material-blue-200">200</button>
                <button class="btn btn-material-blue-300">300</button>
                <button class="btn btn-material-blue-400">400</button>
                <button class="btn btn-material-blue-500">500</button>
                <button class="btn btn-material-blue-600">600</button>
                <button class="btn btn-material-blue-700">700</button>
                <button class="btn btn-material-blue-800">800</button>
                <button class="btn btn-material-blue-900">900</button><br>
                <button class="btn btn-material-blue-A100">A100</button>
                <button class="btn btn-material-blue-A200">A200</button>
                <button class="btn btn-material-blue-A400">A400</button>
                <button class="btn btn-material-blue-A700">A700</button>
              </div>
              <div class="sampleLightBlue">
                <h2><button class="btn btn-material-light-blue btn-lg">Light Blue</button></h2>
                <button class="btn btn-material-light-blue-50">050</button>
                <button class="btn btn-material-light-blue-100">100</button>
                <button class="btn btn-material-light-blue-200">200</button>
                <button class="btn btn-material-light-blue-300">300</button>
                <button class="btn btn-material-light-blue-400">400</button>
                <button class="btn btn-material-light-blue-500">500</button>
                <button class="btn btn-material-light-blue-600">600</button>
                <button class="btn btn-material-light-blue-700">700</button>
                <button class="btn btn-material-light-blue-800">800</button>
                <button class="btn btn-material-light-blue-900">900</button><br>
                <button class="btn btn-material-light-blue-A100">A100</button>
                <button class="btn btn-material-light-blue-A200">A200</button>
                <button class="btn btn-material-light-blue-A400">A400</button>
                <button class="btn btn-material-light-blue-A700">A700</button>
              </div>
              <div class="sampleCyan">
                <h2><button class="btn btn-material-cyan btn-lg">Cyan</button></h2>
                <button class="btn btn-material-cyan-50">050</button>
                <button class="btn btn-material-cyan-100">100</button>
                <button class="btn btn-material-cyan-200">200</button>
                <button class="btn btn-material-cyan-300">300</button>
                <button class="btn btn-material-cyan-400">400</button>
                <button class="btn btn-material-cyan-500">500</button>
                <button class="btn btn-material-cyan-600">600</button>
                <button class="btn btn-material-cyan-700">700</button>
                <button class="btn btn-material-cyan-800">800</button>
                <button class="btn btn-material-cyan-900">900</button><br>
                <button class="btn btn-material-cyan-A100">A100</button>
                <button class="btn btn-material-cyan-A200">A200</button>
                <button class="btn btn-material-cyan-A400">A400</button>
                <button class="btn btn-material-cyan-A700">A700</button>
              </div>
              <div class="sampleTeal">
                <h2><button class="btn btn-material-teal btn-lg">Teal</button></h2>
                <button class="btn btn-material-teal-50">050</button>
                <button class="btn btn-material-teal-100">100</button>
                <button class="btn btn-material-teal-200">200</button>
                <button class="btn btn-material-teal-300">300</button>
                <button class="btn btn-material-teal-400">400</button>
                <button class="btn btn-material-teal-500">500</button>
                <button class="btn btn-material-teal-600">600</button>
                <button class="btn btn-material-teal-700">700</button>
                <button class="btn btn-material-teal-800">800</button>
                <button class="btn btn-material-teal-900">900</button><br>
                <button class="btn btn-material-teal-A100">A100</button>
                <button class="btn btn-material-teal-A200">A200</button>
                <button class="btn btn-material-teal-A400">A400</button>
                <button class="btn btn-material-teal-A700">A700</button>
              </div>
              <div class="sampleGreen">
                <h2><button class="btn btn-material-green btn-lg">Green</button></h2>
                <button class="btn btn-material-green-50">050</button>
                <button class="btn btn-material-green-100">100</button>
                <button class="btn btn-material-green-200">200</button>
                <button class="btn btn-material-green-300">300</button>
                <button class="btn btn-material-green-400">400</button>
                <button class="btn btn-material-green-500">500</button>
                <button class="btn btn-material-green-600">600</button>
                <button class="btn btn-material-green-700">700</button>
                <button class="btn btn-material-green-800">800</button>
                <button class="btn btn-material-green-900">900</button><br>
                <button class="btn btn-material-green-A100">A100</button>
                <button class="btn btn-material-green-A200">A200</button>
                <button class="btn btn-material-green-A400">A400</button>
                <button class="btn btn-material-green-A700">A700</button>
              </div>
              <div class="sampleLightGreen">
                <h2><button class="btn btn-material-light-green btn-lg">LightGreen</button></h2>
                <button class="btn btn-material-light-green-50">050</button>
                <button class="btn btn-material-light-green-100">100</button>
                <button class="btn btn-material-light-green-200">200</button>
                <button class="btn btn-material-light-green-300">300</button>
                <button class="btn btn-material-light-green-400">400</button>
                <button class="btn btn-material-light-green-500">500</button>
                <button class="btn btn-material-light-green-600">600</button>
                <button class="btn btn-material-light-green-700">700</button>
                <button class="btn btn-material-light-green-800">800</button>
                <button class="btn btn-material-light-green-900">900</button><br>
                <button class="btn btn-material-light-green-A100">A100</button>
                <button class="btn btn-material-light-green-A200">A200</button>
                <button class="btn btn-material-light-green-A400">A400</button>
                <button class="btn btn-material-light-green-A700">A700</button>
              </div>
              <div class="sampleLime">
                <h2><button class="btn btn-material-lime btn-lg">Lime</button></h2>
                <button class="btn btn-material-lime-50">050</button>
                <button class="btn btn-material-lime-100">100</button>
                <button class="btn btn-material-lime-200">200</button>
                <button class="btn btn-material-lime-300">300</button>
                <button class="btn btn-material-lime-400">400</button>
                <button class="btn btn-material-lime-500">500</button>
                <button class="btn btn-material-lime-600">600</button>
                <button class="btn btn-material-lime-700">700</button>
                <button class="btn btn-material-lime-800">800</button>
                <button class="btn btn-material-lime-900">900</button><br>
                <button class="btn btn-material-lime-A100">A100</button>
                <button class="btn btn-material-lime-A200">A200</button>
                <button class="btn btn-material-lime-A400">A400</button>
                <button class="btn btn-material-lime-A700">A700</button>
              </div>
              <div class="sampleYellow">
                <h2><button class="btn btn-material-yellow btn-lg">Yellow</button></h2>
                <button class="btn btn-material-yellow-50">050</button>
                <button class="btn btn-material-yellow-100">100</button>
                <button class="btn btn-material-yellow-200">200</button>
                <button class="btn btn-material-yellow-300">300</button>
                <button class="btn btn-material-yellow-400">400</button>
                <button class="btn btn-material-yellow-500">500</button>
                <button class="btn btn-material-yellow-600">600</button>
                <button class="btn btn-material-yellow-700">700</button>
                <button class="btn btn-material-yellow-800">800</button>
                <button class="btn btn-material-yellow-900">900</button><br>
                <button class="btn btn-material-yellow-A100">A100</button>
                <button class="btn btn-material-yellow-A200">A200</button>
                <button class="btn btn-material-yellow-A400">A400</button>
                <button class="btn btn-material-yellow-A700">A700</button>
              </div>
              <div class="sampleAmber">
                <h2><button class="btn btn-material-amber btn-lg">Amber</button></h2>
                <button class="btn btn-material-amber-50">050</button>
                <button class="btn btn-material-amber-100">100</button>
                <button class="btn btn-material-amber-200">200</button>
                <button class="btn btn-material-amber-300">300</button>
                <button class="btn btn-material-amber-400">400</button>
                <button class="btn btn-material-amber-500">500</button>
                <button class="btn btn-material-amber-600">600</button>
                <button class="btn btn-material-amber-700">700</button>
                <button class="btn btn-material-amber-800">800</button>
                <button class="btn btn-material-amber-900">900</button><br>
                <button class="btn btn-material-amber-A100">A100</button>
                <button class="btn btn-material-amber-A200">A200</button>
                <button class="btn btn-material-amber-A400">A400</button>
                <button class="btn btn-material-amber-A700">A700</button>
              </div>
              <div class="sampleOrange">
                <h2><button class="btn btn-material-orange btn-lg">Orange</button></h2>
                <button class="btn btn-material-orange-50">050</button>
                <button class="btn btn-material-orange-100">100</button>
                <button class="btn btn-material-orange-200">200</button>
                <button class="btn btn-material-orange-300">300</button>
                <button class="btn btn-material-orange-400">400</button>
                <button class="btn btn-material-orange-500">500</button>
                <button class="btn btn-material-orange-600">600</button>
                <button class="btn btn-material-orange-700">700</button>
                <button class="btn btn-material-orange-800">800</button>
                <button class="btn btn-material-orange-900">900</button><br>
                <button class="btn btn-material-orange-A100">A100</button>
                <button class="btn btn-material-orange-A200">A200</button>
                <button class="btn btn-material-orange-A400">A400</button>
                <button class="btn btn-material-orange-A700">A700</button>
              </div>
              <div class="sampleDeepOrange">
                <h2><button class="btn btn-material-deep-orange btn-lg">Deep Orange</button></h2>
                <button class="btn btn-material-deep-orange-50">050</button>
                <button class="btn btn-material-deep-orange-100">100</button>
                <button class="btn btn-material-deep-orange-200">200</button>
                <button class="btn btn-material-deep-orange-300">300</button>
                <button class="btn btn-material-deep-orange-400">400</button>
                <button class="btn btn-material-deep-orange-500">500</button>
                <button class="btn btn-material-deep-orange-600">600</button>
                <button class="btn btn-material-deep-orange-700">700</button>
                <button class="btn btn-material-deep-orange-800">800</button>
                <button class="btn btn-material-deep-orange-900">900</button><br>
                <button class="btn btn-material-deep-orange-A100">A100</button>
                <button class="btn btn-material-deep-orange-A200">A200</button>
                <button class="btn btn-material-deep-orange-A400">A400</button>
                <button class="btn btn-material-deep-orange-A700">A700</button><br><br>
              </div>
              <div class="sampleBrown">
                <h2><button class="btn btn-material-brown btn-lg">Brown</button></h2>
                <button class="btn btn-material-brown-50">050</button>
                <button class="btn btn-material-brown-100">100</button>
                <button class="btn btn-material-brown-200">200</button>
                <button class="btn btn-material-brown-300">300</button>
                <button class="btn btn-material-brown-400">400</button>
                <button class="btn btn-material-brown-500">500</button>
                <button class="btn btn-material-brown-600">600</button>
                <button class="btn btn-material-brown-700">700</button>
                <button class="btn btn-material-brown-800">800</button>
                <button class="btn btn-material-brown-900">900</button>
              </div>
              <div class="sampleGrey">
                <h2><button class="btn btn-material-grey btn-lg">Grey</button></h2>
                <button class="btn btn-material-grey-50">050</button>
                <button class="btn btn-material-grey-100">100</button>
                <button class="btn btn-material-grey-200">200</button>
                <button class="btn btn-material-grey-300">300</button>
                <button class="btn btn-material-grey-400">400</button>
                <button class="btn btn-material-grey-500">500</button>
                <button class="btn btn-material-grey-600">600</button>
                <button class="btn btn-material-grey-700">700</button>
                <button class="btn btn-material-grey-800">800</button>
                <button class="btn btn-material-grey-900">900</button>
              </div>
              <div class="sampleBlueGrey">
                <h2><button class="btn btn-material-blue-grey btn-lg">Blue Grey</button></h2>
                <button class="btn btn-material-blue-grey-50">050</button>
                <button class="btn btn-material-blue-grey-100">100</button>
                <button class="btn btn-material-blue-grey-200">200</button>
                <button class="btn btn-material-blue-grey-300">300</button>
                <button class="btn btn-material-blue-grey-400">400</button>
                <button class="btn btn-material-blue-grey-500">500</button>
                <button class="btn btn-material-blue-grey-600">600</button>
                <button class="btn btn-material-blue-grey-700">700</button>
                <button class="btn btn-material-blue-grey-800">800</button>
                <button class="btn btn-material-blue-grey-900">900</button>
              </div>
            </div>
            <div class="well page" id="button">
              <h1 class="header">Button</h1>
              <div class="sample1">
                <h2>Normal buttons</h2>
                <button class="btn btn-default">Button</button>
                <button class="btn btn-primary">Colored</button>
                <button class="btn btn-default" disabled>Disabled</button>
                <button class="btn btn-default btn-link">Noink</button>
              </div>
              <div class="sample1">
                <h2>Flat buttons</h2>
                <button class="btn btn-default btn-flat">Button</button>
                <button class="btn btn-primary btn-flat">Colored</button>
                <button class="btn btn-default btn-flat" disabled>Disabled</button>
                <button class="btn btn-default btn-flat btn-link">Noink</button>
              </div>
              <div class="sample2">
                <h2>Raised buttons</h2>
                <button class="btn btn-default btn-raised">Button</button>
                <button class="btn btn-primary btn-raised">Colored</button>
                <button class="btn btn-default btn-raised" disabled>Disabled</button>
                <button class="btn btn-default btn-raised btn-link">Noink</button>
              </div>
              <div class="sample3">
                <h2>Custom button content</h2>
                <button class="btn btn-primary btn-flat"><i class="mdi-navigation-check"></i> Ok</button>
                <button class="btn btn-default btn-flat"><i class="mdi-navigation-close"></i> Cancel</button>
              </div>
            </div>
            <div class="well page" id="floating-action-button">
              <h1 class="header">Floating Action Button</h1>

              <h2>Regular</h2>
              <button class="btn btn-fab btn-raised btn-material-red"><i class="mdi-navigation-arrow-forward"></i></button>
              <button class="btn btn-fab btn-raised btn-primary"><i class="mdi-image-edit"></i></button>

              <h2>Mini</h2>
              <button class="btn btn-fab btn-fab-mini btn-raised btn-sm btn-success"><i class="mdi-navigation-check"></i></button>
              <button class="btn btn-fab btn-fab-mini btn-raised btn-material-lightyellow"><i class="mdi-content-reply"></i></button>
            </div>
            <div class="well page" id="dropdown">
              <h1 class="header">Dropdown</h1>
              <h2>Simple dropdown</h2>
              <span class="dropdown"><i class="mdi-navigation-menu"></i></span>
            </div>
            <div class="well page" id="dropdown-menu">
              <h1 class="header">Dropdown</h1>

              <div class="sample">
                <select class="form-control" placeholder="Your favorite pastry">
                  <option value="Apple fritter">Apple fritter</option>
                  <option value="Croissant">Croissant</option>
                  <option value="Donut">Donut</option>
                  <option value="Financier">Financier</option>
                  <option value="Jello">Jello</option>
                  <option value="Madeleine">Madeleine</option>
                  <option value="Pound cake">Pound cake</option>
                  <option value="Pretzel">Pretzel</option>
                  <option value="Sfogliatelle">Sfogliatelle</option>
                </select>

                <br>

                <select class="form-control" disabled placeholder="Your favorite pastry">
                  <option value="disabled">Disabled</option>
                </select>
              </div>
              <br>
              <p>Dropdowns provided by <a href="https://github.com/FezVrasta/dropdown.js" target="_blank">Dropdown.js</a></p>

            </div>
            <div class="well page" id="dialog">
              <h1 class="header">Dialog</h1>

              <h2>Simple Dialog</h2>
              <button class="btn btn-primary" data-toggle="modal" data-target="#simple-dialog">Open dialog</button>

              <h2>Dialog with header and footer</h2>
              <button class="btn btn-primary" data-toggle="modal" data-target="#complete-dialog">Open dialog</button>

              <div id="simple-dialog" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <p>E dolore commodo, id anim aute sint cupidatat eu est anim tamen ad possumus,
                        legam officia firmissimum. Eram deserunt domesticarum, iis ita praetermissum,
                        nam aliquip quo probant, incididunt et occaecat an nam enim exquisitaque a
                        nescius velit admodum, non ad cohaerescant, probant o nulla tempor. Aute aut te
                        quis arbitror ubi ne aliqua consequat aliquip. Ad sunt laborum senserit, de do
                        quem possumus. Sint tractavissent cupidatat aute possumus ita elit ad cupidatat.
                        Arbitror ab fabulas o eu e veniam pariatur. Non voluptate comprehenderit ad nisi
                        id voluptate. Quis distinguantur quibusdam quae mentitum o si minim illum nisi
                        mandaremus.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div id="complete-dialog" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Dialog</h4>
                    </div>
                    <div class="modal-body">
                      <p>Fore aut non quem incididunt, varias reprehenderit deserunt quem offendit,
                        cillum proident ne reprehenderit, quem ad laborum, quo possumus praetermissum,
                        si ne illustriora, hic appellat coniunctione, do labore aliqua quo probant. In
                        probant voluptatibus quo mentitum est laboris. Quorum mandaremus graviterque.
                        Mentitum id velit, dolor aut litteris, ea varias illustriora, ita commodo ita
                        ingeniis, iis nulla appellat incurreret, aut irure amet summis pariatur ita ubi
                        quis dolore veniam proident, consequat sed ingeniis.</p>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary" data-dismiss="modal">Dismiss</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="well page" id="shadow">
              <h1 class="header">Shadow</h1>

              <h2>Shadows</h2>
              <div class="sample">z = 0</div>
              <div class="sample shadow-z-1">z = 1</div>
              <div class="sample shadow-z-2">z = 2</div>
              <div class="sample shadow-z-3">z = 3</div>
              <div class="sample shadow-z-4">z = 4</div>
              <div class="sample shadow-z-5">z = 5</div>

              <h2>Animated</h2>
              <div id="shadow-sample2" data-tap="0">tap</div>
              <div id="shadow-sample3" data-tap="0">tap</div>

              <script>
                $(document).on("click", "#shadow-sample2, #shadow-sample3", function() {
                  var tap = ($(this).data("tap") * 1) + 1;
                  if (tap === 6) {
                    tap = 0;
                  }
                  $(this).data("tap", tap);
                  var shadow = "shadow-z-" + tap;
                  $(this).attr("class", shadow);
                });
              </script>
            </div>
          </div>
          <div class="col-xs-2">
            <button class="btn btn-fab btn-material-grey-200" id="opensource"><i class="mdi-action-open-in-new"></i></button></div>
        </div>
      </div>
    </div>

    <div id="source-modal" class="modal fade" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Source Code</h4>
          </div>
          <div class="modal-body">
            <pre></pre>
          </div>
        </div>
      </div>
    </div>


    <!-- jQuery -->
    <script src="js/jquery-1.10.2.min.js"></script>

    <!-- Open source code -->
    <script>
      window.page = window.location.hash || "#welcome";

      $(document).ready(function() {
        if (window.page != "#welcome") {
          $(".menu").find("li[data-target=" + window.page + "]").trigger("click");
        }
      });

      $(window).on("resize", function() {
        $("html, body").height($(window).height());
        $(".main, .menu").height($(window).height() - $(".header-panel").outerHeight());
        $(".pages").height($(window).height());
      }).trigger("resize");

      $(".menu li").click(function() {
        // Menu
        if (!$(this).data("target")) return;
        if ($(this).is(".active")) return;
        $(".menu li").not($(this)).removeClass("active");
        $(".page").not(page).removeClass("active").hide();
        window.page = $(this).data("target");
        var page = $(window.page);
        window.location.hash = window.page;
        $(this).addClass("active");


        page.show();

        var totop = setInterval(function() {
          $(".pages").animate({scrollTop:0}, 0);
        }, 1);

        setTimeout(function() {
          page.addClass("active");
          setTimeout(function() {
            clearInterval(totop);
          }, 1000);
        }, 100);
      });

      function cleanSource(html) {
        var lines = html.split(/\n/);

        lines.shift();
        lines.splice(-1, 1);

        var indentSize = lines[0].length - lines[0].trim().length,
            re = new RegExp(" {" + indentSize + "}");

        lines = lines.map(function(line){
          if (line.match(re)) {
            line = line.substring(indentSize);
          }

          return line;
        });

        lines = lines.join("\n");

        return lines;
      }

      $("#opensource").click(function() {
        $.get(window.location.href, function(data){
          var html = $(data).find(window.page).html();
          html = cleanSource(html);
          $("#source-modal pre").text(html);
          $("#source-modal").modal();
        });
      });
    </script>

    <!-- Twitter Bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Material Design for Bootstrap -->
    <script src="js/material.min.js"></script>
    <script src="js/ripples.min.js"></script>
    <script>
      $.material.init();
    </script>


    <!-- Sliders -->
    <script src="js/jquery.nouislider.min.js"></script>
    <script>
      $(function() {
        $.material.init();
        $(".shor").noUiSlider({
          start: 40,
          connect: "lower",
          range: {
            min: 0,
            max: 100
          }
        });

        $(".svert").noUiSlider({
          orientation: "vertical",
          start: 40,
          connect: "lower",
          range: {
            min: 0,
            max: 100
          }
        });
      });
    </script>

    <!-- Dropdown.js -->
    <script src="js/jquery.dropdown.js"></script>
    <script>
      $("#dropdown-menu select").dropdown();
    </script>

  </body>
</html>
