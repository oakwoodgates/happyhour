<?php
/**
 * Template Name: zDemo Style Guide
 *
 * @package WordPress
 * @subpackage happyhour
 * @since 1.0.0
 */
get_header();
?>

<div class="page-header" id="banner">
  <div class="row">
    <div class="col-lg-8 col-md-7 col-sm-6">
      <h1>Style Guide</h1>
      <p class="lead">dark, steel, smokey, mixology, martini, class, relaxed, entertainment</p>
    </div>
  </div>
</div>

<!-- Navbar
================================================== -->
<div class="bs-docs-section clearfix">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h1 id="navbar">Navbar</h1>
      </div>

      <div class="bs-component">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="javascript:void(0)">Brand</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="javascript:void(0)">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="javascript:void(0)">Link</a></li>
                <li class="dropdown">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="javascript:void(0)">Action</a></li>
                    <li><a href="javascript:void(0)">Another action</a></li>
                    <li><a href="javascript:void(0)">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0)">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0)">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:void(0)">Link</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div><!-- /example -->

      <div class="bs-component">
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="javascript:void(0)">Brand</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
              <ul class="nav navbar-nav">
                <li class="active"><a href="javascript:void(0)">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="javascript:void(0)">Link</a></li>
                <li class="dropdown">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="javascript:void(0)">Action</a></li>
                    <li><a href="javascript:void(0)">Another action</a></li>
                    <li><a href="javascript:void(0)">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0)">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0)">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:void(0)">Link</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div><!-- /example -->

    </div>
  </div>
</div>


<!-- Buttons
================================================== -->
<div class="bs-docs-section">
  <div class="page-header">
    <div class="row">
      <div class="col-lg-12">
        <h1 id="buttons">Buttons</h1>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-7">

      <p class="bs-component">
        <a href="javascript:void(0)" class="btn btn-default">Default</a>
        <a href="javascript:void(0)" class="btn btn-primary">Primary</a>
        <a href="javascript:void(0)" class="btn btn-success">Success</a>
        <a href="javascript:void(0)" class="btn btn-info">Info</a>
        <a href="javascript:void(0)" class="btn btn-warning">Warning</a>
        <a href="javascript:void(0)" class="btn btn-danger">Danger</a>
        <a href="javascript:void(0)" class="btn btn-link">Link</a>
      </p>

      <p class="bs-component">
        <a href="javascript:void(0)" class="btn btn-default disabled">Default</a>
        <a href="javascript:void(0)" class="btn btn-primary disabled">Primary</a>
        <a href="javascript:void(0)" class="btn btn-success disabled">Success</a>
        <a href="javascript:void(0)" class="btn btn-info disabled">Info</a>
        <a href="javascript:void(0)" class="btn btn-warning disabled">Warning</a>
        <a href="javascript:void(0)" class="btn btn-danger disabled">Danger</a>
        <a href="javascript:void(0)" class="btn btn-link disabled">Link</a>
      </p>


      <div style="margin-bottom: 15px;">
        <div class="btn-toolbar bs-component" style="margin: 0;">
          <div class="btn-group">
            <a href="javascript:void(0)" class="btn btn-default">Default</a>
            <a href="javascript:void(0)" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:void(0)">Action</a></li>
              <li><a href="javascript:void(0)">Another action</a></li>
              <li><a href="javascript:void(0)">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="javascript:void(0)">Separated link</a></li>
            </ul>
          </div>

          <div class="btn-group">
            <a href="javascript:void(0)" class="btn btn-primary">Primary</a>
            <a href="javascript:void(0)" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:void(0)">Action</a></li>
              <li><a href="javascript:void(0)">Another action</a></li>
              <li><a href="javascript:void(0)">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="javascript:void(0)">Separated link</a></li>
            </ul>
          </div>

          <div class="btn-group">
            <a href="javascript:void(0)" class="btn btn-success">Success</a>
            <a href="javascript:void(0)" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:void(0)">Action</a></li>
              <li><a href="javascript:void(0)">Another action</a></li>
              <li><a href="javascript:void(0)">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="javascript:void(0)">Separated link</a></li>
            </ul>
          </div>

          <div class="btn-group">
            <a href="javascript:void(0)" class="btn btn-info">Info</a>
            <a href="javascript:void(0)" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:void(0)">Action</a></li>
              <li><a href="javascript:void(0)">Another action</a></li>
              <li><a href="javascript:void(0)">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="javascript:void(0)">Separated link</a></li>
            </ul>
          </div>

          <div class="btn-group">
            <a href="javascript:void(0)" class="btn btn-warning">Warning</a>
            <a href="javascript:void(0)" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:void(0)">Action</a></li>
              <li><a href="javascript:void(0)">Another action</a></li>
              <li><a href="javascript:void(0)">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="javascript:void(0)">Separated link</a></li>
            </ul>
          </div>
        </div>
      </div>

      <p class="bs-component">
        <a href="javascript:void(0)" class="btn btn-primary btn-lg">Large button</a>
        <a href="javascript:void(0)" class="btn btn-primary">Default button</a>
        <a href="javascript:void(0)" class="btn btn-primary btn-sm">Small button</a>
        <a href="javascript:void(0)" class="btn btn-primary btn-xs">Mini button</a>
      </p>

    </div>
    <div class="col-lg-5">

      <p class="bs-component">
        <a href="javascript:void(0)" class="btn btn-default btn-lg btn-block">Block level button</a>
      </p>


      <div class="bs-component" style="margin-bottom: 15px;">
        <div class="btn-group btn-group-justified">
          <a href="javascript:void(0)" class="btn btn-default">Left</a>
          <a href="javascript:void(0)" class="btn btn-default">Middle</a>
          <a href="javascript:void(0)" class="btn btn-default">Right</a>
        </div>
      </div>

      <div class="bs-component" style="margin-bottom: 15px;">
        <div class="btn-toolbar">
          <div class="btn-group">
            <a href="javascript:void(0)" class="btn btn-default">1</a>
            <a href="javascript:void(0)" class="btn btn-default">2</a>
            <a href="javascript:void(0)" class="btn btn-default">3</a>
            <a href="javascript:void(0)" class="btn btn-default">4</a>
          </div>

          <div class="btn-group">
            <a href="javascript:void(0)" class="btn btn-default">5</a>
            <a href="javascript:void(0)" class="btn btn-default">6</a>
            <a href="javascript:void(0)" class="btn btn-default">7</a>
          </div>

          <div class="btn-group">
            <a href="javascript:void(0)" class="btn btn-default">8</a>
            <div class="btn-group">
              <a href="javascript:void(0)" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                Dropdown
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="javascript:void(0)">Dropdown link</a></li>
                <li><a href="javascript:void(0)">Dropdown link</a></li>
                <li><a href="javascript:void(0)">Dropdown link</a></li>
               </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="bs-component">
        <div class="btn-group-vertical">
            <a href="javascript:void(0)" class="btn btn-default">Button</a>
            <a href="javascript:void(0)" class="btn btn-default">Button</a>
            <a href="javascript:void(0)" class="btn btn-default">Button</a>
            <a href="javascript:void(0)" class="btn btn-default">Button</a>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Typography
