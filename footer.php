<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link
 *
 * @package Clearsoft
 * @subpackage RedmondsFarm
 * @since 1.0
 * @version 1.0
 */

?>
<!-- FOOTER -->
<footer id="footer">
    <div class="copyright">
        <div class="container hidden-sm-down">
            <div class="float-right">
                <a href="https://www.sherryfitz.ie/branch/gorey" target="_blank">Sherry FitzGerald O'Leary Kinsella</a> | tel : <a href="0539430088" type="tel">053 9430088</a>
            </div>
            <div class="float-left">
                Website By <a href="https://www.clearsoft.ie" target="_blank">ClearSoft</a>
            </div>
        </div>
        <div class="container hidden-sm-up">
            <div class="text-center">
                <a href="https://www.sherryfitz.ie/branch/gorey" target="_blank">Sherry FitzGerald O'Leary Kinsella</a> | tel : <a href="0539430088" type="tel">053 9430088</a>
            </div>
            <div class="text-center">
                Website By <a href="https://www.clearsoft.ie" target="_blank">ClearSoft</a>
            </div>
        </div>
    </div>
</footer>			<!-- /FOOTER -->

</div>
<!-- /wrapper -->


<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>


<!-- PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div><!-- /PRELOADER -->

<!-- Google Map -->
<script>
    function initMap() {
        var centreMap = { lat: 53.014469, lng: -6.399321 };
        var uluru = { lat: 52.667195, lng: -6.287813 };
        var map = new google.maps.Map(document.getElementById('mapTag'), {
            zoom: 9,
            center: uluru,
            scrollwheel: false
        });

        var contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<img src="<?php echo get_template_directory_uri() ;?>/assets/images/logo-dark.png" width="145" height="80"/>' +
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            title: 'MilQuarter'
        });

        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });
        infowindow.open(map, marker);
    }
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArD9J6nci2T70ycnSgL2BklRFB6kNHpNM&callback=initMap">
</script>

<!-- JAVASCRIPT FILES -->
<script>var plugin_path = '<?php echo get_template_directory_uri() ;?>/assets/plugins/';</script>
<script src="<?php echo get_template_directory_uri() ;?>/assets/plugins/jquery/jquery-3.3.1.min.js"></script>

<!-- SCRIPTS -->
<script src="<?php echo get_template_directory_uri() ;?>/assets/js/scripts.js"></script>

<?php wp_footer(); ?>

</body>
</html>