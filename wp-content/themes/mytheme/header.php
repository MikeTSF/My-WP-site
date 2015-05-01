<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title(' | ', true, 'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#">Brand</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Home</a>
                </li>
                <li class="dropdown" class="dropdown" class="dropdown" class="dropdown" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Service <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Budget website</a>
                        </li>
                        <li><a href="#">Zakelijke website</a>
                        </li>
                        <li><a href="#">Webshop</a>
                        </li>
                        <li><a href="#">Budget web applicatie</a>
                        </li>
                        <li><a href="#">Zakelijke web applicatie</a>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Portfolio</a>
                </li>
                <li><a href="#">Kosten</a>
                </li>
                <li><a href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Standard button -->
<button type="button" class="btn btn-default">Default</button>

<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
<button type="button" class="btn btn-primary">Primary</button>

<!-- Indicates a successful or positive action -->
<button type="button" class="btn btn-success">Success</button>

<!-- Contextual button for informational alert messages -->
<button type="button" class="btn btn-info">Info</button>

<!-- Indicates caution should be taken with this action -->
<button type="button" class="btn btn-warning btn-xs">Warning</button>

<!-- Indicates a dangerous or potentially negative action -->
<button type="button" class="btn btn-danger btn-xs">Danger</button>

<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
<button type="button" class="btn btn-link">Link</button>
<div class="container">