================================================== -->
<div class="bs-docs-section">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h1 id="type">Typography</h1>
      </div>
    </div>
  </div>

  <!-- Headings -->

  <div class="row">
    <div class="col-lg-4">
      <div class="bs-component">
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>
        <h6>Heading 6</h6>
        <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="bs-component">
        <h2>Example body text</h2>
        <p>Nullam quis risus eget <a href="javascript:void(0)">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
        <p><small>This line of text is meant to be treated as fine print.</small></p>
        <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
        <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
        <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
      </div>

    </div>
    <div class="col-lg-4">
      <div class="bs-component">
        <h2>Emphasis classes</h2>
        <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
        <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
        <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
        <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      </div>

    </div>
  </div>

  <!-- Neon -->

  <div class="row">
    <div class="col-lg-12">
      <h2 id="type-neon">Neon</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-xs12">
      <div class="bs-component">
      <p class="neon neon-blue">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
      <p class="neon neon-green">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
      <p class="neon neon-purple">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
      <p class="neon neon-red">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
      <p class="neon neon-sign neon-blue">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
      <p class="neon neon-sign neon-green">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
      <p class="neon neon-sign neon-purple">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
      <p class="neon neon-sign neon-red">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
      <h3>zwartevilt pattern</h3> 
      <p class="neon neon-sign neon-blue pattern-zwartevilt">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
      <p class="neon neon-sign neon-green pattern-zwartevilt">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
      <p class="neon neon-sign neon-purple pattern-zwartevilt">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
      <p class="neon neon-sign neon-red pattern-zwartevilt">Lorem ipsum dolor sit amet, consectetur adipiscing</p> 
      </div>
    </div>
  </div>

  <!-- Blockquotes -->

  <div class="row">
    <div class="col-lg-12">
      <h2 id="type-blockquotes">Blockquotes</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <div class="bs-component">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
        </blockquote>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="bs-component">
        <blockquote class="pull-right">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
        </blockquote>
      </div>
    </div>
  </div>
