<?php
/**
 * footer.php
 * 
 * 尾部
 * 
 * @author 熊猫小A
 * 
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<script>
    var serviceWorkerUri = '/SWCacheRule.js';

    if ('serviceWorker' in navigator) {  
        navigator.serviceWorker.register(serviceWorkerUri).then(function() {
          if (navigator.serviceWorker.controller) {
            console.log('Assets cached by the controlling service worker.');
          } else {
            console.log('Please reload this page to allow the service worker to handle network operations.');
          }
        }).catch(function(error) {
          console.log('ERROR: ' + error);
        });
    } else {
        console.log('Service workers are not supported in the current browser.');
    }
</script>
<?php $this->footer(); ?>
<script src="<?php $this->options->themeUrl('/assets/hljs/highlight.pack.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('/assets/owo/owo.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('/assets/fancybox/jquery.fancybox.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('/assets/main.0b.js'); ?>"></script>
<!--script src="<?php $this->options->themeUrl('/assets/smothscroll/smothscroll.js'); ?>"></script-->
<?php echo $this->options->customfooter; ?>
<script src='<?php $this->options->themeUrl('/assets/mathjax/2.7.4/MathJax.js'); ?>' async></script>
<script type="text/x-mathjax-config">
    MathJax.Hub.Config({
      tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
    });
</script>
</body>
</html>