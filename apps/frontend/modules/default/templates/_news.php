<ul class="news">
<?php foreach($news as $single): ?>
    <li>
    	<a class="various fancybox.ajax " href="/news/<?php echo $single->getId() ?>">
    		<span class="news">NEWS &raquo; </span><span><?php echo $single->getTitle() ?></span> <span class="small">(clic per leggere)</span>
    	</a>
      
    </li>
  <?php endforeach ?>
</ul>