</div>

<!-- Tables
================================================== -->
<div class="bs-docs-section">

  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h1 id="tables">Tables</h1>
      </div>

      <div class="bs-component">
        <table class="table table-striped table-hover ">
          <thead>
            <tr>
              <th>#</th>
              <th>Column heading</th>
              <th>Column heading</th>
              <th>Column heading</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class="info">
              <td>3</td>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class="success">
              <td>4</td>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class="danger">
              <td>5</td>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class="warning">
              <td>6</td>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class="active">
              <td>7</td>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
          </tbody>
        </table> 
      </div><!-- /example -->
    </div>
  </div>
</div>

<!-- Forms
================================================== -->
<div class="bs-docs-section">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h1 id="forms">Forms</h1>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <div class="well bs-component">
        <form class="form-horizontal">
          <fieldset>
            <legend>Legend</legend>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="inputEmail" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-lg-2 control-label">Password</label>
              <div class="col-lg-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Checkbox
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="textArea" class="col-lg-2 control-label">Textarea</label>
              <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="textArea"></textarea>
                <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 control-label">Radios</label>
              <div class="col-lg-10">
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                    Option one is this
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    Option two can be something else
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="select" class="col-lg-2 control-label">Selects</label>
              <div class="col-lg-10">
                <select class="form-control" id="select">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                <br>
                <select multiple="" class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    <div class="col-lg-4 col-lg-offset-1">

        <form class="bs-component">
          <div class="form-group">
            <label class="control-label" for="focusedInput">Focused input</label>
            <input class="form-control" id="focusedInput" type="text" value="This is focused...">
          </div>

          <div class="form-group">
            <label class="control-label" for="disabledInput">Disabled input</label>
            <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
          </div>

          <div class="form-group has-warning">
            <label class="control-label" for="inputWarning">Input warning</label>
            <input type="text" class="form-control" id="inputWarning">
          </div>

          <div class="form-group has-error">
            <label class="control-label" for="inputError">Input error</label>
            <input type="text" class="form-control" id="inputError">
          </div>

          <div class="form-group has-success">
            <label class="control-label" for="inputSuccess">Input success</label>
            <input type="text" class="form-control" id="inputSuccess">
          </div>

          <div class="form-group">
            <label class="control-label" for="inputLarge">Large input</label>
            <input class="form-control input-lg" type="text" id="inputLarge">
          </div>

          <div class="form-group">
            <label class="control-label" for="inputDefault">Default input</label>
            <input type="text" class="form-control" id="inputDefault">
          </div>

          <div class="form-group">
            <label class="control-label" for="inputSmall">Small input</label>
            <input class="form-control input-sm" type="text" id="inputSmall">
          </div>

          <div class="form-group">
            <label class="control-label">Input addons</label>
            <div class="input-group">
              <span class="input-group-addon">$</span>
              <input type="text" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Button</button>
              </span>
            </div>
          </div>
        </form>

    </div>
  </div>
</div>

