<div id="disqus_thread"></div>
<script>
   var disqus_config = function () {
       this.page.url = '<?php the_permalink(); ?>';
       this.page.identifier = '<?php the_ID(); ?>';
   };
   (function() {
       var d = document, s = d.createElement('script');
       s.src = '//codecorps.disqus.com/embed.js';
       s.setAttribute('data-timestamp', +new Date());
       (d.head || d.body).appendChild(s);
   })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>