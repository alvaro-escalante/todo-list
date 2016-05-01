<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Javacript Modular app</title>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.html">Modular Pattern Javascript</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
        </ul>
      </div>
    </nav>
  </header>
  <form action="" method="post" name="main">
    <input id="action" name="action" type="hidden" value="" />
  </form>
  <div class="container">
    <div id="itemModule">
      <div class="col-md-6 cold-md-offset-2">
        <h2>Item List</h2>

        <div id="count">
          <span class="plus label label-pill label-info pull-left">+</span>
          <input type="number" class="here input-xs .col-sm-* pull-left" value="" />
        </div>

        <form id="myForm" class="input-group">
          
          <input type="text" class="form-control" placeholder="Item">
          
          <span class="input-group-btn">
			  		<button type="submit" id="addItem" class="btn btn-default btn-primary">Add Items</button>
					</span>

        </form>
        <br />
        <ul class="list-group" id="people">
          <script id="item-template" type="text/template">
            {{#items}}
            <li class="list-group-item">
              <span class="del label label-pill label-danger pull-right">x</span>&nbsp; 
              
              {{.}}
            </li>
            {{/items}}
            <h3 style="margin-left: 2px;">
			     			<button class="all btn btn-default btn-danger">Clear all Items</button>
			     		</h3>
        </ul>
        </script>
      </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/2.1.2/mustache.min.js" type="text/javascript"></script>
    <script src="app.js"></script>
</body>

</html>