<!-- Navs
================================================== -->
<div class="bs-docs-section">

  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h1 id="nav">Navs</h1>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-4">
      <h2 id="nav-tabs">Tabs</h2>
      <div class="bs-component">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
          <li><a href="#profile" data-toggle="tab">Profile</a></li>
          <li class="disabled"><a>Disabled</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
              Dropdown <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#dropdown1" data-toggle="tab">Action</a></li>
              <li class="divider"></li>
              <li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
            </ul>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade active in" id="home">
            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
          </div>
          <div class="tab-pane fade" id="profile">
            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
          </div>
          <div class="tab-pane fade" id="dropdown1">
            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
          </div>
          <div class="tab-pane fade" id="dropdown2">
            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <h2 id="nav-pills">Pills</h2>
      <div class="bs-component">
        <ul class="nav nav-pills">
          <li class="active"><a href="javascript:void(0)">Home</a></li>
          <li><a href="javascript:void(0)">Profile</a></li>
          <li class="disabled"><a href="javascript:void(0)">Disabled</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
              Dropdown <span class="caret"></span>
            </a>
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
      <br>
      <div class="bs-component">
        <ul class="nav nav-pills nav-stacked">
          <li class="active"><a href="javascript:void(0)">Home</a></li>
          <li><a href="javascript:void(0)">Profile</a></li>
          <li class="disabled"><a href="javascript:void(0)">Disabled</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
              Dropdown <span class="caret"></span>
            </a>
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
    <div class="col-lg-4">
      <h2 id="nav-breadcrumbs">Breadcrumbs</h2>
      <div class="bs-component">
        <ul class="breadcrumb">
          <li class="active">Home</li>
        </ul>

        <ul class="breadcrumb">
          <li><a href="javascript:void(0)">Home</a></li>
          <li class="active">Library</li>
        </ul>

        <ul class="breadcrumb">
          <li><a href="javascript:void(0)">Home</a></li>
          <li><a href="javascript:void(0)">Library</a></li>
          <li class="active">Data</li>
        </ul>
      </div>

    </div>
  </div>


  <div class="row">
    <div class="col-lg-4">
      <h2 id="pagination">Pagination</h2>
      <div class="bs-component">
        <ul class="pagination">
          <li class="disabled"><a href="javascript:void(0)">&laquo;</a></li>
          <li class="active"><a href="javascript:void(0)">1</a></li>
          <li><a href="javascript:void(0)">2</a></li>
          <li><a href="javascript:void(0)">3</a></li>
          <li><a href="javascript:void(0)">4</a></li>
          <li><a href="javascript:void(0)">5</a></li>
          <li><a href="javascript:void(0)">&raquo;</a></li>
        </ul>

        <ul class="pagination pagination-lg">
          <li class="disabled"><a href="javascript:void(0)">&laquo;</a></li>
          <li class="active"><a href="javascript:void(0)">1</a></li>
          <li><a href="javascript:void(0)">2</a></li>
          <li><a href="javascript:void(0)">3</a></li>
          <li><a href="javascript:void(0)">&raquo;</a></li>
        </ul>

        <ul class="pagination pagination-sm">
          <li class="disabled"><a href="javascript:void(0)">&laquo;</a></li>
          <li class="active"><a href="javascript:void(0)">1</a></li>
          <li><a href="javascript:void(0)">2</a></li>
          <li><a href="javascript:void(0)">3</a></li>
          <li><a href="javascript:void(0)">4</a></li>
          <li><a href="javascript:void(0)">5</a></li>
          <li><a href="javascript:void(0)">&raquo;</a></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-4">
      <h2 id="pager">Pager</h2>
      <div class="bs-component">
        <ul class="pager">
          <li><a href="javascript:void(0)">Previous</a></li>
          <li><a href="javascript:void(0)">Next</a></li>
        </ul>

        <ul class="pager">
          <li class="previous disabled"><a href="javascript:void(0)">&larr; Older</a></li>
          <li class="next"><a href="javascript:void(0)">Newer &rarr;</a></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-4">

    </div>
  </div>
</div>

<!-- Indicators
================================================== -->
<div class="bs-docs-section">

  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h1 id="indicators">Indicators</h1>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <h2>Alerts</h2>
      <div class="bs-component">
        <div class="alert alert-dismissible alert-warning">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h4>Warning!</h4>
          <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="javascript:void(0)" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <div class="bs-component">
        <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Oh snap!</strong> <a href="javascript:void(0)" class="alert-link">Change a few things up</a> and try submitting again.
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="bs-component">
        <div class="alert alert-dismissible alert-success">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Well done!</strong> You successfully read <a href="javascript:void(0)" class="alert-link">this important alert message</a>.
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="bs-component">
        <div class="alert alert-dismissible alert-info">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Heads up!</strong> This <a href="javascript:void(0)" class="alert-link">alert needs your attention</a>, but it's not super important.
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <h2>Labels</h2>
      <div class="bs-component" style="margin-bottom: 40px;">
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
        <span class="label label-info">Info</span>
      </div>
    </div>
    <div class="col-lg-4">
      <h2>Badges</h2>
      <div class="bs-component">
        <ul class="nav nav-pills">
          <li class="active"><a href="javascript:void(0)">Home <span class="badge">42</span></a></li>
          <li><a href="javascript:void(0)">Profile <span class="badge"></span></a></li>
          <li><a href="javascript:void(0)">Messages <span class="badge">3</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Progress bars
