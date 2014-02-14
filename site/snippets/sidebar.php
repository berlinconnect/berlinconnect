<div class="sidebar">
  <ul class="sidebar-container">
    <li class="lvl-1"><a href="#">Home</a><span class="entypo close"></span></li>
    <li class="lvl-1"><a href="#">About</a></li>
    <?php foreach($pages->find('sections')->children() as $section): ?>
    <li id="<?= $section->id() ?>" class="lvl-1">
      <a>
        <?php echo html($section->title()) ?>
      </a>
    </li>
    <?php endforeach ?>
    <li class="lvl-1"><a href="#">Giving</a></li>
    <li class="lvl-2"><a href="#">Contact</a></li>
    <li class="lvl-2"><a href="#">FAQ</a></li>
    <li class="lvl-2"><a href="#">Resources</a></li>
    <li class="lvl-2"><a href="#">Imprint</a></li>
  </ul>  
  <div class="social-links">
    <span class="entypo-social facebook"></span><span class="entypo-social twitter"></span><span class="entypo-social instagram"></span>
  </div>
</div>