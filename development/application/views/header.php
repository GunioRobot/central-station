<!DOCTYPE HTML>
<html>
    <head>
        
        <link href='http://fonts.googleapis.com/css?family=Neucha&subset=latin' rel='stylesheet' type='text/css'>
        <?php echo getJquery(); ?>
        <?php echo js('facebox/facebox'); ?>
        <?php echo css('facebox/facebox'); ?>
        <?php echo js('ckeditor/ckeditor'); ?>
        <?php echo css('style'); ?>
        <?php echo js('defecttracker'); ?>
        <title></title>
    </head>
    <body>
      <div class="header">
          <h1>Codeigniter Defect Tracker</h1>
          <a class="button createDefect"><span>Add Defect</span></a>
          <div class="search">
            <input type="search" name="search" id="search" class="search">
            <a class="button"><span>Search</span></a>
          </div>
          <ul>
              <li class="active"><a href="#">Dashboard</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Defects</a></li>
              <li><a href="#">Wiki</a></li>
              <li><a href="#">Forum</a></li>
              <li><a href="#">Users</a></li>
              <li><a href="#">Settings</a></li>
          </ul>
      </div>
   