<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AnalyticsDemo.xyz</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            * { border-radius: 0 !important; }
            body { font-size: 16px; line-height: 1.5;}
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

            footer { margin: 50px; text-align: center; text-transform: uppercase; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>AnalyticsDemo.xyz</h1>
                    <p class="lead">This is a thing to demo Google Analytics things. To test, you need <a href="http://analytics.google.com" target="_blank">Google Analytics</a> and <a href="https://chrome.google.com/webstore/detail/google-analytics-debugger/jnkmfdileelhofjcijamephohjechhna" target="_blank">Google Analytics Debugger.</a></p>
                    <p class="alert alert-info"><strong>Note:</strong> Demo uses the new <a href="https://developers.google.com/analytics/devguides/collection/gtagjs/" target="_blank"><code>gtag.js</code></a> analytics implementation with references to the old(er) <a href="https://developers.google.com/analytics/devguides/collection/analyticsjs/" target="_blank"><code>analytics.js</code></a> implementation. All new GA properties will use <code>gtag.js</code> while many installs out there use <code>ga.js</code></p>

                    <section class="example">
                        <h2>Event Tracking</h2>
                        <h3>gtag</h3>
                        <figure class="highlight">
                            <pre>
<code>gtag('event', 'homepage_search', {
    'event_category': 'Search',
    'event_action': 'submit',
    'event_label': 'Homepage Search'
});</code>
                            </pre>
                        </figure>
                        

                        <h3>ga.js</h3>
                        <figure class="highlight">
                            <pre>
<code>ga('send', 'event', 'Search', 'submit', 'Homepage Search');</code>
                            </pre>
                        </figure>

                        <button id="event-basic" class="btn btn-default">Try Me</button>
                    </section>

                    <hr />

                    <section class="example">
                        <h2>Global Event Tracking</h2>
                        <figure class="highlight">
                            <pre>
<code>ga('send', 'event', 'Search', 'submit', 'Homepage Search');</code>
                            </pre>
                        </figure>

                        <a href="#">Try Me</a>
                    </section>
                </div>
            </div>
        </div>

        <footer>
            <div class="links">
                <a href="https://twitter.com/abrudtkuhl" target="_blank">@abrudtkuhl</a> / 
                <a href="https://github.com/abrudtkuhl/analytics-demo" target="_blank">GitHub</a>
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
    </body>
</html>