================================================== -->
<div class="bs-docs-section">

  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h1 id="progress">Progress bars</h1>
      </div>

      <h3 id="progress-basic">Basic</h3>
      <div class="bs-component">
        <div class="progress">
          <div class="progress-bar" style="width: 60%;"></div>
        </div>
      </div>

      <h3 id="progress-alternatives">Contextual alternatives</h3>
      <div class="bs-component">
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
      </div>

      <h3 id="progress-striped">Striped</h3>
      <div class="bs-component">
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
      </div>

      <h3 id="progress-animated">Animated</h3>
      <div class="bs-component">
        <div class="progress progress-striped active">
          <div class="progress-bar" style="width: 45%"></div>
        </div>
      </div>

      <h3 id="progress-stacked">Stacked</h3>
      <div class="bs-component">
        <div class="progress">
          <div class="progress-bar progress-bar-success" style="width: 35%"></div>
          <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
          <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Containers
================================================== -->
<div class="bs-docs-section">

  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h1 id="container">Containers</h1>
      </div>
      <div class="bs-component">
        <div class="jumbotron">
          <h1>Jumbotron</h1>
          <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          <p><a class="btn btn-primary btn-lg">Learn more</a></p>
        </div>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-lg-12">
      <h2>List groups</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <div class="bs-component">
        <ul class="list-group">
          <li class="list-group-item">
            <span class="badge">14</span>
            Cras justo odio
          </li>
          <li class="list-group-item">
            <span class="badge">2</span>
            Dapibus ac facilisis in
          </li>
          <li class="list-group-item">
            <span class="badge">1</span>
            Morbi leo risus
          </li>
        </ul>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="bs-component">
        <div class="list-group">
          <a href="javascript:void(0)" class="list-group-item active">
            Cras justo odio
          </a>
          <a href="javascript:void(0)" class="list-group-item">Dapibus ac facilisis in
          </a>
          <a href="javascript:void(0)" class="list-group-item">Morbi leo risus
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="bs-component">
        <div class="list-group">
          <a href="javascript:void(0" class="list-group-item active">
            <h4 class="list-group-item-heading">List group item heading</h4>
            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
          </a>        
          <a href="javascript:void(0)" class="list-group-item">
            <h4 class="list-group-item-heading">List group item heading</h4>
            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
          </a>
          <a href="javascript:void(0)" class="list-group-item">
            <h4 class="list-group-item-heading">List group item heading</h4>
            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
          </a>
        </div>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-lg-12">
      <h2>Panels</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <div class="bs-component">
        <div class="panel panel-default">
          <div class="panel-body">
            Basic panel
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">Panel heading</div>
          <div class="panel-body">
            Panel content
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-body">
            Panel content
          </div>
          <div class="panel-footer">Panel footer</div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="bs-component">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Panel primary</h3>
          </div>
          <div class="panel-body">
            Panel content
          </div>
        </div>

        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">Panel success</h3>
          </div>
          <div class="panel-body">
            Panel content
          </div>
        </div>

        <div class="panel panel-warning">
          <div class="panel-heading">
            <h3 class="panel-title">Panel warning</h3>
          </div>
          <div class="panel-body">
            Panel content
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="bs-component">
        <div class="panel panel-danger">
          <div class="panel-heading">
            <h3 class="panel-title">Panel danger</h3>
          </div>
          <div class="panel-body">
            Panel content
          </div>
        </div>

        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Panel info</h3>
          </div>
          <div class="panel-body">
            Panel content
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <h2>Wells</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <div class="bs-component">
        <div class="well">
          Look, I'm in a well!
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="bs-component">
        <div class="well well-sm">
          Look, I'm in a small well!
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="bs-component">
        <div class="well well-lg">
          Look, I'm in a large well!
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Sccial
================================================== -->
<div class="bs-docs-section">
  <h1 id="media" class="page-header">Social Embeds</h1>

  <p class="lead">Embeded content from 3rd party services</p>
  <div class="row marg">
    <div class="col-xs-12 col-md-6">
      <?php get_sidebar(); ?>
    </div>
  </div>
  <div class="row marg">
    <div class="col-xs-12">
      <div class="fb-post" data-href="https://www.facebook.com/nighttripstulsa/posts/926174207440764" data-width="500"></div>

      <div class="fb-post" data-href="https://www.facebook.com/eshankles/posts/10201670641200132" data-width="500"></div>
    </div>
  </div>
