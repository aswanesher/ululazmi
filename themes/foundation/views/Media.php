<!-- This example displays the 3 first pictures linked to the current page -->
<ion:page>

  <!-- The size of each picture will be 300px x 200px -->
  <div class="col-a">
      <h3>Image Gallery </h3>	
      <p class="thumbs"></p>
  <ion:medias type="picture" limit="3" size="150,100" >
    
    <img title="<ion:media:title/>" alt="<ion:media:alt/>" src="<ion:media:src/>" />
    </p>
  </ion:medias>
    
</div>
</ion:page> 