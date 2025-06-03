<?php
/**
 * The template for displaying all pages
 * Template name: Planning
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mlba
 */

get_header();
?>

<main class="main" id="planning">

        <section class="section-wrap section-first no-padding-top">
            <div class="container">
                <div class="section-row">
                    <div class="section-content-text">
                        <div class="section-text">
                            <h4>Device Info</h4>
                            <code id="width" style="display: block; margin-bottom: 0.5rem;"></code>
                            <code id="height" style="display: block; margin-bottom: 0.5rem;"></code>
                            <code id="dpr" style="display: block; margin-bottom: 0.5rem;"></code>
                            <code id="scale" style="display: block; margin-bottom: 0.5rem;"></code>
                            <code id="viewport" style="display: block; margin-bottom: 0.5rem;"></code>
                            <code id="device" style="display: block; margin-bottom: 0.5rem;"></code>
                            <code id="useragent" style="display: block; margin-bottom: 0.5rem;"></code>
                            <script>
                                function getDeviceModel() {
                                    const ua = navigator.userAgent;

                                    if (/iPhone/.test(ua)) {
                                        if (/iPhone OS 17/.test(ua)) return 'iPhone 15 series (iOS 17)';
                                        if (/iPhone OS 16/.test(ua)) return 'iPhone 14 series (iOS 16)';
                                        if (/iPhone OS 15/.test(ua)) return 'iPhone 13 series (iOS 15)';
                                        return 'iPhone (unknown model)';
                                    }

                                    if (/Android/.test(ua)) {
                                        if (/SM-G/.test(ua)) return 'Samsung Galaxy';
                                        if (/Pixel/.test(ua)) return 'Google Pixel';
                                        if (/OnePlus/.test(ua)) return 'OnePlus';
                                        return 'Android device';
                                    }

                                    if (/iPad/.test(ua)) return 'iPad';
                                    if (/Mac/.test(ua)) return 'Mac';
                                    if (/Windows/.test(ua)) return 'Windows PC';

                                    return 'Unknown device';
                                }

                                document.getElementById('width').textContent = 'window.innerWidth: ' + window.innerWidth;
                                document.getElementById('height').textContent = 'window.innerHeight: ' + window.innerHeight;
                                document.getElementById('dpr').textContent = 'devicePixelRatio: ' + window.devicePixelRatio;
                                document.getElementById('scale').textContent = 'visualViewport.scale: ' + (window.visualViewport?.scale || 'N/A');
                                document.getElementById('viewport').textContent = 'viewport tag: ' + (document.querySelector('meta[name="viewport"]')?.content || 'NOT FOUND');
                                document.getElementById('device').textContent = 'Device: ' + getDeviceModel();
                                document.getElementById('useragent').textContent = 'User-Agent: ' + navigator.userAgent.substring(0, 50);
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
// get_sidebar();
get_footer();