</div>  
<!-- Media
================================================== -->
<div class="bs-docs-section">
  <h1 id="media" class="page-header">Media object</h1>

  <p class="lead">Abstract object styles for building various types of components (like blog comments, events, etc) that feature a left- or right-aligned image alongside textual content.</p>

    <h2>Event Lists</h2> 

     <div class="row marg">
     <div class="col-xs-12">
    <h3>Color Story</h3>
      <div class="col-xs-12 col-md-4 bkg-primary">
        Happy Hour, 25&cent; Wings, Weekly Specials
      </div>
      <div class="col-xs-6 col-md-4 bkg-info">
        Classic Party, Super Bowl, New Years Eve
      </div>
      <div class="col-xs-6 col-md-4 bkg-danger">
        Special Event, Guest Dancer, Concert After Party
      </div>
      <div class="col-xs-6 col-md-6 bkg-warning">
        Open at 7 on Labor Day
      </div>      
      <div class="col-xs-6 col-md-6 bkg-default">
        Closed Christmas
      </div>  
    </div> 
    </div>  
  <div class="row">  
 
    <div class="col-md-4 col-xs-6">   
      <div class="media event-simple event-default">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
        </div>
      </div>

      <div class="media event-simple event-primary">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
        </div>
      </div>

      <div class="media event-simple event-success">
        <div class="media-left ">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
        </div>
      </div>

      <div class="media event-simple event-warning">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
        </div>
      </div>

      <div class="media event-simple event-info">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
        </div>
      </div> 

      <div class="media event-simple event-danger">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
        </div>
      </div>

      <div class="media event-simple event-darker">
        <div class="media-left bkg-darker">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
        </div>
      </div>    

    </div>
<?php // end one ?>

    <div class="col-md-4 col-xs-6 darker"> 

      <div class="media event-simple event-default">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body bkg-darker">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
        </div>
      </div>

      <div class="media event-simple event-primary">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body bkg-darker">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
        </div>
      </div>

      <div class="media event-simple event-success">
        <div class="media-left ">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body bkg-darker">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
        </div>
      </div>

      <div class="media event-simple event-warning">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body bkg-darker">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
        </div>
      </div>

      <div class="media event-simple event-info">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body bkg-darker">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
        </div>
      </div> 

      <div class="media event-simple event-danger">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body bkg-darker">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
        </div>
      </div>

      <div class="media event-simple event-darker">
        <div class="media-left bkg-base">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body bkg-darker">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
        </div>
      </div>    
      <div class="marg"></div>
      <div class="media event-simple card-one event-primary marg">
        <div class="media-header">
          <img src="//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/10.jpg" />
        </div>      
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">M-F</span>
            <span class="date"><i class="fa fa-star-o fa-lg"></i></span>
            <span class="month">4-7pm</span>
          </a>
        </div>
        <div class="media-body" style="">
          <a class="event-description" href="javascript:void(0)">
            <h4 class="media-heading">Media heading</h4>
            Cras sit amet nibh libero, in gravida nulla.
          </a>
          <div class="overlay bkg-base"></div>        
        </div>
      </div>

      <div class="media event-simple card-one card-two event-primary marg">     
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">M-F</span>
            <span class="date"><i class="fa fa-star-o fa-lg"></i></span>
            <span class="month">4-7pm</span>
          </a>
        </div>
        <div class="media-body" style="">
          <a class="event-description" href="javascript:void(0)">
             <img src="//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/10.jpg" />
          </a>
          <div class="overlay bkg-base"></div>        
        </div>
      </div>

    </div>
<?php // end two ?>
    <div class="col-md-4 col-xs-6 event-column-one">

      <div class="media event-simple card-one event-default">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/1.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base"></div>        
        </div>
      </div>

      <div class="media event-simple card-one event-primary">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/2.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>       
        </div>
      </div>

      <div class="media event-simple card-one event-success">
        <div class="media-left ">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/3.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div>

      <div class="media event-simple card-one event-warning">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/4.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div>

      <div class="media event-simple card-one event-info">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/5.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div>   

      <div class="media event-simple card-one event-danger">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/6.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div>   

      <div class="media event-simple card-one event-darker">
        <div class="media-left bkg-darker">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/8.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div>  

      <div class="media event-simple card-one event-darker">
        <div class="media-left bkg-base">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/9.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div>

    </div>  
