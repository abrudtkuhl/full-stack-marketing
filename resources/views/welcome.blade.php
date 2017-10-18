<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Full Stack Marketing - @abrudtkuhl</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            * { border-radius: 0 !important; }
            body { font-size: 16px; line-height: 1.5;}
            h3, h4, h5, h6 { color: #666; }
            .highlight {
                padding: 9px 14px;
                margin-bottom: 14px;
                background-color: #f7f7f9;
                border: none;
            }

            .highlight pre {
                padding: 0;
                margin-top: 0;
                margin-bottom: 0;
                word-break: normal;
                white-space: nowrap;
                background-color: transparent;
                border: 0;
            }

            .highlight pre code:first-child {
                display: inline-block;
                padding-right: 45px;
            }
            
            .highlight pre code {
                font-size: inherit;
                color: #333;
            }

            footer { margin: 50px; text-align: center; text-transform: uppercase; font-size: 11px; }
            #mc_embed_signup { border: none; text-align: center; width: 100%; } /* Signup form container */

            .mc-field-group { display: inline-block; } /* positions input field horizontally */

            #mce-EMAIL { border: 2px solid #ABB0B2 ; color: #343434; background-color: #fff; padding: .7em 9em .7em 1em; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; display: inline-block; margin: 0; } /* Input Styles */

            .clear { display: inline-block; } /* positions button horizontally in line with input */

            .button { font-size: 1em; letter-spacing: .03em; color: #fff; background-color: #2386C8; padding: .7em 2em; border: 2px solid #2386C8 ; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; display: inline-block; margin: 0; } /* Button Styles */

            :-webkit-input-placeholder { color: #ABB0B2 ; } /* WebKit browsers */ 
            :-moz-placeholder { color: #ABB0B2 ; } /* Mozilla Firefox 4 to 18 */
            ::-moz-placeholder { color: #ABB0B2 ; } /* Mozilla Firefox 19+ */
            :-ms-input-placeholder { color: #ABB0B2 ; } /* Internet Explorer 10+ */

            @media (max-width: 768px) { /* positions input field and button underneath each other with 100% width for tablet and mobile */
                .mc-field-group { display: block; max-width: 100%; }
                #mce-EMAIL { padding: .7em 0 .7em 1em; width: 100%; margin: 0; }
                .clear { display: block; width: 100% }
                .button { width: 100%; margin: .5em 0 0 0; }    
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>Full Stack Marketing</h1>
                    <h3>Analytics For Developers</h3>
                    <p class="lead">Learn how to track, measure, test, and report on how users interact with your web site or app with an analytics stack. Using free tools like Google Analytics, Google Optimize, and Google Data Studio, you will learn how to track events on client and server side, a/b test features, and build fancy reports.</p>
                    <div class="alert alert-info">
                        <h4>Tips</h4>
                        <p>&#128586;  To play around, you need <a href="https://chrome.google.com/webstore/detail/google-analytics-debugger/jnkmfdileelhofjcijamephohjechhna" target="_blank">Google Analytics Debugger.</a></p>
                        <p>&#128073;  <a href="https://docs.google.com/presentation/d/1VZyy8WzmFNhDwK8eVhHRWiPUFz0ZpvjFWajaR-QmaQM/edit?usp=sharing" target="_blank">Download Full Stack Marketing Slides</a></p>
                        <p>&#128073;  Want to have your own sandbox? <a href="https://github.com/abrudtkuhl/full-stack-marketing" target="_blank">Clone this site on Github</a> and update the .env file</p>
                        <br />
                        <a class="github-button" href="https://github.com/abrudtkuhl/full-stack-marketing/subscription" data-icon="octicon-eye" data-size="large" data-show-count="true" aria-label="Watch abrudtkuhl/full-stack-marketing on GitHub">Watch</a>
                        <a class="github-button" href="https://github.com/abrudtkuhl/full-stack-marketing" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star abrudtkuhl/full-stack-marketing on GitHub">Star</a>
                        <a class="github-button" href="https://github.com/abrudtkuhl/full-stack-marketing/fork" data-icon="octicon-repo-forked" data-size="large" data-show-count="true" aria-label="Fork abrudtkuhl/full-stack-marketing on GitHub">Fork</a>
                    </div>
                    <p><strong>Note:</strong> Demo uses the new <a href="https://developers.google.com/analytics/devguides/collection/gtagjs/" target="_blank"><code>gtag.js</code></a> analytics implementation with references to the old(er) <a href="https://developers.google.com/analytics/devguides/collection/analyticsjs/" target="_blank"><code>analytics.js</code></a> implementation. All new GA properties will use <code>gtag.js</code> while many installs out there use <code>ga.js</code></p>

                    <hr />

                    <section class="form text-center">
                        <p class="lead">Get updates on Full Stack Marketing</p>
                        <div id="mc_embed_signup">
                            <form action="https://48web.us1.list-manage.com/subscribe/post?u=f2ae2d1ab66e2af57ed5ec64a&amp;id=fefa42a44b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <div class="mc-field-group">
                                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
                                    </div>
                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f2ae2d1ab66e2af57ed5ec64a_fefa42a44b" tabindex="-1" value=""></div>
                                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                </div>
                            </form>
                        </div>

                    </section>

                    <hr />

                    <section class="example">
                        <h2>Event Tracking</h2>
                        <h3>gtag.js</h3>
                        <figure class="highlight">
                            <pre>
<code>gtag('event', 'homepage_search', {
    'event_category': 'Search',
    'event_action': 'submit',
    'event_label': 'Homepage Search'
});</code>
                            </pre>
                        </figure>
                        

                        <h3>analytics.js</h3>
                        <figure class="highlight">
                            <pre>
<code>ga('send', 'event', 'Search', 'submit', 'Homepage Search');</code>
                            </pre>
                        </figure>

                        <button id="event-basic" class="btn btn-default">Try Me</button>
                    </section>

                    <hr />

                    <section class="content">
                        <h2>Resources</h2>
                        <h3>Dev Libraries / APIs</h3>
                        <ul>
                            <li><a href="https://developers.google.com/analytics/devguides/collection/gtagjs/" target="_blank">gtag.js</a></li>
                            <li><a href="https://developers.google.com/analytics/devguides/collection/analyticsjs/" target="_blank">analytics.js</a> <em>(legacy, aka ga.js)</em></li>
                            <li><a href="https://developers.google.com/analytics/devguides/collection/protocol/v1/" target="_blank">Google Analytics Measurement Protocol</a></li>
                        </ul>
                        <h3>Analytics Stack</h3>
                        <ul>
                            <li><a href="https://analytics.google.com" target="_blank">Google Analytics</a></li>
                            <li><a href="https://analytics.google.com" target="_blank">Google Tag Manager</a></li>
                            <li><a href="https://analytics.google.com" target="_blank">Google Optimize</a></li>
                            <li><a href="https://analytics.google.com" target="_blank">Google Data Studio</a></li>
                        </ul>
                        <h3>This App</h3>
                        <ul>
                            <li><a href="https://laravel.com/" target="_blank">Laravel</a></li>
                            <li><a href="http://docs.guzzlephp.org/en/stable/" target="_blank">Guzzle</a></li>
                        </ul>
                    </section>

                    <hr />

                    <section class="content">
                        <h2>Reading List</h2>
                        <h3>Server Side</h3>
                        <ul>
                            <li><a href="https://developers.google.com/analytics/devguides/collection/protocol/v1/devguide" target="_blank">Measurement Protocol Code Samples</a></li>
                            <li><a href="https://developers.google.com/analytics/devguides/collection/protocol/v1/validating-hits" target="_blank">Validating Hits With Measurement Protocol</a></li>
                            <li><a href="https://ga-dev-tools.appspot.com/hit-builder/" target="_blank">Hit Builder - Construct and Validate Measurement Protocol Hits</a></li>
                            <li><a href="https://www.lunametrics.com/blog/2013/06/04/tracking-pdfs-google-analytics-server-side/">Tutorial: Tracking PDFs With Google Analytics Server Side</a></li>
                        </ul>
                        <h3>Google Tag Manager</h3>
                        <ul>
                            <li><a href="https://www.simoahava.com/" target="_blank">everything from Simo Ahava</a></li>
                            <li><a href="https://www.optimizesmart.com/google-tag-manager-data-layer-explained-like-never/" target="_blank">Google Tag Manager Data Layer Explained</a></li>
                        </ul>
                        <h3>Google Optimize</h3>
                        <ul>
                            <li><a href="https://chrome.google.com/webstore/detail/google-optimizer-extensio/bhdplaindhdkiflmbfbciehdccfhegci" target="_blank">Google Optimize Chrome Extenstion</a></li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>

        <footer>
            <div class="links">
                <a href="https://twitter.com/abrudtkuhl" target="_blank">@abrudtkuhl</a> / 
                <a href="https://github.com/abrudtkuhl/full-stack-marketing" target="_blank">GitHub</a> / 
                <a href="https://www.google.com/partners/#i_profile;idtf=116524165081125947809;" target="_blank">Certified Google Analytics</a>
            </div>
        </footer>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{env('GTM_ID')}}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{env('GTM_ID')}}');

            document.getElementById('event-basic').onclick = function() {
                gtag('event', 'homepage_search', {
                    'event_category': 'Search',
                    'event_action': 'submit',
                    'event_label': 'Homepage Search'
                });
            };
        </script>

        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>
