    </div><!-- #main -->

    <footer></footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/underscore_1.8.3.js"></script>
    <script src="js/velocity/velocity.min.js"></script>
    <script src="js/velocity/velocity.ui.js"></script>

    <script>
        jQuery(document).ready(function(){
            var $navigation = jQuery('.navigation');

            jQuery('#nav_toggle').on('click', function(evnt){
                evnt.preventDefault();
                toggle_nav($navigation, 'open');
            });
            jQuery('.navigation .close').on('click', function(evnt){
                evnt.preventDefault();
                toggle_nav($navigation, 'close');
            });

            var navShowDebounce = _.debounce(function($this){
                if( $this.outerWidth() < 781  ){
                    $navigation.removeClass('open').addClass('closed')
                    $navigation.css('left', '-140px');
                } else {
                    $navigation.removeClass('closed').addClass('open')
                    $navigation.css('left', '0px');
                }
            });

            jQuery(window).resize(function(){
                $this = jQuery(this);
                navShowDebounce($this);
            });
        });
        function toggle_nav($navigation, direction){
            if( direction == 'open' ){
                var left_val = 0;
                $navigation.removeClass('closed').addClass('open');
            } else {
                var left_val = '-140px';
                $navigation.removeClass('open').addClass('closed');
            }
            $navigation.velocity(
                {
                    left: left_val
                },
                {
                    duration: 300,
                    easing: 'easeOutQuart',
                }
            );
        }
    </script>

</body>
</html>