<?php // end three ?>
    <div class="col-md-4 col-xs-6 event-column-one">
      <div class="media event-simple event-default">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body">
          <a class="event-description" href="javascript:void(0)">
            <h4 class="media-heading">Media heading</h4>
            Cras sit amet nibh libero, in gravida nulla.
          </a>
          <div class="overlay bkg-default" style=""></div>        
        </div>
      </div>

      <div class="media event-simple event-primary">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body">
          <a class="event-description" href="javascript:void(0)">
            <h4 class="media-heading">Media heading</h4>
            Cras sit amet nibh libero, in gravida nulla.
          </a>
          <div class="overlay bkg-primary" style=""></div>        
        </div>
      </div>

      <div class="media event-simple event-success">
        <div class="media-left ">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body">
          <a class="event-description" href="javascript:void(0)">
            <h4 class="media-heading">Media heading</h4>
            Cras sit amet nibh libero, in gravida nulla.
          </a>
          <div class="overlay bkg-success" style=""></div>
        </div>
      </div>

      <div class="media event-simple event-warning">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body">
          <a class="event-description" href="javascript:void(0)">
            <h4 class="media-heading">Media heading</h4>
            Cras sit amet nibh libero, in gravida nulla.
          </a>
          <div class="overlay bkg-warning" style=""></div>
        </div>
      </div>

      <div class="media event-simple event-info">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body">
          <a class="event-description" href="javascript:void(0)">
            <h4 class="media-heading">Media heading</h4>
            Cras sit amet nibh libero, in gravida nulla.
          </a>
          <div class="overlay bkg-info" style=""></div>
        </div>
      </div>   

      <div class="media event-simple event-danger">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body">
          <a class="event-description" href="javascript:void(0)">
            <h4 class="media-heading">Media heading</h4>
            Cras sit amet nibh libero, in gravida nulla.
          </a>
          <div class="overlay bkg-danger" style=""></div>
        </div>
      </div>   

      <div class="media event-simple event-darker">
        <div class="media-left bkg-darker">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body">
          <a class="event-description" href="javascript:void(0)">
            <h4 class="media-heading">Media heading</h4>
            Cras sit amet nibh libero, in gravida nulla.
          </a>
          <div class="overlay bkg-darker" style=""></div>
        </div>
      </div> 

      <div class="media event-simple event-darker">
        <div class="media-left bkg-base">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body">
          <a class="event-description" href="javascript:void(0)">
            <h4 class="media-heading">Media heading</h4>
            Cras sit amet nibh libero, in gravida nulla.
          </a>
          <div class="overlay bkg-base" style=""></div>
        </div>
      </div>

    </div>  
<?php // end four ?>
    <div class="col-md-8 col-sm-6 event-column-one">

      <div class="media event-simple card-one event-default">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/1.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base"></div>        
        </div>
      </div>

      <div class="media event-simple card-one event-primary">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/2.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>       
        </div>
      </div>
      <div class="media event-simple card-one event-danger">
        <div class="media-header">
          <img src="//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/8.jpg" />
        </div>
        <div class="media-left bkg-darker">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body bkg-darker">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
        </div>
      </div>
      <div class="media event-simple card-one event-warning">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/4.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div>

      <div class="media event-simple card-one event-primary">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-primary" style="opacity:0.2"></div>
        </div>
      </div>   

      <div class="media event-simple card-one event-danger">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/6.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div>  

    </div>
<?php // end five ?>

  </div> <!-- /row -->

</div>
</div>
</div>
<div  class="marg pattern-zwartevilt fixed">
<div class="container">
  <div class="row pad-x">
    <div class="col-md-6 event-column-one">

      <div class="media event-simple card-one event-default">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/1.jpg');">
          <a class="event-description" href="javascript:void(0)">
            <h4 class="media-heading">Media heading</h4>
            Cras sit amet nibh libero, in gravida nulla.
          </a>
          <div class="overlay bkg-base">
          </div>
        </div>
        </div>

      <div class="media event-simple card-one event-primary">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/2.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>       
        </div>
      </div>

      <div class="media event-simple card-one event-success">
        <div class="media-left ">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/3.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div>

      <div class="media event-simple card-one event-warning">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/4.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div>

      <div class="media event-simple card-one event-info">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/5.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div>   

      <div class="media event-simple card-one event-danger">
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/6.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div>   

      <div class="media event-simple card-one event-darker">
        <div class="media-left bkg-darker">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/7.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div>

      <div class="media event-simple card-one event-darker">
        <div class="media-left bkg-darker">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/8.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div>  

      <div class="media event-simple card-one event-darker">
        <div class="media-left bkg-base">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body" style="background-image:url('//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/9.jpg');">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
      <div class="overlay bkg-base" style=""></div>
        </div>
      </div>

    </div>     

    <div class="col-sm-12 col-md-6">
      <div class="media event-simple card-one event-danger">
        <div class="media-header">
          <img src="//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/8.jpg" />
        </div>
        <div class="media-left bkg-darker">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
        </div>
      </div>      
    </div>

    <div class="col-xs-6 col-md-4">
      <div class="media event-simple card-one event-danger">
        <div class="media-header">
          <img src="//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/8.jpg" />
        </div>
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body bkg-darker">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
        </div>
      </div>      
    </div>

    <div class="col-xs-6 col-md-3">
      <div class="media event-simple card-one event-danger">
        <div class="media-header">
          <img src="//45.55.219.172/wp-content/themes/happyhour/assets/img/demo/8.jpg" />
        </div>
        <div class="media-left">
          <a href="javascript:void(0)">
            <span class="day">day</span>
            <span class="date">23</span>
            <span class="month">month</span>
          </a>
        </div>
        <div class="media-body bkg-base">
        <a class="event-description" href="javascript:void(0)">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla.
        </a>
        </div>
      </div>      
    </div>

  </div><!-- /row -->
</div>
</div>
<div id="content-bottom" class="site-content container">
<div class="bs-docs-section clearfix">




</div>

<!-- Dialogs
================================================== -->
<div class="bs-docs-section">

  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h1 id="dialogs">Dialogs</h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <h2>Modals</h2>
      <div class="bs-component">
        <!-- Large modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myLargeModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-4">.col-md-4</div>
                    <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
                    <div class="col-md-2 col-md-offset-4">.col-md-2 .col-md-offset-4</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
                  </div>
                  <div class="row">
                    <div class="col-sm-9">
                      Level 1: .col-sm-9
                      <div class="row">
                        <div class="col-xs-8 col-sm-6">
                          Level 2: .col-xs-8 .col-sm-6
                        </div>
                        <div class="col-xs-4 col-sm-6">
                          Level 2: .col-xs-4 .col-sm-6
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Small modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              ...
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <h2>Popovers</h2>
      <div class="bs-component">
        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Left</button>

        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Top</button>

        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
        sagittis lacus vel augue laoreet rutrum faucibus.">Bottom</button>

        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Right</button>
      </div>
      <h2>Tooltips</h2>
      <div class="bs-component">
        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Left</button>

        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Top</button>

        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Bottom</button>

        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Right</button>
      </div>
    </div>
  </div>
</div>
<!-- maps
================================================== -->
<div class="page-header">
  <h1>Maps</h1>
</div>  
  <style type="text/css">
      /* Set a size for our map container, the Google Map will take up 100% of this container */
      #map {
          width: 750px;
          height: auto;
          min-height: 300px;
          max-width: 100%;
      }
  </style>
<div class="row">
  <div class="col-md-8">
    <div id="map"></div>
  </div>
</div>      
<!--
     <div class="page-header">
        <h1>Collape</h1>
      </div>      
<div class="row">
  <div class="col-sm-6">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Collapsible Group Item #1
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Collapsible Group Item #2
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Collapsible Group Item #3
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

      <div class="example">
        <h2 class="example-title">Thumbnails</h2>
        <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img class="img-rounded" src="http://bootflat.github.io/img/thumbnail-1.jpg" >
                <div class="caption text-center">
                  <h3>Image Rounded</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                  <p><a href="#" class="btn btn-warning" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img class="img-circle" src="http://bootflat.github.io/img//thumbnail-2.jpg">
                <div class="caption text-center">
                  <h3>Image Circle</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                  <p><a href="#" class="btn btn-warning" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img class="img-thumbnail" src="http://bootflat.github.io/img/thumbnail-3.jpg">
                <div class="caption text-center">
                  <h3>Image Thumbnail</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                  <p><a href="#" class="btn btn-warning" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <img class="img" src="http://bootflat.github.io/img/thumbnail-4.jpg">
                <div class="caption text-center">
                  <h3>Image Default</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id ...</p>
                  <p><a href="#" class="btn btn-warning" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
              </div>
            </div>
          </div>
      </div>



     <div class="page-header">
        <h1>Carousel</h1>
      </div>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img data-src="holder.js/1140x500/auto/#777:#555/text:First slide" alt="First slide">
          </div>
          <div class="item">
            <img data-src="holder.js/1140x500/auto/#666:#444/text:Second slide" alt="Second slide">
          </div>
          <div class="item">
            <img data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" alt="Third slide">
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>   -->   
<?php
get_footer();
